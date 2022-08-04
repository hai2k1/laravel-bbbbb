<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\Project;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class ProjectController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(Project::with('districts'), function (Grid $grid) {
            $grid->column('code')->sortable();
            $grid->column('id');
            $grid->column('name');
            $grid->column('districts.name');

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
        return Show::make($id, new Project(), function (Show $show) {
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
        return Form::make(new Project(), function (Form $form) {
            $form->display('code');
            $form->text('id');
            $form->text('name');
            $form->text('district');
        });
    }
}
