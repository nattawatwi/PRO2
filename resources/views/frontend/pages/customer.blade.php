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

    <!-- Customer Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <a href="{{ url('pages/detail-customer') }}" class="text-decoration-none text-dark">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://mpics.mgronline.com/pics/Images/564000011915904.JPEG" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Person</h4>
                                <p class="text-uppercase m-0">ลูกค้าบุคคล</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <a href="{{ url('pages/detail-customer') }}" class="text-decoration-none text-dark">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="https://lh5.googleusercontent.com/wZymo9NpgmNC9HaFY12OZQiAkaPIOXgZLUxcBNZ_B4aHcEqWyVzNQ5Tabw_qd_gSL6DR_IYbCDkGGPLHg38ydL6K2JAKwJmzaEKaZIoPzKOXXJAYPqqb34fJH8XZrMEyeIwZrSoh" alt="">
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">Organization</h4>
                                <p class="text-uppercase m-0">ลูกค้าองค์กร</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Customer End -->
    
    
</body>
</html>
@endsection

