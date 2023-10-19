@extends('layout')
@section('content')
    <section class="hero-wrap hero-wrap-2">
        <div class='slide'>
            <input type='radio' name='radio-set' checked='checked' />
            <img src='{{ asset('images/FS-1.png') }}' />

            <input type='radio' name='radio-set' />
            <img src='{{ asset('images/FS-2.png') }}' />

            <input type='radio' name='radio-set' />
            <img src='{{ asset('images/FS-3.png') }}' />

            <input type='radio' name='radio-set' />
            <img src='{{ asset('images/image_4.jpg') }}' />
        </div>
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center"></div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light align-items-center ftco-no-pt center">
        <div class="container">
            <div class="heading-section text-left justify-content-center ftco-animate">
                <p>
                <h1>Dulaxe Room</h1>
                </p>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-workout"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Rooms Size : 16 M</h3>
                    </div>
                </div>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-workout"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Hot Showers</h3>
                    </div>
                </div>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-first"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Air Conditioning</h3>
                    </div>
                </div>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-first"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Free Wifi</h3>
                    </div>
                </div>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-first"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">No Smokeing</h3>
                    </div>
                </div>
                <div class="services-2 col-md-10 d-flex w-100 ftco-animate">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="flaticon-first"></span>
                    </div>
                    <div class="media-body pl-3">
                        <h3 class="heading">Shower</h3>
                    </div>
                </div>
                <div class="services-2 text-right">
                    <p>
                    <h1> Rp.100.000</h1>
                    <h7>Permalam/pernight</h7>
                    </p>
                    <p><a href="{{ route('booking', $id) }}" class="btn btn-primary">Pilih</a></p>
                </div>
            </div>

        </div>
        </div>
    </section>
@endsection
