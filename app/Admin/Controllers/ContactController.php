<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Contact;

class ContactController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Contact';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Contact());

        $grid->column('ContactID', __('ContactID'));
        $grid->column('Ct_username', __('Username'));
        $grid->column('Ct_email', __('Email'));
        $grid->column('Ct_title', __('Title'));
        $grid->column('Ct_detail', __('Detail'));
        $grid->column('Ct_date', __('Date'));
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
        $show = new Show(Contact::findOrFail($id));

        $show->field('ContactID', __('ContactID'));
        $show->field('Ct_username', __('Username'));
        $show->field('Ct_email', __('Email'));
        $show->field('Ct_title', __('Title'));
        $show->field('Ct_detail', __('Detail'));
        $show->field('Ct_date', __('Date'));
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
        $form = new Form(new Contact());

        $form->text('Ct_username', __('Username'));
        $form->text('Ct_email', __('Email'));
        $form->text('Ct_title', __('Title'));
        $form->text('Ct_detail', __('Detail'));
        $form->text('Ct_date', __('Date'));

        return $form;
    }
}
