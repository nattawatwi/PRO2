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
        $grid->column('lat', __('latitude'));
        $grid->column('lng', __('longitude'));

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
        $serviceCT = ServiceCT::findOrFail($id);
        $show = new Show($serviceCT);

        $show = new Show(ServiceCT::findOrFail($id));

        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('Sc_name', __('name'));
        $show->field('Sc_address', __('address'));
        $show->field('Sc_phone', __('phone'));
        $show->field('Sc_email', __('email'));
        $show->field('lat', __('latitude'));
        $show->field('lng', __('longitude'));

        // ส่วนที่แสดงแผนที่
        $latitudeField = $show->field('lat', __('latitude'));   
        $longitudeField = $show->field('lng', __('longitude'));  

        $show->field('map', __('Map'))->unescape()->as(function () use ($serviceCT) {
        $lat = $serviceCT->lat;
        $lng = $serviceCT->lng;

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
        $form = new Form(new ServiceCT());

        $form->text('Sc_name', __('name'));
        $form->text('Sc_address', __('address'));
        $form->text('Sc_phone', __('phone'));
        $form->text('Sc_email', __('email'));
        $form->text('lat', __('latitude'));
        $form->text('lng', __('longitude'));

        //$form->select('MapID', __('MapID'))->options(
        //    \DB::table('maps') // แทนที่ your_table_name ด้วยชื่อตารางของคุณ
        //        ->pluck('Mp_address','Mp_address') // แทนที่ map_id_column ด้วยคอลัมน์ที่คุณต้องการใช้เป็นค่า value และ text ใน dropdown
        //);

        return $form;
    }
}
