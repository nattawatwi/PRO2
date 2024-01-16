<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use OpenAdmin\Admin\Admin;
use OpenAdmin\Admin\Controllers\Dashboard;
use OpenAdmin\Admin\Layout\Column;
use OpenAdmin\Admin\Layout\Content;
use OpenAdmin\Admin\Layout\Row;

use App\Models\Person;
use App\Models\Organization;
use App\Models\Promotion;
use App\Models\Service;
use App\Models\ServiceCT;


class HomeController extends Controller
{

// https://stackoverflow.com/questions/10053358/measuring-the-distance-between-two-coordinates-in-php
/**
 * Calculates the great-circle distance between two points, with
 * the Haversine formula.
 * @param float $latitudeFrom Latitude of start point in [deg decimal]
 * @param float $longitudeFrom Longitude of start point in [deg decimal]
 * @param float $latitudeTo Latitude of target point in [deg decimal]
 * @param float $longitudeTo Longitude of target point in [deg decimal]
 * @param float $earthRadius Mean earth radius in [m]
 * @return float Distance between points in [m] (same as earthRadius)
 */
function haversineGreatCircleDistance(
  $latitudeFrom, $longitudeFrom, $latitudeTo, $longitudeTo, $earthRadius = 6371000)
{
  // convert from degrees to radians
  $latFrom = deg2rad($latitudeFrom);
  $lonFrom = deg2rad($longitudeFrom);
  $latTo = deg2rad($latitudeTo);
  $lonTo = deg2rad($longitudeTo);

  $latDelta = $latTo - $latFrom;
  $lonDelta = $lonTo - $lonFrom;

  $angle = 2 * asin(sqrt(pow(sin($latDelta / 2), 2) +
    cos($latFrom) * cos($latTo) * pow(sin($lonDelta / 2), 2)));
  return $angle * $earthRadius;
}

