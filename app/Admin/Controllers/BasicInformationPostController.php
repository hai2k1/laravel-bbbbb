<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\BasicInformationPost;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BasicInformationPostController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BasicInformationPost(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('land_area');
            $grid->column('usable_area');
            $grid->column('horizontal');
            $grid->column('longs');
            $grid->column('price');
            $grid->column('number_of_bedrooms');
            $grid->column('number_of_restrooms');
            $grid->column('legal_documents');
            $grid->column('main_door_direction');
            $grid->column('balcony_direction');
            $grid->column('Interior_condition');
            $grid->column('highlights');
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
        return Show::make($id, new BasicInformationPost(), function (Show $show) {
            $show->field('id');
            $show->field('land_area');
            $show->field('usable_area');
            $show->field('horizontal');
            $show->field('longs');
            $show->field('price');
            $show->field('number_of_bedrooms');
            $show->field('number_of_restrooms');
            $show->field('legal_documents');
            $show->field('main_door_direction');
            $show->field('balcony_direction');
            $show->field('Interior_condition');
            $show->field('highlights');
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
        return Form::make(new BasicInformationPost(), function (Form $form) {
            $form->display('id');
            $form->text('land_area');
            $form->text('usable_area');
            $form->text('horizontal');
            $form->text('longs');
            $form->text('price');
            $form->text('number_of_bedrooms');
            $form->text('number_of_restrooms');
            $form->text('legal_documents');
            $form->text('main_door_direction');
            $form->text('balcony_direction');
            $form->text('Interior_condition');
            $form->text('highlights');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
