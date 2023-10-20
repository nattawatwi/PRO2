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
</body>
</html>
@endsection
