<head>
    <meta charset="utf-8">
    <title>NT NongKhai</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
</head>

<header class="header shop">
    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>1187 ม.2 ต.ในเมือง อ.เมืองหนองคาย จ.หนองคาย 43000</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>042-411 500</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>sale&engineer@nt.co.th</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Carousel Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="{{ url('/') }}" class="navbar-brand p-0">
                <h1 class="m-0">
                    <img src="\uploads\images\02_NT-Logo.png" alt="NT NongKhai">
                        NT NongKhai
                    </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">หน้าแรก</a>
                    <a href="{{ url('pages/customer') }}" class="nav-item nav-link {{ Request::is('pages/customer') || Request::is('pages/search-person*') || Request::is('pages/detail-person*') || Request::is('pages/search-organization*') || Request::is('pages/detail-organization*')? 'active' : '' }}">ลูกค้า</a>
                    <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle {{ Request::is('pages/news*') || Request::is('pages/trend*') ? 'active' : '' }}" data-bs-toggle="dropdown">ข่าวสาร</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('pages/news') }}" class="dropdown-item {{ Request::is('pages/news') ? 'active' : '' }}">ข่าวสารอัปเดต</a>
                            <a href="{{ url('pages/trend') }}" class="dropdown-item {{ Request::is('pages/trend') ? 'active' : '' }}">เทรนด์ดิจิทัล</a>
                        </div>
                    </div>
                        <a href="{{ url('pages/promotion') }}" class="nav-item nav-link {{ Request::is('pages/promotion') ? 'active' : '' }}">โปรโมชั่น</a>
                        <a href="{{ url('pages/service') }}" class="nav-item nav-link {{ Request::is('pages/service') ? 'active' : '' }}">บริการ</a>
                        <a href="{{ url('pages/contact') }}" class="nav-item nav-link {{ Request::is('pages/contact') ? 'active' : '' }}">ติดต่อ</a>
                    </div>
                <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            </div>
        </nav>
                
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                    @if(Request::is('/'))
                    <div class="carousel-item active">
                        <!-- เนื้อหาของ Carousel Item ที่จะแสดงบนหน้า Home -->
<<<<<<< Updated upstream
                        <img class="auto" src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t39.30808-6/373562390_795598002566808_7246747085225416543_n.jpg?stp=dst-jpg_p180x540&_nc_cat=103&ccb=1-7&_nc_sid=783fdb&_nc_eui2=AeGeVDaZYo64Tczs5N3h5Zt1DY6285nn_bQNjrbzmef9tKWziLBFrVjq0x04fSBTadjguIMvrapYIzYHo8wBm1Ts&_nc_ohc=UB6t2or98qYAX8DxpXR&_nc_ht=scontent.fkkc2-1.fna&oh=00_AfAwzAZWGeCidclDllhgTxM4wke1QZzSoYF8fy8hJvxvqw&oe=657456CA" alt="Image" width="1680" height="600">
=======
                        <img class="auto" src="https://scontent.fbkk5-4.fna.fbcdn.net/v/t39.30808-6/373562390_795598002566808_7246747085225416543_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=9534ce&_nc_eui2=AeGeVDaZYo64Tczs5N3h5Zt1DY6285nn_bQNjrbzmef9tKWziLBFrVjq0x04fSBTadjguIMvrapYIzYHo8wBm1Ts&_nc_ohc=tYj3MvdDHUEAX8197Zb&_nc_ht=scontent.fbkk5-4.fna&oh=00_AfBeUEukL_xbaFCqC0QCgErXOya99Bzy1erb01yBuSIH0Q&oe=65881D4A" alt="Image" width="1680" height="600">
