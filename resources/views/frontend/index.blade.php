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
                            <h5 class="text-white mb-0">ศูนย์บริการ NT ทั่วประเทศ</h5>
                            <h1 class="text-white mb-0" data-toggle="counter-up">500</h1>
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
                            <h1 class="text-white mb-0" data-toggle="counter-up">12</h1>
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
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/357410152_754474596685177_5401665352238113114_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeEFQvw90yb3L1Ukhb0k5qdLBP_ioZRdKWUE_-KhlF0pZdzVQbrfotFSg72393vbmQxkhV57yMg6NlcUrNLGXzo-&_nc_ohc=XB9u_AaGQ7wAX9fOc3r&_nc_ht=scontent.fkkc2-1.fna&oh=00_AfA385KCtR0HEMIEZJ-DxYvkd5730BauocuI8RWSSvIMZQ&oe=6575E48D" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

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
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.1s" src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/324410926_700762531674623_7334447022226793565_n.jpg?stp=cp6_dst-jpg&_nc_cat=103&ccb=1-7&_nc_sid=3635dc&_nc_eui2=AeGAft3LEh6U5wTWRYkT88GEOrP0DLF1C1c6s_QMsXULV9nw4I3N8FEoYuFpGhBF6niYl8WETXu6fujoUXhGI6G7&_nc_ohc=0L_9JvKGEQMAX-VKiGs&_nc_ht=scontent.fkkc2-1.fna&oh=00_AfB2h0Afqo_hVHs2zsMmWHg64UbS-2k9uV-026yrVb66aw&oe=657504EF" style="object-fit: cover;">
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


    <!-- Promotion Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #444444; border-radius: 0 200px 0 0; box-shadow: 0 30px 40px rgba(0, 0, 0, 0.4);">
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
                    <h2 class="text-white mb-0">042-411500</h2>
                </div>
            </div>
            </div>
            @else
                <p>No services available.</p>
            @endif

        </div>
    </div>

    <!-- Service End -->

    <!-- News Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="background-color: #f8d247; border-radius: 200px 0 0 0; box-shadow: 0 30px 40px rgba(0, 0, 0, 0.4);">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-uppercase " style="color: #3B3B3B;">News NT</h5>
                <h2 class="mb-0" style="color: #282828;">ข่าวสารอับเดตจาก NT</h2>
            </div>
            @if(isset($news) && count($news) > 0)
                <div class="row g-5">
                    @php
                        $count = 0;
                    @endphp
            
                    @foreach ($news as $new)
                        @if ($count < 3)
                            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
                                <div class="blog-item bg-light rounded overflow-hidden">
                                    <div class="blog-img position-relative overflow-hidden">
                                        <img class="img-fluid" src="{{ asset('uploads/' . $new->Nw_image) }}" alt="" width="400" height="400">
                                    </div>
                                    <div class="p-4" style="background-color: #FFFFFF">
                                        <h4 class="mb-3">{{ Str::limit($new->Nw_title, 50) }}</h4>
                                        <p>{{ Str::limit($new->Nw_content, 80) }}</p>
                                        <a class="text-uppercase" href="{{ route('news-detail', ['id' => $new->NewsID]) }}">Read More <i class="bi bi-arrow-right"></i></a>
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
    <!-- News End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- resources/views/horizontal-card.blade.php -->

    <div class="card-photo">
        <img src="https://scontent.fkkc1-1.fna.fbcdn.net/v/t39.30808-6/357757415_754474733351830_7906854616099992940_n.png?_nc_cat=108&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHO6-TG-UpmArUJS2cj_oi4x28xQ5Vp6C7HbzFDlWnoLo7Y09l6nyYnW5eZtjI4KC2tMMZv-K9sbyqShbG-U3A7&_nc_ohc=zEQmHbtnj04AX88d8jh&_nc_ht=scontent.fkkc1-1.fna&oh=00_AfB2o-FBzzLTmj2iivk_CeiqnMRK3lvPdWoTrg7YwKHbAA&oe=65458FA3" alt="Image" class="card-img-top">
        <div class="card-body">
        </div>
    </div>

</body>
</html>
@endsection

