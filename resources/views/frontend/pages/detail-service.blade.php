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
    
    <!-- Detail Service Start -->
    <section class="page-section section-bg-light section-right" style="margin-bottom: -75px;">
        <div class="section-content">   
            <div class="section-fiber-services-content">
                <div class="container ">
                    <a href="/pages/service" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
                    <ul>
                        <div class="row floating-content-wrapper">
                    

<div class="col-xs-12 col-sm-6">
    @if($service->Sv_pic1 || $service->Sv_pic2 || $service->Sv_pic3 || $service->Sv_pic4 || $service->Sv_pic5)
        <div class="owl-carousel">
            @if($service->Sv_pic1)
                <img class="rounded" src="{{$service->Sv_pic1}}" >
            @endif
            @if($service->Sv_pic2)
                <img class="rounded" src="{{$service->Sv_pic2}}" >
            @endif
            @if($service->Sv_pic3)
                <img class="rounded" src="{{$service->Sv_pic3}}" >
            @endif
            @if($service->Sv_pic4)
                <img class="rounded" src="{{$service->Sv_pic4}}" >
            @endif
            @if($service->Sv_pic5)
                <img class="rounded" src="{{$service->Sv_pic5}}" >
            @endif
        </div>
    @else
        IMAGE
    @endif
</div>
                            <div class="col-xs-12 col-sm-6">
                                <div class="floating-content">
                                    <ul class="">{!!$service->Sv_detail1!!}</ul>
                                    <ul class="pt-3">{!!$service->Sv_detail2!!}</ul>
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
    <!-- Detail Service End -->

<script src="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
var owl = $('.owl-carousel');
owl.owlCarousel({
    items:1,
    loop:true,
    // margin:0,
    autoWidth:false,
    autoHeight:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    dots: false,
    nav: false,
});

$('a.fancybox').fancybox({
    type: "iframe",
    'width': 1000,
    'height': 800,
});
</script>
</body>
</html>
@endsection

