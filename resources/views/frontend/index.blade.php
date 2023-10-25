@extends('frontend.layouts.master')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <title>NT NongKhai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
</head>
<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


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


    <!-- Facts Start -->
    <div class="container-fluid facts py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-users text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">NT ทั่วประเทศ</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">105</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.3s">
                    <div class="bg-light shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-primary mb-0">ลูกค้ารวมทั้งหมด</h5>
                            <h1 class="mb-0" data-toggle="counter-up">123</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow zoomIn" data-wow-delay="0.6s">
                    <div class="bg-primary shadow d-flex align-items-center justify-content-center p-4" style="height: 150px;">
                        <div class="bg-white d-flex align-items-center justify-content-center rounded mb-2" style="width: 60px; height: 60px;">
                            <i class="fa fa-award text-primary"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="text-white mb-0">โปรโมชั่นและบริการรวม</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">45</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts Start -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title position-relative pb-3 mb-5">
                        <h5 class="fw-bold text-primary text-uppercase">เกี่ยวกับเรา</h5>
                        <h1 class="mb-0">National Telecom Public Company Limited Nong Khai บริษัท โทรคมนาคมแห่งชาติ จำกัด (มหาชน) หนองคาย</h1>
                    </div>
                    <p class="mb-4">เราคือผู้ให้บริการโทรคมนาคม และดิจิทัลชั้นนำของประเทศ
                    เรามุ่งมั่น สร้างสรรค์นวัตกรรมใหม่ๆ ให้ก้าวทันในโลกของเทคโนโลยีที่กำลังเติบโตในทุกวัน เพื่อคุณภาพชีวิตที่ดีกว่าของคนไทยในยุคดิจิทัล</p>
                    <div class="row g-0 mb-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>ผู้ให้บริการมากที่สุดในหนองคาย</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>ดูแลคุณอย่างใกล้ชิด</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>ทีมงานช่าง ที่รวดเร็ว</h5>
                            <h5 class="mb-3"><i class="fa fa-check text-primary me-3"></i>สอบถามข้อมูล 24 ชม.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="https://scontent.fkkc1-1.fna.fbcdn.net/v/t39.30808-6/357410152_754474596685177_5401665352238113114_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGUca2Fe6lI4MDpI2RdsafBBP_ioZRdKWUE_-KhlF0pZfc_J1J2-V1vIh6r72sTzJ6vooPtKjXX3sza6ImOFohg&_nc_ohc=p5JK0rABtLoAX_pditw&_nc_ht=scontent.fkkc1-1.fna&oh=00_AfCj9Y1HbfC1B-4w9uPFXOcXKQLn9uWsh4xx9OlFNAjg8Q&oe=653A910D" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Promotion Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #55595A; border-radius: 0 200px 0 0;" >

        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase " style="color: #FFFFFF;">Special Promotions For You</h5>
                <h2 class="mb-0" style="color: #FFFFFF;">กำลังมองหาโปรโมชั่นอยู่หรือเปล่า?</h2>
            </div>
            @if(isset($promotions) && count($promotions) > 0)
                <div class="row g-5">
                    @php
                        $count = 0;
                    @endphp
            
                    @foreach ($promotions as $promotion)
                        @if ($count < 3)
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('uploads/' . $promotion->Pm_Image) }}" alt="">
                                    </div>
                                    <div class="p-4" style="background-color: #FFFFFF">
                                        <div class="d-flex mb-3">
                                            <small><i class="far fa-calendar-alt text-primary me-2"></i>{{ $promotion->Pm_St_date }} - {{ $promotion->Pm_EP_date }}</small>
                                        </div>
                                        <h4 class="mb-3">{{ $promotion->Pm_name }}</h4>
                                        <p>{{ Str::limit($promotion->Pm_detail, 80) }}</p>
                                        <a class="text-uppercase" href="{{ route('detail-promotion', ['id' => $promotion->PromotionID]) }}">Read More <i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
            
                            @php
                                $count++;
                            @endphp
                        @endif
                    @endforeach
                </div>
            @else
                <p>No promotions available.</p>
            @endif
        </div>
    </div>
    <!-- Promotion End -->


    <!-- Features Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">ทำไมถึงต้องเลือกพวกเรา</h5>
                <h1 class="mb-0">ให้เราเป็นหนึ่งตัวช่วยในการท่องโลกอินเทอร์เน็ตของคุณ</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.2s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-cubes text-white"></i>
                            </div>
                            <h4>โปรโมชั่นและบริการที่หลากหลาย</h4>
                            <p class="mb-0">เพราะเราเข้าใจความหลากหลายของลูกค้า ดังนั้นเรามีโปรโมชั่นและบริการที่หลากหลายเพื่อตอบสนองความต้องการของทุกคน</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.6s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-award text-white"></i>
                            </div>
                            <h4>ทีมงานช่างที่มีประสบการณ์</h4>
                            <p class="mb-0">ทีมงานของเรามีประสบการณ์ที่สร้างสรรค์และมีความเชี่ยวชาญในงาน</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4  wow zoomIn" data-wow-delay="0.9s" style="min-height: 350px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="https://scontent.fkkc1-1.fna.fbcdn.net/v/t39.30808-6/324410926_700762531674623_7334447022226793565_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGxr0TfCGlbksSSgcuQ-dgsOrP0DLF1C1c6s_QMsXULV5vwIfj-a4bzKozIu4K0cKPRqBoODdJYYa7195c0gbXJ&_nc_ohc=_4W7AriM5CoAX__0qvK&_nc_ht=scontent.fkkc1-1.fna&oh=00_AfA4lYHAIc-lhRxtqG5te1vohO8F6vKh54t1D8ynUrForw&oe=653BABAF" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row g-5">
                        <div class="col-12 wow zoomIn" data-wow-delay="0.4s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-users-cog text-white"></i>
                            </div>
                            <h4>พนักงานที่มีประสิทธิภาพ</h4>
                            <p class="mb-0">ทีมงานของเรามีประสบการณ์ที่สร้างสรรค์และมีความเชี่ยวชาญในงาน</p>
                        </div>
                        <div class="col-12 wow zoomIn" data-wow-delay="0.8s">
                            <div class="bg-primary rounded d-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                                <i class="fa fa-phone-alt text-white"></i>
                            </div>
                            <h4>ติดต่อสอบถามได้ทุกเวลา</h4>
                            <p class="mb-0">เราให้บริการความสะดวกสบายตลอดเวลา ทำให้คุณสามารถติดต่อสอบถามหรือแจ้งปัญหาได้ทุกเวลาที่คุณต้องการ</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features Start -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">บริการของเรา</h5>
                <h2 class="mb-0">บริการที่ดี มีประสิทธิภาพ ส่งเสริมการทำงาน เพื่อความสะดวกของคุณ</h2>
            </div>
            @if(isset($services) && count($services) > 0)
            <div class="row g-5">
                @php
                    $count = 0;
                @endphp

                @foreach ($services as $service)
                    @if ($count < 5)
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

                        @php
                            $count++;
                        @endphp
                    @endif
                @endforeach
                <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.9s">
                <div class="position-relative bg-primary rounded h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <h3 class="text-white mb-3">สอบถามเพิ่มเติม</h3>
                    <p class="text-white mb-3">สอบถามข้อมูลเพิ่มเติมได้ที่ 1888 หรือ</p>
                    <h2 class="text-white mb-0">042-411-500</h2>
                </div>
            </div>
            </div>
            @else
                <p>No services available.</p>
            @endif

        </div>
    </div>

    <!-- Service End -->



    <!-- Testimonial Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-4 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Testimonial</h5>
                <h1 class="mb-0">What Our Clients Say About Our Digital Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.6s">
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="frontend/img/testimonial-1.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="frontend/img/testimonial-2.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="frontend/img/testimonial-3.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
                <div class="testimonial-item bg-light my-4">
                    <div class="d-flex align-items-center border-bottom pt-5 pb-4 px-5">
                        <img class="img-fluid rounded" src="frontend/img/testimonial-4.jpg" style="width: 60px; height: 60px;" >
                        <div class="ps-4">
                            <h4 class="text-primary mb-1">Client Name</h4>
                            <small class="text-uppercase">Profession</small>
                        </div>
                    </div>
                    <div class="pt-4 pb-5 px-5">
                        Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- resources/views/horizontal-card.blade.php -->

    <div class="card-photo">
        <img src="https://scontent.fkkc1-1.fna.fbcdn.net/v/t39.30808-6/357757415_754474733351830_7906854616099992940_n.png?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHO6-TG-UpmArUJS2cj_oi4x28xQ5Vp6C7HbzFDlWnoLo7Y09l6nyYnW5eZtjI4KC2tMMZv-K9sbyqShbG-U3A7&_nc_ohc=sFnJkpE-tvgAX-76mT5&_nc_ht=scontent.fkkc1-1.fna&oh=00_AfBPH1WWYG688yYJU-xS9EEOQbDR9ZnYy3VY6rKTgP4X_w&oe=653BAC63" alt="Image" class="card-img-top">
        <div class="card-body">
        </div>
    </div>

</body>
</html>
@endsection

