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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>{{ $news->Nw_title }}</h1>
                <p>{{ $news->Nw_content }}</p>
                <p>Category: {{ $news->CTID }}</p>
                <p>Date: {{ $news->Nw_date }}</p>
                <p>Views: {{ $news->Nw_views }}</p>
                <!-- You can add more details as needed -->
            </div>
        </div>
    </div>

   


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>
@endsection

<!-- @extends('frontend.layouts.master')
@section('main-content')

<!DOCTYPE html>
<html lang="en">

<body>


<!-- Promotion Section --><!--
<div class="section-indicator-line"></div>
<div class="section-indicator no-overlap filled-red">

</div>
<section class="page-section section-right mt-0">
    <div class="section-content">
        <div>
            <div class="container">
                <p>&nbsp;</p>
                <div style="text-align: justify">
                <p style="text-indent: 5%"><b></b><img src="{{asset('frontend/img/nt-news.jpg')}}" style="width: 65%; display: block; margin-left: auto; margin-right: auto" alt="NT เชื่อมโยงสัญญาณถ่ายทอดสด เอเชียนเกมส์ ครั้งที่ 19 จากเมืองหางโจว ประเทศจีน"></p>
                <p style="text-indent: 5%"><b>&nbsp;</b></p>
                <h1 class="carousel-title">
                    NT เชื่อมโยงสัญญาณถ่ายทอดสด เอเชียนเกมส์ ครั้งที่ 19 จากเมืองหางโจว ประเทศจีน
                </h1>
                <small class="news-detail-date">เผยแพร่ | 22 ก.ย. 2566</small>
                <p>&nbsp;</p>
                <p style="text-indent: 5%"><b>NT เชื่อมโยงสัญญาณถ่ายทอดสด เอเชียนเกมส์ ครั้งที่ 19 จากเมืองหางโจว ประเทศจีน เชิญชวนแฟน ๆ กีฬาชาวไทยรับชมการแข่งขันกีฬาเอเชียนเกมส์ ครั้งที่ 19 ระหว่างวันที่ 23 กันยายน จนถึง 8 ตุลาคม 2566&nbsp; &nbsp;</b></p>
                <p style="text-indent: 5%">&nbsp;</p>
                <p style="text-indent: 5%">โดย บริษัท โทรคมนาคมแห่งชาติ จำกัด (มหาชน) หรือ NT ได้รับความไว้วางใจจาก โทรทัศน์รวมการเฉพาะกิจแห่งประเทศไทย ให้เป็นผู้ดำเนินการเชื่อมโยงสัญญาณถ่ายทอดสดจากเมืองหางโจว ประเทศจีน ผ่านดาวเทียม AsiaSat 5 มายังสถานีดาวเทียมนนทบุรี เพื่อส่งต่อไปศูนย์ถ่ายทอดสดและรายงานข่าวการแข่งขันกีฬาและกิจกรรมที่สำคัญของประเทศไทย (สำนักงาน กสทช. ภาค 1) จากนั้นส่งสัญญาณผ่านโครงข่ายไฟเบอร์ออปติก ไปยังสถานีโทรทัศน์ช่องต่าง ๆ ทั้ง 11 ช่อง อาทิ ช่อง ThaiPBS, ช่อง NBT2HD, ช่อง TV5HD, ช่อง T Sports 7, ช่อง 7HD, ช่อง MCOT30HD, ช่อง PPTV36HD, ช่อง Workpoint, ช่อง True4U, ช่อง GMM25 และช่อง JKN18</p>
                <p style="text-indent: 5%">NT เชื่อมโยงสัญญาณถ่ายทอดสดเอเชียนเกมส์ ครั้งที่ 19 จากเมืองหางโจว ประเทศจีน เชิญชวนแฟน ๆ กีฬาชาวไทยรับชมการแข่งขันกีฬาเอเชียนเกมส์ ครั้งที่ 19 ระหว่างวันที่ 23 กันยายน จนถึง 8 ตุลาคม 2566 โดย บริษัท โทรคมนาคมแห่งชาติ จำกัด (มหาชน) หรือ NT ได้รับความไว้วางใจจาก โทรทัศน์รวมการเฉพาะกิจแห่งประเทศไทย ให้เป็นผู้ดำเนินการเชื่อมโยงสัญญาณถ่ายทอดสดจากเมืองหางโจว ประเทศจีน ผ่านดาวเทียม AsiaSat 5 มายังสถานีดาวเทียมนนทบุรี เพื่อส่งต่อไปศูนย์ถ่ายทอดสดและรายงานข่าวการแข่งขันกีฬาและกิจกรรมที่สำคัญของประเทศไทย (สำนักงาน กสทช. ภาค 1) จากนั้นส่งสัญญาณผ่านโครงข่ายไฟเบอร์ออปติก ไปยังสถานีโทรทัศน์ช่องต่าง ๆ ทั้ง 11 ช่อง อาทิ ช่อง ThaiPBS, ช่อง NBT2HD, ช่อง TV5HD, ช่อง T Sports 7, ช่อง 7HD, ช่อง MCOT30HD, ช่อง PPTV36HD, ช่อง Workpoint, ช่อง True4U, ช่อง GMM25 และช่อง JKN18</p>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- End-Promotion Section --> <!--

