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


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h5 class="fw-bold text-primary text-uppercase">Contact Us</h5>
                <h2 class="mb-0">หากคุณมีข้อสงสัยใด ๆ โปรดติดต่อเรา</h2>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">เบอร์โทร</h5>
                            <h4 class="text-primary mb-0">042-411500</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">อีเมล์</h5>
                            <h4 class="text-primary mb-0">sale&engineer@nt.co.th</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">ที่อยู่</h5>
                            <h6 class="text-primary mb-0">1187 ม.2 ต.ในเมือง อ.เมือง จ.หนองคาย</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.3s">
                    <form method="POST" action="/contact">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <input type="text" name="Ct_username" class="form-control border-0 bg-light px-4" placeholder="ชื่อ-นามสกุล" style="height: 55px">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="Ct_email" class="form-control border-0 bg-light px-4" placeholder="อีเมล์" style="height: 55px">
                            </div>
                            <div class="col-12">
                                <input type="text" name="Ct_title" class="form-control border-0 bg-light px-4" placeholder="หัวข้อ" style="height: 55px">
                            </div>
                            <div class="col-12">
                                <textarea name="Ct_detail" class="form-control border-0 bg-light px-4 py-3" rows="4" placeholder="ข้อความ"></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">ส่งข้อความ</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Maps Start -->
                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <div id="map" style="height: 400px; border-radius: 10px; margin-top: 20px;"></div>
                </div>
                <!-- Maps End -->
            </div>
        </div>
    </div>
    <!-- Contact End -->

    
    <!-- Add this to the head section of your Blade file -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgvAxV1oTM6A53Uy8NIBp-euQNo-GzwOU&callback=initMap" async defer></script>

    <!-- Add this just before </body> tag -->
    <script>
        function initMap() {
            // Specify the coordinates for your map
            var myLatLng = {lat: 17.87700446513725, lng: 102.73855200847159}; // Example coordinates

            // Create a map object and specify the DOM element for display
            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 15 // Adjust the zoom level as needed
            });

            // Add a marker to the map
            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Your Location'
            });
        }
    </script>

</body>
</html>
@endsection
