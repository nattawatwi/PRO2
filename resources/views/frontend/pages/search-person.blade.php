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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Search Person by PersonID</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('searchPerson') }}">
                            @csrf

                            <div class="form-group">
                                <label for="PersonID">Person ID</label>
                                <input type="text" name="PersonID" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>

                        @if (isset($person))
                            <div class="mt-4">
                                <strong>Person ID:</strong> {{ $person->PersonID }}
                                <br>
                                <strong>Person Name:</strong> {{ $person->Ps_name }}
                                <br>
                                <strong>Type:</strong> {{ $person->type }}
                                <br>
                                <strong>Email:</strong> {{ $person->Ps_email }}
                                <br>
                                <strong>Adress:</strong> {{ $person->Ps_address }}
                                <br>
                                <strong>Service Center:</strong> {{ $person->ServiceCenterID }}
                                <br>
                                <strong>Promotion:</strong> {{ $person->PromotionID }}
                                <br>
                                <strong>latitude:</strong> {{ $person->lat }}
                                <br>
                                <strong>longitude:</strong> {{ $person->lng }}

                                 <!-- Maps Start -->
                                 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <div id="map" style="height: 500px;  border-radius: 10px; margin-top: 20px;"></div>
                                <!-- Maps End -->
                                
                            </div>
                        @endif

                        @if (isset($error))
                            <div class="mt-4 text-danger">
                                {{ $error }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>
    
    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <!-- Add this to the head section of your Blade file -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCgvAxV1oTM6A53Uy8NIBp-euQNo-GzwOU&callback=initMap" async defer></script>

    <!-- Add this just before </body> tag -->
    @if (isset($person))
        <script>
            function initMap() {
                // ดึงค่า lat และ lng จากข้อมูล Laravel และสร้างตำแหน่ง
                var lat = {{ $person->lat }};
                var lng = {{ $person->lng }};
                var myLatLng = {lat: lat, lng: lng};

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

            // Call the initMap function after a short delay
            setTimeout(initMap, 1000); // You can adjust the delay as needed
        </script>
    @endif

</body>
</html>
@endsection
