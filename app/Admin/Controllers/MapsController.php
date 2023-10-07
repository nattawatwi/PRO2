<?php

namespace App\Admin\Controllers;

use \App\Models\Maps;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class MapsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Maps';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Maps());

        $grid->column('MapsID', __('MapsID'));
        $grid->column('Mp_address', __('address'));
        $grid->column('Mp_latitude', __('latitude'));
        $grid->column('Mp_longitude', __('longitude'));
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
        $show = new Show(Maps::findOrFail($id));

        $show->field('MapsID', __('MapsID'));
        $show->field('Mp_address', __('address'));
        $show->field('Mp_latitude', __('latitude'));
        $show->field('Mp_longitude', __('longitude'));
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
        $form = new Form(new Maps());

        $form->text('Mp_address', __('address'));
        $form->text('Mp_latitude', __('latitude'));
        $form->text('Mp_longitude', __('longitude'));

        return $form;
    }
}
