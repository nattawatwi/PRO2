@extends('frontend.layouts.master')
@section('main-content')

<!DOCTYPE html>
<html lang="en">
<body>

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->
    
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="frontend/img/user.png" class="card-img-top" alt="Person Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">ลูกค้าส่วนบุคคล</h5>
                        <p class="card-text">Some information about a person.</p>
                        <a href="#" class="btn btn-primary">ค้นหาข้อมูลสำหรับบุคคล</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="frontend/img/organization.png" class="card-img-top" alt="Organization Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">ลูกค้าส่วนองค์กร</h5>
                        <p class="card-text">Some information about an organization.</p>
                        <a href="#" class="btn btn-primary">ค้นหาข้อมูลสำหรับองค์กร</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
@endsection

