<?php

namespace App\Admin\Controllers;

use \App\Models\News;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('NewsID', __('NewsID'));
        $grid->column('Nw_title', __('Nw title'));
        $grid->column('Nw_content', __('Nw content'));
        $grid->column('Nw_category', __('Nw category'));
        $grid->column('Nw_date', __('Nw date'));
        $grid->column('Nw_views', __('Nw views'));
        $grid->column('Nw_image', __('Nw image'));
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
        $show = new Show(News::findOrFail($id));

        $show->field('NewsID', __('NewsID'));
        $show->field('Nw_title', __('Nw title'));
        $show->field('Nw_content', __('Nw content'));
        $show->field('Nw_category', __('Nw category'));
        $show->field('Nw_date', __('Nw date'));
        $show->field('Nw_views', __('Nw views'));
        $show->field('Nw_image', __('Nw image'));
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
        $form = new Form(new News());

        $form->text('Nw_title', __('Nw title'));
        $form->text('Nw_content', __('Nw content'));
        $form->select('CTID', __('CTID'))->options(
            \DB::table('category') 
                ->pluck('name') 
        );
        $form->date('Nw_date', __('Nw date'));
        $form->text('Nw_views', __('Nw views'));
        $form->image('Nw_image', __('Nw image'));

        return $form;
    }
}
