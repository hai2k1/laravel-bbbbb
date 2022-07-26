<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\District;
use App\Models\Province;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class DistrictController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(District::with('province'), function (Grid $grid) {
            $grid->column('district_id','id')->sortable();
            $grid->column('province.name','thành phố');
            $grid->column('name');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('district_id');
                $filter->like('province.name');
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
        return Show::make($id, District::with('province'), function (Show $show) {
            $show->field('district_id');
            $show->field('province.name','Tỉnh/Thành Phố');
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
        return Form::make(District::with('province'), function (Form $form) {
            $form->display('district_id');
            $form->text('name');
            $form->select('province_id', trans('Tỉnh/Thành phố'))
                ->options(function () {
                    return Province::all()->pluck('name', 'province_id');
                })
                ->customFormat(function ($v) {
                    return $v;
                });
        });
    }
}
