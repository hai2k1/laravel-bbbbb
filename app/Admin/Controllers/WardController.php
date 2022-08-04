<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Ward;
use App\Models\City;
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
        return Grid::make(Ward::with('districts'), function (Grid $grid) {
            $grid->column('code')->sortable();
            $grid->column('id');
            $grid->column('name');
            $grid->column('districts.name', 'Quận huyện');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('code');
                $filter->like('districts.name', 'quận huyện');
            });
            $grid->quickSearch('name');
            $grid->enableDialogCreate();
            $grid->disableEditButton();
            $grid->showQuickEditButton();
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
        return Show::make($id, new Ward(), function (Show $show) {
            $show->field('code');
            $show->field('id');
            $show->field('name');
            $show->field('district');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Ward(), function (Form $form) {
            $form->number('code')->required();
            $form->text('name')->required();
            $form->select('district', 'Quận huyện')->options(function () {
                return District::all()->pluck('name', 'code');
            })->required();

        });
    }
}
