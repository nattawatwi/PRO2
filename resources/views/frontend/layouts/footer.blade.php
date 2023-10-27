<!-- Start Footer Area -->
<footer class="footer">
		<!-- Footer Top -->
		<!-- Footer Start -->
		<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>NT NongKhai</h1>
                        </a>
                        <p class="mt-3 mb-4">ระบบบริหารจัดการลูกค้าสัมพันธ์นี้ มีวัตถุประสงค์ในการให้บริการลูกค้าของทาง NT หนองคายในรูปแบบการใช้งานออนไลน์ เพื่อสะดวกต่อการเดินทาง การติดต่อกับทางศูนย์การขายและศูนย์วิศวกรรมบริการ</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">ข้อมูลติดต่อ</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">1187 ม.2 ต.ในเมือง อ.เมืองหนองคาย จ.หนองคาย 43000</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">sale&engineer@nt.co.th</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">042-411500</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">ลิงค์ด่วน</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a href="/" class="text-light mb-2 {{ Request::is('/') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>หน้าแรก
                                </a>
                                <a href="{{ url('pages/customer') }}" class="text-light mb-2 {{ Request::is('pages/customer') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ลูกค้า
                                </a>
                                <a href="{{ url('pages/news') }}" class="text-light mb-2 {{ Request::is('pages/news') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ข่าวสาร
                                </a>
                                <a href="{{ url('pages/trend') }}" class="text-light mb-2 {{ Request::is('pages/trend') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ข่าวเทรนด์
                                </a>
                                <a href="{{ url('pages/promotion') }}" class="text-light mb-2 {{ Request::is('pages/promotion') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>โปรโมชัน
                                </a>
                                <a href="{{ url('pages/service') }}" class="text-light mb-2 {{ Request::is('pages/service') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>บริการ
                                </a>
                                <a href="{{ url('pages/contact') }}" class="text-light {{ Request::is('pages/contact') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ติดต่อ
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">ลิงค์ยอดนิยม</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a href="{{ url('pages/customer') }}" class="text-light mb-2 {{ Request::is('pages/customer') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ลูกค้า
                                </a>
                                <a href="{{ url('pages/trend') }}" class="text-light mb-2 {{ Request::is('pages/trend') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ข่าวเทรนด์
                                </a>
                                <a href="{{ url('pages/promotion') }}" class="text-light mb-2 {{ Request::is('pages/promotion') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>โปรโมชัน
                                </a>
                                <a href="{{ url('pages/contact') }}" class="text-light {{ Request::is('pages/contact') ? 'active' : '' }}">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ติดต่อ
                                </a>
                            </div>
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">ศูนย์ให้บริการ</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a href="https://www.ntplc.co.th/servicecenter" class="text-light mb-2 ">
                                    <i class="bi bi-arrow-right text-primary me-2"></i>ศูนย์บริการ
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->
	</footer>
	<!-- /End Footer Area -->
 
	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="frontend/lib/wow/wow.min.js"></script>
    <script src="frontend/lib/easing/easing.min.js"></script>
    <script src="frontend/lib/waypoints/waypoints.min.js"></script>
    <script src="frontend/lib/counterup/counterup.min.js"></script>
    <script src="frontend/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    <script src="{{ asset('frontend/js/nav.js') }}"></script>

	