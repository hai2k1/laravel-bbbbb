<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\LocationInformation;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class LocationInformationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new LocationInformation(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('post_id');
            $grid->column('category');
            $grid->column('province');
            $grid->column('district');
            $grid->column('ward');
            $grid->column('id_projectbds');
            $grid->column('address');
            $grid->column('status_address');
            $grid->column('floors_number');
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
        return Show::make($id, new LocationInformation(), function (Show $show) {
            $show->field('id');
            $show->field('post_id');
            $show->field('category');
            $show->field('province');
            $show->field('district');
            $show->field('ward');
            $show->field('id_projectbds');
            $show->field('address');
            $show->field('status_address');
            $show->field('floors_number');
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
        return Form::make(new LocationInformation(), function (Form $form) {
            $form->display('id');
            $form->text('post_id');
            $form->text('category');
            $form->text('province');
            $form->text('district');
            $form->text('ward');
            $form->text('id_projectbds');
            $form->text('address');
            $form->text('status_address');
            $form->text('floors_number');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
