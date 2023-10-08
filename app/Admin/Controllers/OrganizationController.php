<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Organization;

class OrganizationController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Organization';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Organization());

        $grid->column('OgnID', __('OgnID'));
        $grid->column('Ogn_password', __('password'));
        $grid->column('Ogn_name', __('name'));
        $grid->column('Ong_type', __('type'));
        $grid->column('Ong_phone', __('phone'));
        $grid->column('Ong_email', __('email'));
        $grid->column('Ong_address', __('address'));
        $grid->column('ServiceID', __('ServiceID'));
        $grid->column('ServiceCenterID', __('ServiceCenterID'));
        $grid->column('MapID', __('MapID'));
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
        $show = new Show(Organization::findOrFail($id));

        $show->field('OgnID', __('OgnID'));
        $show->field('Ogn_password', __('password'));
        $show->field('Ogn_name', __('name'));
        $show->field('Ong_type', __('type'));
        $show->field('Ong_phone', __('phone'));
        $show->field('Ong_email', __('email'));
        $show->field('Ong_address', __('address'));
        $show->field('ServiceID', __('ServiceID'));
        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('MapID', __('MapID'));
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
        $form = new Form(new Organization());

        $form->text('Ogn_password', __('password'));
        $form->text('Ogn_name', __('name'));
        $form->text('Ong_phone', __('phone'));
        $form->text('Ong_email', __('email'));
        $form->text('Ong_address', __('address'));
        $form->select('Ong_type', __('type'))->options(
            \DB::table('type') 
                ->pluck('name','name') 
        );
        $form->select('ServiceID', __('Service'))->options(
            \DB::table('service')->pluck('Sv_name', 'Sv_name')
        );
        
        $form->select('ServiceCenterID', __('Service Center'))->options(
            \DB::table('servicect') 
                ->pluck('Sc_name','Sc_name') 
        );
        $form->text('MapID', __('Map(URL)'));
        $form->select('PromotionID', __('Promotion'))->options(
            \DB::table('promotion') 
                ->pluck('Pm_name','Pm_name') 
        );

        return $form;
    }
}
