@extends('frontend.layouts.master')
@section('main-content')

<!DOCTYPE html>
<html lang="en">
<head>
<link href="
https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/css/lightbox.min.css
" rel="stylesheet">
</head>
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

    <!-- Promotion Section -->
    <div class="section-indicator-line"></div>
    <div class="section-indicator no-overlap filled-red">

    </div>
    <section class="page-section section-right mt-0">
        <div class="section-content">
            <div>
                <div class="container">
                    <a href="/pages/service" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
                    <p>&nbsp;</p>
                    <div style="text-align: justify">
                    <p style="text-indent: 5%"><b>&nbsp;</b></p>
                    <h1 class="promotion-heading">รูปแบบบริการ CCTV<span style='font-size: 30px; color: grey; margin-left: 10px;'>ศูนย์ให้บริการ</span></h1>
                    <small class="news-detail-date">เผยแพร่ | 1 มีนาคม</small>
                    <p></p>
                    <h5 class="promotion-heading">อบต.โพนทอง<span style='font-size: 30px; color: grey; margin-left: 10px;'>9 ตัว</span></h5>
                    
                    <!-- Add Back Button -->
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Promotion Section --> 

    <section class="page-section section-right mt-0">
        <div class="section-content">
            <div>
                <div class="containerimgcctv text-center">
                   <h5 class="cctv-heading">ภาพตัวอย่างการใช้งาน</h5>
                  <a href="{{ asset('frontend/img/2.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/2.jpg') }}" class="col-3 ps-3 pt-3"></a>
                  <a href="{{ asset('frontend/img/1.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/1.jpg') }}" class="col-3 ps-3 pt-3"></a>
                  <a href="{{ asset('frontend/img/2.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/2.jpg') }}" class="col-3 ps-3 pt-3"></a>
                  <a href="{{ asset('frontend/img/1.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/1.jpg') }}" class="col-3 ps-3 pt-3"></a>
                  <a href="{{ asset('frontend/img/2.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/2.jpg') }}" class="col-3 ps-3 pt-3"></a>
                  <a href="{{ asset('frontend/img/1.jpg') }}" data-lightbox="image" data-title="My caption"><img src="{{ asset('frontend/img/1.jpg') }}" class="col-3 ps-3 pt-3"></a>
                </div>
            </div>
        </div>
    </section>


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>

<script src="
https://cdn.jsdelivr.net/npm/lightbox2@2.11.4/dist/js/lightbox.min.js
"></script>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
    })
</script>

@endsection