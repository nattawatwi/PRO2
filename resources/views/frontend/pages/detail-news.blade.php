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

    <!-- Promotion Section -->
    <div class="section-indicator-line"></div>
    <div class="section-indicator no-overlap filled-red">

    </div>
    <section class="page-section section-right mt-0">
        <div class="section-content">
            <div>
                <div class="container">
                    <a href="/pages/news" class="back-button"><i class="bi bi-chevron-left"></i><span>ย้อนกลับ</span></a>
                    <p>&nbsp;</p>
                    <div style="text-align: justify">
                    <p style="text-indent: 5%"><b></b><img src="{{ asset('uploads/' . $news->Nw_image) }}" style="width: 65%; display: block; margin-left: auto; margin-right: auto" alt="{{ $news->Nw_title }}"></p>
                    <p style="text-indent: 5%"><b>&nbsp;</b></p>
                    <h1 class="carousel-title">
                        {{ $news->Nw_title }}
                    </h1>
                    <small class="news-detail-date">เผยแพร่ | {{ $news->Nw_date }}</small>
                    <p>&nbsp;</p>
                    <p style="text-indent: 5%"><b>{{ $news->Nw_content }}&nbsp; &nbsp;</b></p>
                    <p style="text-indent: 5%">&nbsp;</p>
                    <!-- Add Back Button -->
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Promotion Section --> 
    <section class="page-section section-author  mt-4 mb-4">
        <div class="container">
                <a href="/pages/news">กลับไปยังหน้าข่าวสาร</a>
                <div class="author">      
                    ผู้เขียน : <img class="author-avatar" src="https://www.ntplc.co.th/images/default-source/banners/nt.jpeg?Status=Master&amp;sfvrsn=a7991732_3"> <span class="author-name">NT</span>
                </div>
                <hr>
                        <div class="blog-detail-tags">
                        ห้วข้อที่เกี่ยวข้อง : 
                        <div class="blog-tags">
                            <div class="blog-tag"><a href="/search?indexCatalogue=site-search&amp;searchQuery=NT">{{ $news->CTID }}</a></div>
                        </div>            
                </div>
        </div>
    </section>

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

</body>

</html>
@endsection