<section class="page-section section-author  mt-4 mb-4">
    <div class="container">
            <div class="author">             
                 
                ผู้เขียน : <img class="author-avatar" src="https://www.ntplc.co.th/images/default-source/banners/nt.jpeg?Status=Master&amp;sfvrsn=a7991732_3"> <span class="author-name">NT</span>
            </div>
            <hr>
                    <div class="blog-detail-tags">
                    ห้วข้อที่เกี่ยวข้อง : 
                    <div class="blog-tags">
                        <div class="blog-tag"><a href="/search?indexCatalogue=site-search&amp;searchQuery=NT">#NT</a></div>
                    </div>            
            </div>
    </div>
</section>


</body>

</html>
@endsection

-->

/*
/* Main Carousel */
section {
    margin: 20px 0; /* Add margin as needed */
}

.main-carousel-list {
    position: relative;
    overflow: hidden;
}

.swiper-wrapper {
    display: flex;
    transition: transform 0.3s ease; /* Add a smooth transition for sliding effect */
}

.swiper-slide {
    flex: 0 0 auto;
    width: 100%;
}

/* Slide Content Styles */
.slide-content {
    position: relative;
    text-align: center; /* or adjust as needed */
}

.carousel-content {
    padding: 20px; /* Add padding as needed */
    background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent background */
}

.carousel-tag button {
    background-color: #3498db; /* Add your preferred color */
    color: #fff;
    padding: 5px 10px;
    border: none;
    border-radius: 5px;
    margin-bottom: 10px; /* Adjust as needed */
}

.carousel-title {
    font-size: 24px; /* or adjust as needed */
    margin-bottom: 10px; /* Adjust as needed */
}

.news-detail-date {
    font-size: 14px; /* or adjust as needed */
    color: #777;
}

.carousel-image img {
    max-width: 100%;
    height: auto;
    border-radius: 5px; /* Add border-radius as needed */
    margin-top: 10px; /* Adjust as needed */
}

/* Swiper Pagination Styles */
.swiper-pagination {
    position: absolute;
    bottom: 10px; /* Adjust as needed */
    left: 50%;
    transform: translateX(-50%);
}

.swiper-pagination-bullet {
    background-color: #bbb; /* Add your preferred color */
    width: 10px;
    height: 10px;
    border-radius: 50%;
    margin: 0 5px;
    cursor: pointer;
}

.swiper-pagination-bullet-active {
    background-color: #3498db; /* Add your preferred active color */
}

/* Swiper Navigation Styles (if needed) */
.swiper-button-prev,
.swiper-button-next {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 30px; /* Adjust as needed */
    height: 30px; /* Adjust as needed */
    background-color: #3498db; /* Add your preferred color */
    border-radius: 50%;
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
}

/* Disable navigation buttons on disabled state */
.swiper-button-disabled {
    opacity: 0.5;
    pointer-events: none;
}


/* Page News Styles */
.page-section {
    padding: 40px 0; /* Add padding as needed */
    background-color: rgb(255, 255, 255); /* Add your preferred background color */
}

.section-author {
    text-align: left; /* or adjust as needed */
}

/* Author Styles */
.author {
    margin-bottom: 20px; /* Add margin as needed */
}

.author-avatar {
    width: 50px; /* Add your preferred size */
    height: 50px; /* Add your preferred size */
    border-radius: 50%; /* Make it round */
    margin-right: 10px; /* Add margin as needed */
}

.author-name {
    font-weight: bold; /* or adjust as needed */
}

/* Horizontal Line Styles */
hr {
    border: none;
    border-top: 1px solid #ddd; /* Add your preferred color */
    margin: 20px 0; /* Add margin as needed */
}

/* Blog Tags Styles */
.blog-detail-tags {
    margin-bottom: 20px; /* Add margin as needed */
}

.blog-tags {
    display: inline-block; /* Align tags horizontally */
}

.blog-tag {
    background-color: #3498db; /* Add your preferred color */
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    margin-right: 10px; /* Add margin as needed */
    text-decoration: none; /* Remove underline */
}

.blog-tag a {
    color: #fff; /* Set tag link color */
    text-decoration: none; /* Remove underline */
}

.blog-tag a:hover {
    text-decoration: underline; /* Add underline on hover */
}

 */