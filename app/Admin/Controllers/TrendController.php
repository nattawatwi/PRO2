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
        $grid->column('Tn_title', __('Tn title'));
        $grid->column('Tn_content', __('Tn content'));
        $grid->column('Tn_category', __('Tn category'));
        $grid->column('Tn_date', __('Tn date'));
        $grid->column('Tn_views', __('Tn views'));
        $grid->column('Tn_Image', __('Tn Image'));
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
        $show->field('Tn_title', __('Tn title'));
        $show->field('Tn_content', __('Tn content'));
        $show->field('Tn_category', __('Tn category'));
        $show->field('Tn_date', __('Tn date'));
        $show->field('Tn_views', __('Tn views'));
        $show->field('Tn_Image', __('Tn Image'));
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

        $form->text('Tn_title', __('Tn title'));
        $form->text('Tn_content', __('Tn content'));
        $form->select('CTID', __('CTID'))->options(
            \DB::table('category') 
                ->pluck('name') 
        );
        $form->date('Tn_date', __('Tn date'));
        $form->text('Tn_views', __('Tn views'));
        $form->image('Tn_Image', __('Tn Image'));

        return $form;
    }
}
