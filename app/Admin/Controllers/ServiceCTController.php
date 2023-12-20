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
        $show = new Show(ServiceCT::findOrFail($id));

        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('Sc_name', __('name'));
        $show->field('Sc_address', __('address'));
        $show->field('Sc_phone', __('phone'));
        $show->field('Sc_email', __('email'));
        $show->field('lat', __('latitude'));
        $show->field('lng', __('longitude'));

        // ส่วนที่แสดงแผนที่
        $show->field('map')->as(function ($show) {
            if ($show) {
                // สร้าง HTML element สำหรับแสดงแผนที่
                $mapElement = "<div id='map' style='width: 100%; height: 400px;'></div>";

                // JavaScript เพื่อสร้างแผนที่
                // JavaScript เพื่อสร้างแผนที่
                $script = "
                    <script>
                        function initMap() {
                            var lat = ' . $show->lat . ';
                            var lng = ' . $show->lng . ';
                            var myLatLng = {lat: lat, lng: lng};
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


                // ใส่สคริปต์การโหลด API ของ Google Maps และ jQuery หน้านี้
                $apiScript = "<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyCgvAxV1oTM6A53Uy8NIBp-euQNo-GzwOU&callback=initMap' async defer></script>";
                    
                // HTML element และ JavaScript
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
