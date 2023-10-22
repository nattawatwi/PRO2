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

    <section class="promotion-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($promotions as $promotion)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('uploads/' . $promotion->Pm_Image) }}" class="card-img-top" alt="{{ $promotion->Pm_name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $promotion->Pm_name }}</h5>
                            <p class="card-text">{{ $promotion->Pm_detail }}</p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('detail-promotion', ['id' => $promotion->PromotionID]) }}">ดูรายละเอียด</a>
                        </div>
                        <div class="card-footer">
                            <small class="text-body-secondary">{{ $promotion->created_at }}</small>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </section>

    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Template Javascript -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
</body>

</html>
@endsection
