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
                                        <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                            <path d='M0 0h24v24H0z' stroke='none'/>
                                            <circle cx='9' cy='7' r='4'/>
                                            <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                            <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                        </svg>
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
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                                <path d='M0 0h24v24H0z' stroke='none'/>
                                                <circle cx='9' cy='7' r='4'/>
                                                <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                                <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                            </svg>
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
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                                <path d='M0 0h24v24H0z' stroke='none'/>
                                                <circle cx='9' cy='7' r='4'/>
                                                <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                                <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>1</h1>
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
                                        <h5 class='card-title'>ลูกค้าส่วนบุคคล</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                                <path d='M0 0h24v24H0z' stroke='none'/>
                                                <circle cx='9' cy='7' r='4'/>
                                                <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                                <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$organizationCount</h1>
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
                                        <h5 class='card-title'>ลูกค้าส่วนบุคคล</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                                <path d='M0 0h24v24H0z' stroke='none'/>
                                                <circle cx='9' cy='7' r='4'/>
                                                <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                                <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$organizationCount</h1>
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
                                        <h5 class='card-title'>ลูกค้าส่วนบุคคล</h5>
                                    </div>
                                    <div class='col-auto'>
                                        <div class='stat text-primary'>
                                            <svg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24' fill='none' stroke='currentColor' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-users align-middle'>
                                                <path d='M0 0h24v24H0z' stroke='none'/>
                                                <circle cx='9' cy='7' r='4'/>
                                                <path d='M9 13.8a7.5 7.5 0 0 1 0-9.6'/>
                                                <path d='M12 21.4a7.5 7.5 0 0 1 0-9.6'/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <h1 class='mt-1 mb-3'>$organizationCount</h1>
                            </div>
                        </div>
                    ");
                });
        });
    }
}
