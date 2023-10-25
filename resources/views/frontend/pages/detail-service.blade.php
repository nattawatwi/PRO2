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
    
    <section class="page-section section-bg-light section-right" style="margin-bottom: 100px;">
        <div class="section-content">   
            <div class="section-fiber-services-content">
                <div class="container ">
                    <a href="/pages/service" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
                    <ul>
                        <div class="row floating-content-wrapper">
                            <div class="col-xs-12 col-sm-6">
                                <img src="{{ asset('uploads/' . $service->Sv_Image) }}">
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="floating-content">
                                    <ul>{!!$service->Sv_detail1!!}</ul>
                                    <ul>{!!$service->Sv_detail2!!}</ul>

                                </div>
                            </div>
                            <div class="fiber-services">
                                <div class="deco deco-signal" style="transform: translateX(0px) translateY(2.47372px);">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
@endsection

