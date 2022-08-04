<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Street;
use App\Models\District;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class StreetController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Street::with('districts'), function (Grid $grid) {
            $grid->column('code')->sortable();
            $grid->column('id')->sortable();
            $grid->column('name');
            $grid->column('districts.name','Quận Huyện');

            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('code');
                $filter->like('districts.name', 'Quận Huyện');
            });
            $grid->showQuickEditButton();
            $grid->disableEditButton();
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
        return Show::make($id, new Street(), function (Show $show) {
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
        return Form::make(new Street(), function (Form $form) {
            $form->number('code');
            $form->text('name');
            $form->select('district', 'Quận huyện')->options(function () {
                return District::all()->pluck('name', 'code');
            })->required();
        });
    }
}
