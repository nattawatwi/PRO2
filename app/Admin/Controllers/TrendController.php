<?php

namespace App\Admin\Controllers;

use \App\Models\Trend;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class TrendController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Trend';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Trend());

        $grid->column('TrendID', __('TrendID'));
        $grid->column('Tn_title', __('title'));
        $grid->column('Tn_content', __('content'));
        $grid->column('Tn_category', __('category'));
        $grid->column('Tn_date', __('date'));
        $grid->column('Tn_views', __('views'));
        $grid->column('Tn_Image', __('Image'));
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
        $show = new Show(Trend::findOrFail($id));

        $show->field('TrendID', __('TrendID'));
        $show->field('Tn_title', __('title'));
        $show->field('Tn_content', __('content'));
        $show->field('Tn_category', __('category'));
        $show->field('Tn_date', __('date'));
        $show->field('Tn_views', __('views'));
        $show->field('Tn_Image', __('Image'));
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
        $form = new Form(new Trend());

        $form->text('Tn_title', __('title'));
        $form->text('Tn_content', __('content'));
        $form->select('CTID', __('Category'))->options(
            \DB::table('category')->pluck('name', 'name')
        );
        $form->date('Tn_date', __('date'));
        $form->display('Tn_views', __('views')); // เปลี่ยนเป็น display แทน text
        $form->image('Tn_Image', __('Image'));

        return $form;
    }

       

}
