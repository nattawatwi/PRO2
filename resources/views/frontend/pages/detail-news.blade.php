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
                    <p style="text-indent: 5%">โดย บริษัท โทรคมนาคมแห่งชาติ จำกัด (มหาชน) หรือ NT ได้รับความไว้วางใจจาก โทรทัศน์รวมการเฉพาะกิจแห่งประเทศไทย ให้เป็นผู้ดำเนินการเชื่อมโยงสัญญาณถ่ายทอดสดจากเมืองหางโจว ประเทศจีน ผ่านดาวเทียม AsiaSat 5 มายังสถานีดาวเทียมนนทบุรี เพื่อส่งต่อไปศูนย์ถ่ายทอดสดและรายงานข่าวการแข่งขันกีฬาและกิจกรรมที่สำคัญของประเทศไทย (สำนักงาน กสทช. ภาค 1) จากนั้นส่งสัญญาณผ่านโครงข่ายไฟเบอร์ออปติก ไปยังสถานีโทรทัศน์ช่องต่าง ๆ ทั้ง 11 ช่อง อาทิ ช่อง ThaiPBS, ช่อง NBT2HD, ช่อง TV5HD, ช่อง T Sports 7, ช่อง 7HD, ช่อง MCOT30HD, ช่อง PPTV36HD, ช่อง Workpoint, ช่อง True4U, ช่อง GMM25 และช่อง JKN18</p>
                    <p style="text-indent: 5%">NT เชื่อมโยงสัญญาณถ่ายทอดสดเอเชียนเกมส์ ครั้งที่ 19 จากเมืองหางโจว ประเทศจีน เชิญชวนแฟน ๆ กีฬาชาวไทยรับชมการแข่งขันกีฬาเอเชียนเกมส์ ครั้งที่ 19 ระหว่างวันที่ 23 กันยายน จนถึง 8 ตุลาคม 2566 โดย บริษัท โทรคมนาคมแห่งชาติ จำกัด (มหาชน) หรือ NT ได้รับความไว้วางใจจาก โทรทัศน์รวมการเฉพาะกิจแห่งประเทศไทย ให้เป็นผู้ดำเนินการเชื่อมโยงสัญญาณถ่ายทอดสดจากเมืองหางโจว ประเทศจีน ผ่านดาวเทียม AsiaSat 5 มายังสถานีดาวเทียมนนทบุรี เพื่อส่งต่อไปศูนย์ถ่ายทอดสดและรายงานข่าวการแข่งขันกีฬาและกิจกรรมที่สำคัญของประเทศไทย (สำนักงาน กสทช. ภาค 1) จากนั้นส่งสัญญาณผ่านโครงข่ายไฟเบอร์ออปติก ไปยังสถานีโทรทัศน์ช่องต่าง ๆ ทั้ง 11 ช่อง อาทิ ช่อง ThaiPBS, ช่อง NBT2HD, ช่อง TV5HD, ช่อง T Sports 7, ช่อง 7HD, ช่อง MCOT30HD, ช่อง PPTV36HD, ช่อง Workpoint, ช่อง True4U, ช่อง GMM25 และช่อง JKN18</p>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End-Promotion Section --> 
    <section class="page-section section-author  mt-4 mb-4">
        <div class="container">
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

