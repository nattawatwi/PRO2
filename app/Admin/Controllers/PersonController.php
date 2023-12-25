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
        $grid->column('type', __('Type'));
        $grid->column('Ps_name', __('Ps name'));
        $grid->column('Ps_IDnumber', __('Ps IDnumber'));
        $grid->column('Ps_phone', __('Ps phone'));
        $grid->column('Ps_email', __('Ps email'));
        $grid->column('Ps_address', __('Ps address'));
        $grid->column('lat', __('latitude'));
        $grid->column('lng', __('longitude'));
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
        $person = Person::findOrFail($id);
        $show = new show($person);

        $show = new Show(Person::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('PersonID', __('PersonID'));
        $show->field('password', __('Password'));
        $show->field('type', __('type'));
        $show->field('Ps_name', __('Ps name'));
        $show->field('Ps_IDnumber', __('Ps IDnumber'));
        $show->field('Ps_phone', __('Ps phone'));
        $show->field('Ps_email', __('Ps email'));
        $show->field('Ps_address', __('Ps address'));
        $show->field('lat', __('latitude'));
        $show->field('lng', __('longitude'));
        $show->field('ServiceCenterID', __('ServiceCenterID'));
        $show->field('PromotionID', __('PromotionID'));

        $latitudeField = $show->field('lat', __('latitude'));   
        $longitudeField = $show->field('lng', __('longitude'));  

        $show->field('map', __('Map'))->unescape()->as(function () use ($person) {
        $lat = $person->lat;
        $lng = $person->lng;

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
        $form = new Form(new Person());

        $form->text('PersonID', __('PersonID'));
        $form->password('password', __('Password'));
        $form->select('type', __('Type'))->options([
            'personal' => 'personal',
            'organization' => 'organization'
            // เพิ่มตัวเลือกตามที่คุณต้องการ
        ]);
        $form->text('Ps_name', __('Ps name'));
        $form->text('Ps_IDnumber', __('Ps IDnumber'));
        $form->text('Ps_phone', __('Ps phone'));
        $form->text('Ps_email', __('Ps email'));
        $form->text('Ps_address', __('Ps address'));
        $form->text('lat', __('latitude'));
        $form->text('lng', __('longitude'));
        $form->select('ServiceCenterID', __('Service Center'))->options(
            \DB::table('servicect')->pluck('Sc_name', 'Sc_name')
        );
        $form->select('PromotionID', __('Promotion'))->options(
            \DB::table('promotion')->pluck('Pm_name', 'Pm_name')
        );

        return $form;
    }
}
