<?php

namespace App\Admin\Controllers;

use \App\Models\ServiceCT;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

use Laravel\Nova\Fields\Select;


class ServiceCTController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ServiceCT';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ServiceCT());

        $grid->column('ServiceCenterID', __('ServiceCenterID'));
        $grid->column('Sc_name', __('name'));
        $grid->column('Sc_address', __('address'));
        $grid->column('Sc_phone', __('phone'));
        $grid->column('Sc_email', __('email'));
        $grid->column('MapID', __('MapID'));
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
        $show = new Show(ServiceCT::findOrFail($id));

        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('Sc_name', __('name'));
        $show->field('Sc_address', __('address'));
        $show->field('Sc_phone', __('phone'));
        $show->field('Sc_email', __('email'));
        $show->field('MapID', __('MapID'));
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
        $form = new Form(new ServiceCT());

        $form->text('Sc_name', __('name'));
        $form->text('Sc_address', __('address'));
        $form->text('Sc_phone', __('phone'));
        $form->text('Sc_email', __('email'));
        $form->text('MapID', __('Map(URL)'));

        //$form->select('MapID', __('MapID'))->options(
        //    \DB::table('maps') // แทนที่ your_table_name ด้วยชื่อตารางของคุณ
        //        ->pluck('Mp_address','Mp_address') // แทนที่ map_id_column ด้วยคอลัมน์ที่คุณต้องการใช้เป็นค่า value และ text ใน dropdown
        //);

        return $form;
    }
}
