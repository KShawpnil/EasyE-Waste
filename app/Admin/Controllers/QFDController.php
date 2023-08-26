<?php

namespace App\Admin\Controllers;

use App\Models\QFD;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class QFDController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'QFD';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new QFD());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('cr1', __('Cr1'));
        $grid->column('crrank1', __('Crrank1'));
        $grid->column('wastemanage1', __('Wastemanage1'));
        $grid->column('wastemini1', __('Wastemini1'));
        $grid->column('wastecollect1', __('Wastecollect1'));
        $grid->column('produra1', __('Produra1'));
        $grid->column('cr2', __('Cr2'));
        $grid->column('crrank2', __('Crrank2'));
        $grid->column('wastemanage2', __('Wastemanage2'));
        $grid->column('wastemini2', __('Wastemini2'));
        $grid->column('wastecollect2', __('Wastecollect2'));
        $grid->column('produra2', __('Produra2'));
        $grid->column('cr3', __('Cr3'));
        $grid->column('crrank3', __('Crrank3'));
        $grid->column('wastemanage3', __('Wastemanage3'));
        $grid->column('wastemini3', __('Wastemini3'));
        $grid->column('wastecollect3', __('Wastecollect3'));
        $grid->column('produra3', __('Produra3'));
        $grid->column('cr4', __('Cr4'));
        $grid->column('crrank4', __('Crrank4'));
        $grid->column('wastemanage4', __('Wastemanage4'));
        $grid->column('wastemini4', __('Wastemini4'));
        $grid->column('wastecollect4', __('Wastecollect4'));
        $grid->column('produra4', __('Produra4'));
        $grid->column('cr5', __('Cr5'));
        $grid->column('crrank5', __('Crrank5'));
        $grid->column('wastemanage5', __('Wastemanage5'));
        $grid->column('wastemini5', __('Wastemini5'));
        $grid->column('wastecollect5', __('Wastecollect5'));
        $grid->column('produra5', __('Produra5'));
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
        $show = new Show(QFD::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('cr1', __('Cr1'));
        $show->field('crrank1', __('Crrank1'));
        $show->field('wastemanage1', __('Wastemanage1'));
        $show->field('wastemini1', __('Wastemini1'));
        $show->field('wastecollect1', __('Wastecollect1'));
        $show->field('produra1', __('Produra1'));
        $show->field('cr2', __('Cr2'));
        $show->field('crrank2', __('Crrank2'));
        $show->field('wastemanage2', __('Wastemanage2'));
        $show->field('wastemini2', __('Wastemini2'));
        $show->field('wastecollect2', __('Wastecollect2'));
        $show->field('produra2', __('Produra2'));
        $show->field('cr3', __('Cr3'));
        $show->field('crrank3', __('Crrank3'));
        $show->field('wastemanage3', __('Wastemanage3'));
        $show->field('wastemini3', __('Wastemini3'));
        $show->field('wastecollect3', __('Wastecollect3'));
        $show->field('produra3', __('Produra3'));
        $show->field('cr4', __('Cr4'));
        $show->field('crrank4', __('Crrank4'));
        $show->field('wastemanage4', __('Wastemanage4'));
        $show->field('wastemini4', __('Wastemini4'));
        $show->field('wastecollect4', __('Wastecollect4'));
        $show->field('produra4', __('Produra4'));
        $show->field('cr5', __('Cr5'));
        $show->field('crrank5', __('Crrank5'));
        $show->field('wastemanage5', __('Wastemanage5'));
        $show->field('wastemini5', __('Wastemini5'));
        $show->field('wastecollect5', __('Wastecollect5'));
        $show->field('produra5', __('Produra5'));
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
        $form = new Form(new QFD());

        $form->number('user_id', __('User id'));
        $form->text('cr1', __('Cr1'));
        $form->number('crrank1', __('Crrank1'));
        $form->number('wastemanage1', __('Wastemanage1'));
        $form->number('wastemini1', __('Wastemini1'));
        $form->number('wastecollect1', __('Wastecollect1'));
        $form->number('produra1', __('Produra1'));
        $form->text('cr2', __('Cr2'));
        $form->number('crrank2', __('Crrank2'));
        $form->number('wastemanage2', __('Wastemanage2'));
        $form->number('wastemini2', __('Wastemini2'));
        $form->number('wastecollect2', __('Wastecollect2'));
        $form->number('produra2', __('Produra2'));
        $form->text('cr3', __('Cr3'));
        $form->number('crrank3', __('Crrank3'));
        $form->number('wastemanage3', __('Wastemanage3'));
        $form->number('wastemini3', __('Wastemini3'));
        $form->number('wastecollect3', __('Wastecollect3'));
        $form->number('produra3', __('Produra3'));
        $form->text('cr4', __('Cr4'));
        $form->number('crrank4', __('Crrank4'));
        $form->number('wastemanage4', __('Wastemanage4'));
        $form->number('wastemini4', __('Wastemini4'));
        $form->number('wastecollect4', __('Wastecollect4'));
        $form->number('produra4', __('Produra4'));
        $form->text('cr5', __('Cr5'));
        $form->number('crrank5', __('Crrank5'));
        $form->number('wastemanage5', __('Wastemanage5'));
        $form->number('wastemini5', __('Wastemini5'));
        $form->number('wastecollect5', __('Wastecollect5'));
        $form->number('produra5', __('Produra5'));

        return $form;
    }
}
