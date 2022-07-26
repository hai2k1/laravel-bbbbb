<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\RealEstateProject;
use App\Models\District;
use App\Models\Province;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Illuminate\Http\Request;

class RealEstateProjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(RealEstateProject::with(['ward', 'province', 'district']), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('province.name','Tỉnh/Thành Phố');
            $grid->column('district.name','Quận/Huyện');
            $grid->column('ward.name','Phường/xã');
            $grid->column('status')->using([1 => 'Hoạt động', 0 => 'Đóng băng'])  ->dot(
                [
                    1 => 'primary',
                    0 => 'danger',
                ],
                'primary'
            );
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');

            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, RealEstateProject::with(['ward', 'province', 'district']), function (Show $show) {
            $show->field('id');
            $show->field('name');
            $show->field('province.name');
            $show->field('district.name');
            $show->field('ward.name');
            $show->field('status');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(RealEstateProject::with(['ward', 'province', 'district']), function (Form $form) {
            $form->display('id');
            $form->text('name')->required();
            $form->select('id_province', trans('Tỉnh/Thành phố'))
                ->options(function () {
                    return Province::all()->pluck('name', 'province_id');
                })
                ->customFormat(function ($v) {
                    return $v;
                })->load('id_district','/api/auth/district')->required();
            $form->select('id_district', 'Quận/Huyện')->load('id_ward','/api/auth/ward')->required();
            $form->select('id_ward', 'Phường/xã')->required();
            $form->select('status', 'trạng thái')->options(
                [
                    1 => 'hoạt động',
                    0 => 'đóng băng'
                ]
            )->default(1);

            $form->display('created_at');
            $form->display('updated_at');
        });
    }

}

