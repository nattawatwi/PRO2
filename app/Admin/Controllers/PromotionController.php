<?php

namespace App\Admin\Controllers;

use \App\Models\Promotion;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;

class PromotionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Promotion';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Promotion());

        $grid->column('PromotionID', __('PromotionID'));
        $grid->column('Pm_name', __('Name'));
        $grid->column('Pn_detail', __('Detail'));
        $grid->column('Pn_date', __('Date'));
        $grid->column('Pn_price', __('Price'));
        $grid->column('Pn_terms', __('Terms'));
        $grid->column('Pn_Image', __('Image'));
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
        $show = new Show(Promotion::findOrFail($id));

        $show->field('PromotionID', __('PromotionID'));
        $show->field('Pm_name', __('Name'));
        $show->field('Pn_detail', __('Detail'));
        $show->field('Pn_date', __('Date'));
        $show->field('Pn_price', __('Price'));
        $show->field('Pn_terms', __('Terms'));
        $show->field('Pn_Image', __('Image'));
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
        $form = new Form(new Promotion());

        $form->text('Pm_name', __('Name'));
        $form->text('Pn_detail', __('Detail'));
        $form->date('Pn_date', __('Date'));
        $form->text('Pn_price', __('Price'));
        $form->text('Pn_terms', __('Terms'));
        $form->image('Pn_Image', __('Image'));

        return $form;
    }
}

class PromotionController extends Controller
{
    public function index()
    {
        // ดึงข้อมูลโปรโมชั่นจากฐานข้อมูล
        $promotions = Promotion::all(); // คุณสามารถปรับแต่งคิวรีนี้ตามที่คุณต้องการ

        // ส่งข้อมูลไปยังวิว
        return view('frontend.your-blade-view', compact('promotions'));
    }
}