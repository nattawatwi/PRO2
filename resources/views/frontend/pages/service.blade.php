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



   <!-- Service Start -->
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">บริการของเรา</h5>
                <h2 class="mb-0">บริการที่ดี มีประสิทธิภาพ ส่งเสริมการทำงาน เพื่อความสะดวกของคุณ</h2>
            </div>
            <div class="row g-5">
            @foreach ($services as $service)
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="service-icon">
                            <i class="fa fa-shield-alt text-white"></i>
                        </div>
                        <h4 class="mb-3">{{ $service->Sv_name }}</h4>
                        <p class="m-0">{{ $service->description }}</p>
                        <a class="btn btn-lg btn-primary rounded" href="{{ route('service-detail', ['id' => $service->ServiceID]) }}">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            @endforeach
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">สอบถามเพิ่มเติม</h3>
                    <p class="text-white mb-3">สอบถามข้อมูลเพิ่มเติมได้ที่ 1888 หรือ</p>
                    <h2 class="text-white mb-0">042-411-500</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- Service End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
@endsection

