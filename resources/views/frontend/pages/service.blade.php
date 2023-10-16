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
                <h5 class="fw-bold text-primary text-uppercase">Our Services</h5>
                <h1 class="mb-0">Professional Services to Help Your Business</h1>
            </div>
            <div class="row g-5">
                @foreach ($services as $service)
                    <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                        <div class="team-item bg-light rounded overflow-hidden">
                            <div class="team-img position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="{{ asset('uploads/' . $service->Sv_Image) }}" alt="{{ $service->Sv_name }}">
                                <div class="team-social">
                                    <!-- เพิ่มลิงค์โซเชียลมีเดียที่นี่ (ตามที่คุณต้องการ) -->
                                </div>
                            </div>
                            <div class="text-center py-4">
                                <h4 class="text-primary">{{ $service->Sv_name }}</h4>
                                <!-- เพิ่มข้อมูลเพิ่มเติมเช่นรายละเอียดเพิ่มเติมหรือลิงค์ -->
                            </div>
                        </div>
                    </div>
                @endforeach
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

