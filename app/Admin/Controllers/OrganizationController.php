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

        $grid->column('id', __('Id'));
        $grid->column('OgnID', __('OgnID'));
        $grid->column('Password', __('Password'));
        $grid->column('type', __('Type'));
        $grid->column('Ogn_name', __('Ogn name'));
        $grid->column('Ong_type', __('Ong type'));
        $grid->column('Ong_phone', __('Ong phone'));
        $grid->column('Ong_email', __('Ong email'));
        $grid->column('Ong_address', __('Ong address'));
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
        $show = new Show(Organization::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('OgnID', __('OgnID'));
        $show->field('Password', __('Password'));
        $show->field('type', __('Type'));
        $show->field('Ogn_name', __('Ogn name'));
        $show->field('Ong_type', __('Ong type'));
        $show->field('Ong_phone', __('Ong phone'));
        $show->field('Ong_email', __('Ong email'));
        $show->field('Ong_address', __('Ong address'));
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
        $form = new Form(new Organization());

        $form->text('OgnID', __('OgnID'));
        $form->password('Password', __('Password'));
        $form->select('type', __('Type'))->options([
            'option1' => 'Option 1',
            'option2' => 'Option 2'
            // เพิ่มตัวเลือกตามที่คุณต้องการ
        ]);
        $form->text('Ogn_name', __('Ogn name'));

        // เปลี่ยนฟิลด์ Ong_type เป็นแบบเลือก (dropdown)
        $form->select('Ong_type', __('Ong type'))->options([
            'option1' => 'Option 1',
            'option2' => 'Option 2',
            'option3' => 'Option 3',
            // เพิ่มตัวเลือกตามที่คุณต้องการ
        ]);
        $form->text('Ong_phone', __('Ong phone'));
        $form->text('Ong_email', __('Ong email'));
        $form->text('Ong_address', __('Ong address'));
        $form->text('MapURL', __('MapURL'));
        $form->select('ServiceID', __('Service'))->options(
            \DB::table('service')->pluck('Sv_name', 'Sv_name')
        );
        $form->select('ServiceCenterID', __('Service Center'))->options(
            \DB::table('servicect')->pluck('Sc_name', 'Sc_name')
        );
        $form->select('PromotionID', __('Promotion'))->options(
            \DB::table('promotion')->pluck('Pm_name', 'Pm_name')
        );

        return $form;

    }

}
