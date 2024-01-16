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
        $grid->column('type', __('Type'));
        $grid->column('Ogn_name', __('Ogn name'));
        $grid->column('Ong_type', __('Ong type'));
        $grid->column('Ong_phone', __('Ong phone'));
        $grid->column('Ong_email', __('Ong email'));
        $grid->column('Ong_address', __('Ong address'));
        $grid->column('lat', __('latitude'));
        $grid->column('lng', __('longitude'));
        $grid->column('ServiceID', __('ServiceID'));
        $grid->column('ServiceCenterID', __('ServiceCenterID'));
        $grid->column('PromotionID', __('PromotionID'));

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

        $organization = Organization::findOrFail($id);
        $show = new Show($organization);

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
        $show->field('ServiceID', __('ServiceID'));
        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('PromotionID', __('PromotionID'));

        $latitudeField = $show->field('lat', __('latitude'));   //  
        $longitudeField = $show->field('lng', __('longitude'));  //
 
        $show->field('map', __('Map'))->unescape()->as(function () use ($organization) {
        $lat = $organization->lat;
        $lng = $organization->lng;

        if ($lat && $lng) {
            $api_key = 'AIzaSyCgvAxV1oTM6A53Uy8NIBp-euQNo-GzwOU'; // Replace with your API key

            $mapElement = "<div id='map' style='height: 500px; border-radius: 10px; margin-top: 20px;'></div>";

            $script = "
                <script>
                    function initMap() {
                        var lat = {$lat};
                        var lng = {$lng};
                        var myLatLng = {lat: parseFloat(lat), lng: parseFloat(lng)};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: myLatLng,
                            zoom: 15
                        });
                        var marker = new google.maps.Marker({
                            position: myLatLng,
                            map: map,
                            title: 'Service Center Location'
                        });
                    }
                    setTimeout(initMap, 1000);
                </script>
            ";

            $apiScript = "<script src='https://maps.googleapis.com/maps/api/js?key={$api_key}&callback=initMap' async defer></script>";

            return $mapElement . $script . $apiScript;
        } else {
            return 'No location data available.';
        }
    });
    
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
            'personal' => 'personal',
            'organization' => 'organization'
            // เพิ่มตัวเลือกตามที่คุณต้องการ
        ]);
        $form->text('Ogn_name', __('Ogn name'));

        // เปลี่ยนฟิลด์ Ong_type เป็นแบบเลือก (dropdown)
        $form->select('Ong_type', __('Ong type'))->options([
            'ตำรวจ' => 'ตำรวจ',
            'โรงพยาบาล' => 'โรงพยาบาล',
            'ธนาคาร' => 'ธนาคาร',
            // เพิ่มตัวเลือกตามที่คุณต้องการ
        ]);
        $form->text('Ong_phone', __('Ong phone'));
        $form->text('Ong_email', __('Ong email'));
        $form->text('Ong_address', __('Ong address'));
        $form->text('lat', __('latitude'));
        $form->text('lng', __('longitude'));
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
