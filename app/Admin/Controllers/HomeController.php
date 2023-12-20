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
    public function index(Content $content)
    {   
        Admin::css(asset('open-admin/css/pages/dashboard.css'));
        Admin::js(asset('open-admin/js/pages/dashboard.js'));

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

                
                // $row->column(12, function (Column $column) {
                //     $organizations = Organization::all()->groupBy('ServiceCenterID');
                
                //     $html = '<h4 class="card-title">ServiceCenter</h4><div class="accordion" id="accordionExample">';
                
                //     foreach ($organizations as $serviceCenterID => $orgs) {
                //         $html .= '<div class="accordion-item">';
                //         $html .= '<h2 class="accordion-header">';
                //         $html .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' . str_replace(' ', '-', $serviceCenterID) . '" aria-expanded="false" aria-controls="collapse-' . str_replace(' ', '-', $serviceCenterID) . '">' . $serviceCenterID . '</button>';
                //         $html .= '</h2>';
                //         $html .= '<div id="collapse-' . str_replace(' ', '-', $serviceCenterID) . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
                //         $html .= '<div class="accordion-body">';
                
                //         $html .= '<ul class="list-group">'; // เริ่มต้นการแสดงข้อมูลเป็น List Group
                
                //         foreach ($orgs as $organization) {
                //             $html .= '<li class="list-group-item">' . $organization->Ogn_name . '</li>';
                //         }
                
                //         $html .= '</ul>'; // สิ้นสุด List Group
                
                //         $html .= '</div></div></div>';
                //     }
                
                //     $html .= '</div>';
                //     $column->append($html);
                // });

                $row->column(12, function (Column $column) {
                    $organizations = Organization::all()->groupBy('ServiceCenterID');
                
                    $html = '<h4 class="card-title">ServiceCenter</h4><div class="accordion" id="accordionExample">';
                
                    foreach ($organizations as $serviceCenterID => $orgs) {
                        $html .= '<div class="accordion-item">';
                        $html .= '<h2 class="accordion-header">';
                        $html .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-' . str_replace(' ', '-', $serviceCenterID) . '" aria-expanded="false" aria-controls="collapse-' . str_replace(' ', '-', $serviceCenterID) . '">' . $serviceCenterID . '</button>';
                        $html .= '</h2>';
                        $html .= '<div id="collapse-' . str_replace(' ', '-', $serviceCenterID) . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">';
                        $html .= '<div class="accordion-body">';
                
                        $html .= '<ul class="list-group">'; // เริ่มต้นการแสดงข้อมูลเป็น List Group
                
                        foreach ($orgs as $organization) {
                            $detailPageLink = url('/admin/organizations/' . $organization->id); // URL สำหรับลิงก์ไปยังหน้ารายละเอียดของ Service Center
                            $html .= '<li class="list-group-item"><a href="' . $detailPageLink . '">' . $organization->Ogn_name . '</a></li>';
                        }
                
                        $html .= '</ul>'; // สิ้นสุด List Group
                
                        $html .= '</div></div></div>';
                    }
                
                    $html .= '</div>';
                    $column->append($html);
                });
                
                
                
                
                
                
                
            });
        
    }
}
