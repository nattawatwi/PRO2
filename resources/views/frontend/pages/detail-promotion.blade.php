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

    <section class="page-section section-container mt-0 main-promotion-detail container">
    <div class="section-content">
    <a href="/pages/promotion" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
            <div class="row">
                <div class="col-12 col-md-6 main-promotion-image">
                    <img class="promotion-main-image" src="{{ asset('uploads/' . $promotion->Pm_Image) }}" alt="{{ $promotion->Pm_name }}" class="img-fluid">
                </div>
                <div class="col-12 col-md-6">
                    <div class="mt-3 mb-2">
                    {{ $promotion->Pm_St_date }} – {{ $promotion->Pm_EP_date }}</div>
                    <h1>{{ $promotion->Pm_name }}
                        <h4>{{ $promotion->Pm_detail }}</h4>
                    </h1>
                    <a href="https://www.ntmobile.in.th/th" class="round-filled-button filled-black" target="_blank">สมัครเลย</a>
                        <div id="promotion-terms-accordion" class="accordion">
                            <div class="card">
                                <div class="card-header active" id="headingOne">
                                    <h5 class="m-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            รายละเอียดและเงื่อนไขการให้บริการ
                                        </button>
                                    </h5>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        <p><b><u>ระยะเวลาส่งเสริมการขาย</u></b><b> </b><b>: {{ $promotion->Pm_EP_date }}</b></p><p><b>เงื่อนไขรายการส่งเสริมการขาย&nbsp;</b>
                                        <br></p>{!! $promotion->Pm_terms !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

</body>
</html>
@endsection
