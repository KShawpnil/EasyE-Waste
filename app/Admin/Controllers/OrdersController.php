<?php

namespace App\Admin\Controllers;

use App\Models\Orders;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class OrdersController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Orders';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Orders());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('productname', __('Productname'));
        $grid->column('producttype', __('Producttype'));
        $grid->column('productamount', __('Productamount'));
        $grid->column('endproduct', __('Endproduct'));
        $grid->column('status', __('Status'));
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
        $show = new Show(Orders::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('productname', __('Productname'));
        $show->field('producttype', __('Producttype'));
        $show->field('productamount', __('Productamount'));
        $show->field('endproduct', __('Endproduct'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Orders());

        $form->number('user_id', __('User id'));
        $form->text('productname', __('Productname'));
        $form->text('producttype', __('Producttype'));
        $form->text('productamount', __('Productamount'));
        $form->text('endproduct', __('Endproduct'));
        $form->text('status', __('Status'))->default('pending');

        return $form;
    }
}
