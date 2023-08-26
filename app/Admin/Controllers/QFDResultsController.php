<?php

namespace App\Admin\Controllers;

use App\Models\QFDResult;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QFDResultsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'QFDResult';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new QFDResult());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('total_importance1', __('Total importance1'));
        $grid->column('total_importance2', __('Total importance2'));
        $grid->column('total_importance3', __('Total importance3'));
        $grid->column('total_importance4', __('Total importance4'));
        $grid->column('performance1', __('Performance1'));
        $grid->column('performance2', __('Performance2'));
        $grid->column('performance3', __('Performance3'));
        $grid->column('performance4', __('Performance4'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(QFDResult::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('total_importance1', __('Total importance1'));
        $show->field('total_importance2', __('Total importance2'));
        $show->field('total_importance3', __('Total importance3'));
        $show->field('total_importance4', __('Total importance4'));
        $show->field('performance1', __('Performance1'));
        $show->field('performance2', __('Performance2'));
        $show->field('performance3', __('Performance3'));
        $show->field('performance4', __('Performance4'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new QFDResult());

        $form->number('user_id', __('User id'));
        $form->text('total_importance1', __('Total importance1'));
        $form->text('total_importance2', __('Total importance2'));
        $form->text('total_importance3', __('Total importance3'));
        $form->text('total_importance4', __('Total importance4'));
        $form->text('performance1', __('Performance1'));
        $form->text('performance2', __('Performance2'));
        $form->text('performance3', __('Performance3'));
        $form->text('performance4', __('Performance4'));

        return $form;
    }
}
