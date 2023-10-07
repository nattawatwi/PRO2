<?php

namespace App\Admin\Controllers;

use \App\Models\Service;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class ServiceController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Service';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Service());

        $grid->column('ServiceID', __('ServiceID'));
        $grid->column('Sv_name', __('Sv name'));
        $grid->column('Sv_detail', __('Sv detail'));
        $grid->column('Sv_date', __('Sv date'));
        $grid->column('Sv_Image', __('Sv Image'));
        $grid->column('Sv_price', __('Sv price'));
        $grid->column('Sv_terms', __('Sv terms'));

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
        $show = new Show(Service::findOrFail($id));

        $show->field('ServiceID', __('ServiceID'));
        $show->field('Sv_name', __('Sv name'));
        $show->field('Sv_detail', __('Sv detail'));
        $show->field('Sv_date', __('Sv date'));
        $show->field('Sv_Image', __('Sv Image'));
        $show->field('Sv_price', __('Sv price'));
        $show->field('Sv_terms', __('Sv terms'));
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
        $form = new Form(new Service());

        $form->text('Sv_name', __('name'));
        $form->text('Sv_detail', __('detail'));
        $form->date('Sv_date', __('date'));
        $form->image('Sv_Image', __('Image'));
        $form->text('Sv_price', __('price'));
        $form->text('Sv_terms', __('terms'));

        return $form;
    }
}
