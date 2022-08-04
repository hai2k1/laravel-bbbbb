<?php

namespace App\Admin\Controllers;

use App\Models\City;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class CityController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(City::class, function (Grid $grid) {
            $grid->column('code');
            $grid->column('id');
            $grid->column('name');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('code');

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
        return Show::make($id, new City(), function (Show $show) {
            $show->field('code');
            $show->field('id');
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
        return Form::make(new City(), function (Form $form) {
            $form->display('code');
            $form->text('name');
        });
    }
}
