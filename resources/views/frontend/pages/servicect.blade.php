@extends('frontend.layouts.master')
@section('main-content')


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" rel="stylesheet">
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

    <section class="promotion-section">
    <div class="container">
    <div id="Contentplaceholder_C004_Col00" class="sf_colsIn" data-sf-element="ListHeadTextContainer" data-placeholder-label="ListHeadTextContainer">
        <h1 class="promotion-heading">Service Center<span style='font-size: 30px; color: grey; margin-left: 10px;'>ศูนย์ให้บริการ</span></h1>
    </div>


   <!-- Service Start -->
   
   
   <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ศูนย์ให้บริการ {{ count($data) }} ศูนย์ </h5>
            </div>
            <div>
                @php $idx=0; @endphp
                @foreach ($data as $rec)
                @php $idx++; @endphp
                    <div class="container-fluid">
                        <div class="row">
                            <div class="offset-1 col-4">
                                @if($rec->Sc_pic1 || $rec->Sc_pic2 || $rec->Sc_pic3 || $rec->Sc_pic4 || $rec->Sc_pic5)
                                    <div class="owl-carousel">
                                        @if($rec->Sc_pic1)
                                            <img class="rounded" src="{{$rec->Sc_pic1}}" width=400 height=300>
                                        @endif
                                        @if($rec->Sc_pic2)
                                            <img class="rounded" src="{{$rec->Sc_pic2}}" width=400 height=300>
                                        @endif
                                        @if($rec->Sc_pic3)
                                            <img class="rounded" src="{{$rec->Sc_pic3}}" width=400 height=300>
                                        @endif
                                        @if($rec->Sc_pic4)
                                            <img class="rounded" src="{{$rec->Sc_pic4}}" width=400 height=300>
                                        @endif
                                        @if($rec->Sc_pic5)
                                            <img class="rounded" src="{{$rec->Sc_pic5}}" width=400 height=300>
                                        @endif
                                    </div>
                                @else
                                    IMAGE
                                @endif
                            </div>
                            <div class="offset-1 col-6">
                                <h4>{{$idx}}. {{$rec->Sc_name}}</h4>
                                <div class="row pt-0 pb-5">
                                    <div class="col-12" style="background-color:lightgrey; border-radius:10px; padding:10px;">
                                            <h5>ที่อยู่</h5>
                                            <div class="p-2 h5">{{$rec->Sc_address}}</div>
                                            <h5 class="pt-1">ช่องทางการติดต่อ</h5>
                                            <div class="pl-3 h5">Email : {{$rec->Sc_email}}</div>
                                            <div class="pl-3 h5">เบอร์โทรศูนย์บริการ : {{$rec->Sc_phone}}</div>
                                            <div class="pl-4 h5">เบอร์แฟกซ์ : {{$rec->Sc_fax}}</div>
                                    </div>
                                    <!-- <div class="col-12 text-center"> -->
                                        <a class="col-12 btn btn-primary p-3 px-5 mt-2 h4 fs-4 iframe fancybox fancybox.iframe" style="border-radius:10px;" href="https://maps.google.com/maps?q={{$rec->lat}},{{$rec->lng}}&hl=en&z=14&amp;output=embed" data-fancybox-type="iframe">แผนที่ศูนย์บริการ</a>
                                    <!-- </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            
            
        </div>
    </div>

</div>
</section>

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

