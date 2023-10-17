<?php

namespace App\Admin\Controllers;

use App\Models\Promotion;
use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use OpenAdmin\Admin\Layout\Content;

class PromotionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Promotion';

    public function index(Content $content)
    {
        $promotions = Promotion::all();
    
        return $content
            ->header('Promotions')
            ->description('List of promotions')
            ->body($this->grid($promotions)); // ส่งข้อมูลโปรโมชั่นไปยังเมธอด grid()
    }
    
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
        $grid->column('Pm_detail', __('Detail'));
        $grid->column('Pm_St_date', __('Start Date'));
        $grid->column('Pm_EP_date', __('End Date'));
        $grid->column('Pm_price', __('Price'));
        $grid->column('Pm_terms', __('Terms'));
        $grid->column('Pm_Image', __('Image'));
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
        $show->field('Pm_detail', __('Detail'));
        $show->field('Pm_St_date', __('Start Date'));
        $show->field('Pm_EP_date', __('End Date'));
        $show->field('Pm_price', __('Price'));
        $show->field('Pm_terms', __('Terms'));
        $show->field('Pm_Image', __('Image'));
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
        $form->textarea('Pm_detail', __('Detail'));
        $form->date('Pm_St_date', __('Start Date')); 
        $form->date('Pm_EP_date', __('End Date'));
        $form->text('Pm_price', __('Price'));
        $form->textarea('Pm_terms', __('Terms'));
        $form->image('Pm_Image', __('Image'));

        return $form;
    }

}