    public function index(Content $content)
    {   
        Admin::css(asset('open-admin/css/pages/dashboard.css'));
        Admin::js(asset('open-admin/js/pages/dashboard.js'));

        //*TJ
        return $content
            ->title('Dashboard')
            ->description('Welcome to your custom dashboard!')
            ->row(function (Row $row) {
                $row->column(4, function (Column $column) {
                    $personCount = Person::count(); // ตั้งค่าให้ User เป็นชื่อโมเดลของคุณ
                    $column->append("
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                                <div class='col mt-0'>
                                    <h5 class='card-title'>ลูกค้าส่วนบุคคล</h5>
                                </div>
                                <div class='col-auto'>
                                    <div class='stat text-primary'>
                                        <!-- เปลี่ยนไอคอนเป็นข้อความหรือไอคอน Unicode -->
                                        <span class='align-middle'>&#x1F464;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                    </div>
                                </div>
                            </div>
                            <h1 class='mt-1 mb-3'>$personCount</h1>
                        </div>
                    </div>
                   
                ");
                }); 

                $row->column(4, function (Column $column) {
                    $organizationCount = Organization::count(); // ตั้งค่าให้ User เป็นชื่อโมเดลของคุณ
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col mt-0'>
                                        <h5 class='card-title'>ลูกค้าส่วนองค์กร</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                        <span class='align-middle'>&#x1F464;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$organizationCount</h1>
                            </div>
                        </div>
                    ");
                }); 

                $row->column(4, function (Column $column) {
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col mt-0'>
                                        <h5 class='card-title'>ผู้ดูแลระบบ</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <span class='align-middle'>&#x1F464;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>1</h1>
                            </div>
                        </div>
                    ");
                });

                $row->column(4, function (Column $column) {
                    $promotionCount = Promotion::count(); // ตั้งค่าให้ User เป็นชื่อโมเดลของคุณ
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col mt-0'>
                                        <h5 class='card-title'>โปรโมชัน</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <span class='align-middle'>&#x1F4F0;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$promotionCount</h1>
                            </div>
                        </div>
                    ");
                });

                $row->column(4, function (Column $column) {
                    $serviceCount = Service::count(); // ตั้งค่าให้ User เป็นชื่อโมเดลของคุณ
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col mt-0'>
                                        <h5 class='card-title'>บริการ</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <span class='align-middle'>&#x1F4F0;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$serviceCount</h1>
                            </div>
                        </div>
                    ");
                });

                $row->column(4, function (Column $column) {
                    $serviceCTCount = ServiceCT::count(); // ตั้งค่าให้ User เป็นชื่อโมเดลของคุณ
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col mt-0'>
                                        <h5 class='card-title'>ศูนย์ให้บริการ</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <span class='align-middle'>&#x1F4CC;</span> <!-- ตัวอักษรหรือไอคอน Unicode ของคน -->
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$serviceCTCount</h1>
                            </div>
                        </div>
                    ");
                });

                
                //*TJ
                $row->column(12, function (Column $column) {
                    $column->append("<h4 class='pt-4'>Service Center</h4>");
                });

                $ServiceCT = ServiceCT::all();
                foreach($ServiceCT as $CT) {
                    $row->column(4, function (Column $column) use (&$CT) {      //use variable outside
                        $orgCount = Organization::where("ServiceCenterID", "=", $CT->Sc_name)->get()->count();     //ดึงลูกค้า ของสาขา
                        $personCount = Person::where("ServiceCenterID", "=", $CT->Sc_name)->get()->count();     //ดึงลูกค้า ของสาขา
                        $sum = $orgCount + $personCount;
                        $column->append("
                            <a style='text-decoration:none;' class='text-body' href='/admin/showCT/{$CT->ServiceCenterID}'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <div class='row'>
                                            <div class='col mt-0'>
                                                <h5 class='card-title'>{$CT->Sc_name}</h5>
                                            </div>
                                        </div>
                                        <h1 class='mt-1 mb-3'>$sum</h1>
                                    </div>
                                </div>
                            </a>
                        ");
                    });
                }



            });
        
    }


    //*TJ
    public function showCT(Content $content) {
        $id = request()->id;
        $CT = ServiceCT::where("ServiceCenterID", "=", $id)->first();
        $orgCount = Organization::where("ServiceCenterID", "=", $CT->Sc_name)->get()->count();     //ดึงลูกค้า ของสาขา
        $personCount = Person::where("ServiceCenterID", "=", $CT->Sc_name)->get()->count();     //ดึงลูกค้า ของสาขา
        $sum = $orgCount + $personCount;
        return $content
            ->title($CT->Sc_name)
            ->row(function (Row $row) use (&$CT, &$orgCount, &$personCount, &$sum) {
                $row->column(8, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum) {});
                $row->column(4, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum) {
                    $column->append("
                        <div class='card'>
                            <div class='card-body'>
                                <h3 class='mt-3 mb-3 text-center'>จำนวนลูกค้า $sum</h3>
                                <div class='text-center text-danger'>ลูกค้าส่วนองค์กร $orgCount ราย &nbsp;&nbsp;&nbsp; ลูกค้าส่วนบุคคล $personCount ราย</div>
                            </div>
                        </div>
                    ");
                });


                //Show - Hide Map
                $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum) {
                    $column->append("
                        <script>
                            function toggleMap(objName) {
                                var obj = document.getElementById(objName);
                                if(obj.style.display == 'none') {
                                    obj.style.display = '';
                                } else {
                                    obj.style.display = 'none'
                                }
                            }
                        </script>
                    ");
                });


                //ส่วนลูกค้าส่วนองค์กร
                $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum) {
                    $column->append("
                        <div class='card m-0' style='background-color:#adb5bd'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col h5 card-title'>ลูกค้าส่วนองค์กร</div>
                                    <div class='col h5 card-title'>ประเภทองค์กร</div>
                                    <div class='col h5 card-title'>ชื่อองค์กร</div>
                                    <div class='col h5 card-title'>เบอร์โทร</div>
                                    <div class='col h5 text-end'>ระยะห่างจากศูนย์ให้บริการ </div>
                                </div>
                            </div>
                        </div>
                    ");
                });

                $idx = 0;
                $cnt = 0;
                $ORG = Organization::where("ServiceCenterID", "=", $CT->Sc_name)->get();
                $script = "<script> function initMap() {";
                foreach($ORG as $org) {
                    $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum, &$org, &$idx, &$script, &$cnt) {
                        $idx++;
                        $cnt++;
                        if(is_numeric($CT->lat) && is_numeric($CT->lng) && is_numeric($org->lat) && is_numeric($org->lng)) {
                            $diff = number_format($this->haversineGreatCircleDistance($CT->lat, $CT->lng, $org->lat, $org->lng) / 1000, 2);
                        } else {
                            $diff = 0;
                        }
                        $column->append("
                            <div class='card m-0'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col h6'>$cnt</div>
                                        <div class='col h6'>{$org->Ong_type}</div>
                                        <div class='col h6'>{$org->Ogn_name}</div>
                                        <div class='col h6'>{$org->Ong_phone}</div>
                                        <div class='col h6 text-end' onclick='toggleMap(\"map_$idx\")'> $diff กิโลเมตร &nbsp;&nbsp;&nbsp; <svg xmlns='http://www.w3.org/2000/svg' height='16' width='14' viewBox='0 0 448 512'><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d='M207 381.5L12.7 187.1c-9.4-9.4-9.4-24.6 0-33.9l22.7-22.7c9.4-9.4 24.5-9.4 33.9 0L224 284.5l154.7-154c9.4-9.3 24.5-9.3 33.9 0l22.7 22.7c9.4 9.4 9.4 24.6 0 33.9L241 381.5c-9.4 9.4-24.6 9.4-33.9 0z'/></svg></div>
                                    </div>
                                </div>
                            </div>
                        ");

                        if(is_numeric($CT->lat) && is_numeric($CT->lng) && is_numeric($org->lat) && is_numeric($org->lng)) {
                            $mapElement = "<div id='map_$idx' style='display:none; height:500px; border-radius:10px; margin-top:0px; margin-bottom:20px;'></div>";
                            $script .= "
                                var lat_$idx = {$CT->lat};
                                var lng_$idx = {$CT->lng};
                                var lat2_$idx = {$org->lat};
                                var lng2_$idx = {$org->lng};
                                var myLatLng_$idx = {lat: parseFloat(lat_$idx), lng: parseFloat(lng_$idx)};
                                var myLatLng2_$idx = {lat: parseFloat(lat2_$idx), lng: parseFloat(lng2_$idx)};
                                var map_$idx = new google.maps.Map(document.getElementById('map_$idx'), {
                                    center: myLatLng_$idx,
                                    zoom: 10
                                });
                                var marker_$idx = new google.maps.Marker({
                                    position: myLatLng_$idx,
                                    map: map_$idx,
                                    title: 'Service Center Location'
                                });
                                marker_$idx.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
                                var marker2_$idx = new google.maps.Marker({
                                    position: myLatLng2_$idx,
                                    map: map_$idx,
                                    title: 'ORG'
                                });
                                marker2_$idx.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
                            ";
                            $column->append( $mapElement );
                        } else {
                            $mapElement = "<div class='text-center h5 pt-3 text-danger' id='map_$idx' style='display:none; height:50px; border-radius:10px; margin-top:0px; margin-bottom:20px;'>ไม่มีตำแหน่งระบุ</div>";
                            $column->append( $mapElement );
                        }

                    });
                }


                //ส่วนลูกค้าบุคคล
                $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum) {
                    $column->append("<div mt-5>&nbsp;</div>");
                    $column->append("
                        <div class='card m-0 mt-5' style='background-color:#adb5bd'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col h4 card-title'>ลูกค้าส่วนบุคคล</div>
                                    <div class='col h4 card-title'>ชื่อ-นามสกุล</div>
                                    <div class='col h4 card-title'>เบอร์โทร</div>
                                    <div class='col h4 text-end'>ระยะห่างจากศูนย์ให้บริการ $personCount</div>
                                </div>
                            </div>
                        </div>
                    ");
                });

