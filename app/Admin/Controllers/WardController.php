<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Ward;
use App\Models\District;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class WardController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Ward::with('district'), function (Grid $grid) {
            $grid->column('wards_id')->sortable();
            $grid->column('district.name','tên Quận/Huyện');
            $grid->column('name')->sortable();
            $grid->quickSearch(['wards_id', 'name']);
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('wards_id');
                $filter->like('district.name');
                $filter->like('name');
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
        return Show::make($id, Ward::with('district'), function (Show $show) {
            $show->field('wards_id');
            $show->field('district.name','quận huyện');
            $show->field('name');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(Ward::with('district'), function (Form $form) {
            $form->display('wards_id');
            $form->text('name');
            $form->select('district_id', trans('Quận Huyện'))
                ->options(function () {
                    return District::all()->pluck('name', 'district_id');
                })
                ->customFormat(function ($v) {
                    return $v;
                });
        });
    }
}
