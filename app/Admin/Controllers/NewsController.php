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
        $grid->column('Nw_title', __('Title'));
        $grid->column('Nw_content', __('Content'));
        $grid->column('Nw_category', __('Category'));
        $grid->column('Nw_date', __('Date'));
        $grid->column('Nw_views', __('Views'));
        $grid->column('Nw_image', __('Image'));
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
        $show->field('Nw_title', __('Title'));
        $show->field('Nw_content', __('Content'));
        $show->field('Nw_category', __('Category'));
        $show->field('Nw_date', __('Date'));
        $show->field('Nw_views', __('Views'));
        $show->field('Nw_image', __('Image'));
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

        $form->text('Nw_title', __('Title'));
        $form->textarea('Nw_content', __('Content'));
        $form->select('CTID', __('CTID'))->options(
            \DB::table('category') 
                ->pluck('name','name') 
        );
        $form->date('Nw_date', __('Date'));
        $form->display('Nw_views', __('Views'));
        $form->image('Nw_image', __('Image'));

        return $form;
    }
}
