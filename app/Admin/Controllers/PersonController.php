<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Person;

class PersonController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Person';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Person());

        $grid->column('id', __('Id'));
        $grid->column('PersonID', __('PersonID'));
        $grid->column('Ps_name', __('Ps name'));
        $grid->column('Ps_sex', __('Ps sex'));
        $grid->column('Ps_birthday', __('Ps birthday'));
        $grid->column('Ps_IDnumber', __('Ps IDnumber'));
        $grid->column('Ps_phone', __('Ps phone'));
        $grid->column('Ps_email', __('Ps email'));
        $grid->column('Ps_address', __('Ps address'));
        $grid->column('MapURL', __('MapURL'));
        $grid->column('ServiceID', __('ServiceID'));
        $grid->column('ServiceCenterID', __('ServiceCenterID'));
        $grid->column('PromotionID', __('PromotionID'));
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
        $show = new Show(Person::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('PersonID', __('PersonID'));
        $show->field('Password', __('Password'));
        $show->field('Ps_name', __('Ps name'));
        $show->field('Ps_sex', __('Ps sex'));
        $show->field('Ps_birthday', __('Ps birthday'));
        $show->field('Ps_IDnumber', __('Ps IDnumber'));
        $show->field('Ps_phone', __('Ps phone'));
        $show->field('Ps_email', __('Ps email'));
        $show->field('Ps_address', __('Ps address'));
        $show->field('MapURL', __('MapURL'));
        $show->field('ServiceID', __('ServiceID'));
        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('PromotionID', __('PromotionID'));
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
        $form = new Form(new Person());

        $form->text('PersonID', __('PersonID'));
        $form->password('Password', __('Password'));
        $form->text('Ps_name', __('Ps name'));
        $form->text('Ps_sex', __('Ps sex'));
        $form->text('Ps_birthday', __('Ps birthday'));
        $form->text('Ps_IDnumber', __('Ps IDnumber'));
        $form->text('Ps_phone', __('Ps phone'));
        $form->text('Ps_email', __('Ps email'));
        $form->text('Ps_address', __('Ps address'));
        $form->text('MapURL', __('MapURL'));
        $form->text('ServiceID', __('ServiceID'));
        $form->text('ServiceCenterID', __('ServiceCenterID'));
        $form->text('PromotionID', __('PromotionID'));

        return $form;
    }
}