>>>>>>> Stashed changes
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome ยินดีต้อนรับ</h5>
                                <h1 class="display-5 text-white text-uppercase mb-3 animated zoomIn">NT หนองคาย</h1>
                                <a href="https://www.ntplc.co.th/servicecenter" class="btn btn-primary2 py-md-3 px-md-5 me-3 animated slideInLeft">ตรวจสอบศูนย์ให้บริการ</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- เนื้อหาของ Carousel Item ที่จะแสดงบนหน้า Home -->
                        <img class="auto" src="https://scontent.fkkc2-1.fna.fbcdn.net/v/t1.6435-9/194238350_277562860774729_1193704142719738603_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=300f58&_nc_eui2=AeEl4c3kLJMORXYPfPrCvHeBHpg8bXrxxYEemDxtevHFgf6M-0YrrPQmvAPL9sBFHBXtrMg9IUWeEKS-VmtuSr4Q&_nc_ohc=-hP6aB4_kKUAX_XEL9p&_nc_ht=scontent.fkkc2-1.fna&oh=00_AfDNo6KvAhO_nGOIGsuQRi85HD4wmSn9gigXc6A0A-Ge-Q&oe=6596A539" alt="Image" width="1680" height="600">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome ยินดีต้อนรับ</h5>
                                <h5 class="display-5 text-white text-uppercase mb-3 animated zoomIn">NT หนองคาย</h5>
                                <a href="https://www.ntplc.co.th/servicecenter" class="btn btn-primary2 py-md-3 px-md-5 me-3 animated slideInLeft">ตรวจสอบศูนย์ให้บริการ</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!-- เนื้อหาของ Carousel Item ที่จะแสดงบนหน้า Home -->
<<<<<<< Updated upstream
                        <img class="auto" src="https://www.theeleader.com/wp-content/uploads/2021/07/NT-NBTC-DES.png" alt="Image" width="1680" height="600">
=======
                        <img class="auto" src="https://scontent.fbkk5-3.fna.fbcdn.net/v/t39.30808-6/409773125_867098575416750_9030726866313821675_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=783fdb&_nc_eui2=AeE5QcC_kt1ppe2YNACcUJ1ey7ruJYTcDa_Luu4lhNwNr6p8zlfN1fdCCCMuS0bcb9UwCo0_kJLInNsJwwj5PWyF&_nc_ohc=D9jnYtxZGxoAX_RYUxH&_nc_ht=scontent.fbkk5-3.fna&oh=00_AfANVXQxpHe2PaUf-I86oGP7JaL7yU4KBqiaQNr01mH_-w&oe=658668DD" alt="Image" width="1680" height="600">
>>>>>>> Stashed changes
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px;">
                                <h5 class="text-white text-uppercase mb-3 animated slideInDown">Welcome ยินดีต้อนรับ</h5>
                                <h5 class="display-5 text-white text-uppercase mb-3 animated zoomIn">NT หนองคาย</h5>
                                <a href="https://www.ntplc.co.th/servicecenter" class="btn btn-primary2 py-md-3 px-md-5 me-3 animated slideInLeft">ตรวจสอบศูนย์ให้บริการ</a>
                            </div>
                        </div>
                    </div>
                        <div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    @elseif(Request::is('pages/about'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">About</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">About</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/customer'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Customer</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Customer</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/login'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Customer</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Login</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/search-person'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Person</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Search</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/detail-person'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Person</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Search</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/search-organization'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Organization</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Search</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/detail-organization'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Customer -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Organization</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Search</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/news'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า News -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">News</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">News</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/news/news-detail/*'))
                    @php
                        $id = last(request()->segments());
                    @endphp
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า News -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">News</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Details</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/trend'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า News-trend -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">trend</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">trend</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/trend/trend-detail/*'))
                    @php
                        $id = last(request()->segments());
                    @endphp
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า News-trend -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">trend</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Detail</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/promotion'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Promotion -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Promotion</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Promotion</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/promotion/detail-promotion/*'))
                    @php
                        $id = last(request()->segments());
                    @endphp
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Promotion -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Promotion</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Promotion</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/service'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Service -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Service</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Service</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/service/service-detail/*'))
                    @php
                        $id = last(request()->segments());
                    @endphp
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้า Service -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Service</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Service</a>
                            </div>
                        </div>
                    </div>
                    @elseif(Request::is('pages/contact'))
                    <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้าอื่น ๆ -->
                        <div class="row py-5">
                            <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                                <h1 class="display-4 text-white animated zoomIn">Contact</h1>
                                <a href="" class="h5 text-white">Home</a>
                                <i class="far fa-circle text-white px-2"></i>
                                <a href="" class="h5 text-white">Contact</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container-fluid bg-primary py-5">
                        <!-- เนื้อหาของ Container ที่จะแสดงบนหน้าอื่น ๆ -->
                    </div>
                @endif
            </div>
        </div>
    </div>
</header>



