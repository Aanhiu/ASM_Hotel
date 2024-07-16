@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-sm-12">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                  <div class="carousel-item active">
                    <img src="https://img.pikbest.com/backgrounds/20210920/booking-luxury-hotel-banner-background-eps_6126596.jpg!bw700" class="d-block w-100" alt="...">
                  </div>

                  <div class="carousel-item">
                    <img src="https://www.ali.com.vn/hoanghung/UploadFile/images/mau-website-khach-san-dep-1.png" class="d-block w-100" alt="...">
                  </div>
                  
                  {{-- <div class="carousel-item">
                    <img src="https://watermark.lovepik.com/photo/20211209/large/lovepik-image-of-professional-service-staff-in-luxury-picture_501704736.jpg" class="d-block w-75" alt="...">
                  </div> --}}
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
        </div>

        <div class="col-sm-12">
            <h3 class="d-flex justify-content-center">Phòng khách sạn</h3>
            
        </div>
    </div>
@endsection