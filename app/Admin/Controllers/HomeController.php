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

                $row->column(12, function (Column $column) {
                    // Add a dropdown button and additional cards
                    $column->append("
                       <h4 class='card-title'>ServiceCenter</h4>
                        <div class='card'>
                            <div class='card-body'>
                                <div class='row'>
                                    <div class='col'>
                                        <h5 class='card-title'>ศูนย์บริการ NT หนองคาย 1</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <button class='btn btn-primary btn-sm' data-toggle='collapse' data-target='#additional-info'>
                                            เพิ่มเติม
                                        </button>
                                    </div>
                                </div>
                                <div id='additional-info' class='collapse'>
                                    <div class='mt-3'>
                                        <!-- Additional cards go here -->
                                        <div class='card'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>Additional Card 1</h5>
                                                <!-- Additional content goes here -->
                                            </div>
                                        </div>
                                        <div class='card'>
                                            <div class='card-body'>
                                                <h5 class='card-title'>Additional Card 2</h5>
                                                <!-- Additional content goes here -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ");
                });
            });
        
    }
}
