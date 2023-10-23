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
                    <div class="card-header">Search Organization by OgnID</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('searchOrganization') }}">
                            @csrf

                            <div class="form-group">
                                <label for="OgnID">Organization ID</label>
                                <input type="text" name="OgnID" class="form-control" required>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Search</button>
                        </form>

                        @if (isset($organization))
                            <div class="mt-4">
                                <strong>Organization Name:</strong> {{ $organization->Ogn_name }}
                                <br>
                                <strong>Type:</strong> {{ $organization->type }}
                                <br>
                                <strong>Email:</strong> {{ $organization->Ong_email }}
                                <br>
                                <strong>Phone:</strong> {{ $organization->Ong_phone }}
                                <br>
                                <strong>Adress:</strong> {{ $organization->Ong_address }}
                                <br>
                                <strong>Service:</strong> {{ $organization->ServiceID }}
                                <br>
                                <strong>Promotion:</strong> {{ $organization->PromotionID }}
                                <br>
                                <strong>Map:</strong> {{ $organization->MapURL }}

                                <!-- Maps Start -->
                                <div class="col-lg-6 wow slideInUp" data-wow-delay="0.6s">
                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <div id="map" style="height: 400px; border-radius: 10px; margin-top: 20px;"></div>
                                </div>
                                <!-- Maps End -->
                                
                                <!-- Display other organization information as needed -->
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