                $ORG = Person::where("ServiceCenterID", "=", $CT->Sc_name)->get();
                $cnt = 0;
                foreach($ORG as $org) {
                    $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum, &$org, &$idx, &$script, &$cnt) {
                        $idx++;
                        $cnt++;
                        if(is_numeric($CT->lat) && is_numeric($CT->lng) && is_numeric($org->lat) && is_numeric($org->lng)) {
                            $diff = number_format($this->haversineGreatCircleDistance($CT->lat, $CT->lng, $org->lat, $org->lng) / 1000, 2);
                        } else {
                            $diff = 0;
                        }
                        $column->append("
                            <div class='card m-0'>
                                <div class='card-body'>
                                    <div class='row'>
                                        <div class='col h5'>$cnt</div>
                                        <div class='col h5'>{$org->Ps_name}</div>
                                        <div class='col h5'>{$org->Ps_phone}</div>
                                        <div class='col h5 text-end' onclick='toggleMap(\"map_$idx\")'>ระยะห่าง $diff กิโลเมตร &nbsp;&nbsp;&nbsp; <svg xmlns='http://www.w3.org/2000/svg' height='16' width='14' viewBox='0 0 448 512'><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d='M207 381.5L12.7 187.1c-9.4-9.4-9.4-24.6 0-33.9l22.7-22.7c9.4-9.4 24.5-9.4 33.9 0L224 284.5l154.7-154c9.4-9.3 24.5-9.3 33.9 0l22.7 22.7c9.4 9.4 9.4 24.6 0 33.9L241 381.5c-9.4 9.4-24.6 9.4-33.9 0z'/></svg></div>
                                    </div>
                                </div>
                            </div>
                        ");

                        if(is_numeric($CT->lat) && is_numeric($CT->lng) && is_numeric($org->lat) && is_numeric($org->lng)) {
                            $mapElement = "<div id='map_$idx' style='display:none; height:500px; border-radius:10px; margin-top:0px; margin-bottom:20px;'></div>";
                            $script .= "
                                var lat_$idx = {$CT->lat};
                                var lng_$idx = {$CT->lng};
                                var lat2_$idx = {$org->lat};
                                var lng2_$idx = {$org->lng};
                                var myLatLng_$idx = {lat: parseFloat(lat_$idx), lng: parseFloat(lng_$idx)};
                                var myLatLng2_$idx = {lat: parseFloat(lat2_$idx), lng: parseFloat(lng2_$idx)};
                                var map_$idx = new google.maps.Map(document.getElementById('map_$idx'), {
                                    center: myLatLng_$idx,
                                    zoom: 10
                                });
                                var marker_$idx = new google.maps.Marker({
                                    position: myLatLng_$idx,
                                    map: map_$idx,
                                    title: 'Service Center Location'
                                });
                                marker_$idx.setIcon('http://maps.google.com/mapfiles/ms/icons/red-dot.png');
                                var marker2_$idx = new google.maps.Marker({
                                    position: myLatLng2_$idx,
                                    map: map_$idx,
                                    title: 'ORG'
                                });
                                marker2_$idx.setIcon('http://maps.google.com/mapfiles/ms/icons/green-dot.png');
                            ";
                            $column->append( $mapElement );
                        }
                    });
                }
                

                //SCRIPTs
                $script .= "} </script>";
                $row->column(12, function (Column $column) use (&$CT, &$orgCount, &$personCount, &$sum, &$org, &$idx, &$script) {
                    $api_key = 'AIzaSyCgvAxV1oTM6A53Uy8NIBp-euQNo-GzwOU'; // Replace with your API key
                    $apiScript = "<script src='https://maps.googleapis.com/maps/api/js?key={$api_key}&callback=initMap' async defer></script>";
                    $column->append( $script . $apiScript);
                });

            });
    }
}
