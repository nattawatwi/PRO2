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
                       <div class='accordion' id='accordionExample'>
                        <div class='accordion-item'>
                          <h2 class='accordion-header'>
                            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseOne' aria-expanded='false' aria-controls='collapseOne' fdprocessedid='hv3bxm'>
                              ศูนย์บริการ NT หนองคาย 1
                            </button>
                          </h2>
                          <div id='collapseOne' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                        </div>
                        <div class='accordion-item'>
                          <h2 class='accordion-header'>
                            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseTwo' aria-expanded='false' aria-controls='collapseTwo' fdprocessedid='hv3bxm'>
                              ศูนย์บริการ NT ท่าบ่อ
                            </button>
                          </h2>
                          <div id='collapseTwo' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                          <div id='collapseTwo' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                          <div id='collapseTwo' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                        </div>
                        <div class='accordion-item'>
                          <h2 class='accordion-header'>
                            <button class='accordion-button collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapseThree' aria-expanded='false' aria-controls='collapseThree' fdprocessedid='hv3bxm'>
                              ศูนย์บริการ NT หนองคาย 1
                            </button>
                          </h2>
                          <div id='collapseThree' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                          <div id='collapseThree' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                          <div id='collapseThree' class='accordion-collapse collapse' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <strong><h6>&nbsp;&nbsp;&nbsp;&nbsp;สภ.หนองคาย	Police	042412710 NT Broadband</h6>
                            </div>
                          </div>
                        </div>
                     </div>
                    ");
                });
            });
        
    }
}
