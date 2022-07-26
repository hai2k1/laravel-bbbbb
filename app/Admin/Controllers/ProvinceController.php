<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Province;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProvinceController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Province::with('district'), function (Grid $grid) {
            $grid->column('province_id','id')->sortable();
            $grid->column('name');
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('province_id');
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
        return Show::make($id, new Province(), function (Show $show) {
            $show->field('province_id');
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
        return Form::make(new Province(), function (Form $form) {
            $form->display('province_id');
            $form->text('name');
        });
    }
}
