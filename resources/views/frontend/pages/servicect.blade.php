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

    <section class="promotion-section">
    <div class="container">
    <div id="Contentplaceholder_C004_Col00" class="sf_colsIn" data-sf-element="ListHeadTextContainer" data-placeholder-label="ListHeadTextContainer">
        <h1 class="promotion-heading">Service Center<span style='font-size: 30px; color: grey; margin-left: 10px;'>ศูนย์ให้บริการ</span></h1>
    </div>


   <!-- Service Start -->
   
   
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ศูนย์ให้บริการ 5 ศูนย์ </h5>
            </div>
            <div>
                <h2 class="mb-0">1</h2>
                <h2 class="mb-0">2</h2>
                <h2 class="mb-0">3</h2>
                <h2 class="mb-0">4</h2>
                <h2 class="mb-0">5</h2>
                </div>
            </div>
            
        </div>
    </div>

</body>
</html>
@endsection

