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
    <div id="Contentplaceholder_C004_Col00" class="sf_colsIn" data-sf-element="ListHeadTextContainer" data-placeholder-label="ListHeadTextContainer">
        <h1 class="promotion-heading">โปรโมชั่นพิเศษเพื่อคุณ<span>Special Promotion for you</span></h1>
    </div><br>

    <div class="row g-3">
        @foreach ($promotions as $promotion)
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                <div class="card promotion-card" style="--clr: #009688;">
                    <div class="img-box">
                        <img src="{{ asset('uploads/' . $promotion->Pm_Image) }}">
                    </div>
                    <div class="content">
                        <h2>{{ $promotion->Pm_name }}</h2>
                        <p>{{ $promotion->Pm_detail }}</p>
                        <a href="{{ route('detail-promotion', ['id' => $promotion->PromotionID]) }}">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
        var promotionCards = document.querySelectorAll(".promotion-card");

        promotionCards.forEach(function (card) {
            var content = card.querySelector(".content p");
            var maxLength = 70; // ปรับความยาวที่ต้องการแสดง

            if (content.textContent.length > maxLength) {
                var shortenedText = content.textContent.substring(0, maxLength) + "...";
                content.textContent = shortenedText;
            }
        });
    });
    </script>

    </section>



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>  
</body>

</html>
@endsection
