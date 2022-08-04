<?php

namespace App\Admin\Controllers;

use App\Models\City;
use App\Models\District;
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
        return Grid::make(District::with('cities'), function (Grid $grid) {

            $grid->column('code')->sortable();
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('cities.name','Tỉnh/Thành phố');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('code');
                $filter->like('cities.name','Tỉnh/Thành phố');
            });
            $grid->quickSearch('name');
            $grid->enableDialogCreate();
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
        return Show::make($id, new District(), function (Show $show) {
            $show->field('code');
            $show->field('id');
            $show->field('name');
            $show->field('city');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new District(), function (Form $form) {
            $form->text('code')->required();
            $form->text('name')->required();
            $form->select('city')->options(function (){
                return City::all()->pluck('name', 'code');
            })->customFormat(function ($v) {
                return $v;
            })->required();
        });
    }
}
