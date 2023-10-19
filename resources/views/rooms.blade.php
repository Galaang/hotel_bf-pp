@extends('layout')
@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bf-1.png')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs mb-2">
                        <span class="mr-2"><a href="index.html">Home <i class="fa fa-chevron-right"></i></a></span>
                        <span>Rooms <i class="fa fa-chevron-right"></i></span>
                    </p>
                    <h1 class="mb-0 bread">Rooms</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light ftco-no-pt ftco-no-pb mt-2">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters">
                @foreach ($rooms as $r)
                    <div class="col-lg-6">
                        <div class="room-wrap d-md-flex">
                            <a href="{{ route('detail', $r->id) }}" class="img order-md-last" style="background-image: url(images/R3.png)"></a>
                            <div class="half right-arrow d-flex align-items-center">
                                <div class="text p-4 p-xl-5 text-center">
                                    <p class="star mb-0">
                                        <span class="fa fa-star"></span><span class="fa fa-star"></span><span
                                            class="fa fa-star"></span><span class="fa fa-star"></span><span
                                            class="fa fa-star"></span>
                                    </p>
                                    <p class="mb-0">
                                        <span class="price mr-1">{{ $r->harga }}</span>
                                        <span class="per">per malam</span>
                                    </p>
                                    <h3 class="mb-3"><a href="{{ route('detail', $r->id) }}">{{ $r->kamar }}</a></h3>
                                    <ul class="list-accomodation">
                                        {{ $r->fasilitas }}
                                    </ul>
                                    <a href="{{ route('booking', $r->id) }}" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#disablebackdrop">
                                        Booking Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">
                        <a href="#" class="logo">Vacation Rental</a>
                    </h2>
                    <p>
                        A small river named Duden flows by their place and supplies it
                        with the necessary regelialia.
                    </p>
                    <a href="#">Read more
                        <span class="fa fa-chevron-right" style="font-size: 11px"></span></a>
                </div>
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Services</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-1 d-block">Map Direction</a></li>
                        <li>
                            <a href="#" class="py-1 d-block">Accomodation Services</a>
                        </li>
                        <li><a href="#" class="py-1 d-block">Great Experience</a></li>
                        <li>
                            <a href="#" class="py-1 d-block">Perfect central location</a>
                        </li>
                    </ul>
                </div>
                <!-- <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Tag cloud</h2>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">apartment</a>
                  <a href="#" class="tag-cloud-link">home</a>
                  <a href="#" class="tag-cloud-link">vacation</a>
                  <a href="#" class="tag-cloud-link">rental</a>
                  <a href="#" class="tag-cloud-link">rent</a>
                  <a href="#" class="tag-cloud-link">house</a>
                  <a href="#" class="tag-cloud-link">place</a>
                  <a href="#" class="tag-cloud-link">drinks</a>
                </div>
              </div> -->
                <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                    <h2 class="footer-heading">Subcribe</h2>
                    <form action="#" class="subscribe-form">
                        <div class="form-group d-flex">
                            <input type="text" class="form-control rounded-left" placeholder="Enter email address" />
                            <button type="submit" class="form-control submit rounded-right">
                                <span class="sr-only">Submit</span><i class="fa fa-paper-plane"></i>
                            </button>
                        </div>
                    </form>
                    <h2 class="footer-heading mt-5">Follow us</h2>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span
                                    class="fa fa-twitter"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span
                                    class="fa fa-facebook"></span></a>
                        </li>
                        <li class="ftco-animate">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span
                                    class="fa fa-instagram"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="w-100 mt-5 border-top py-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-8">
                        <p class="copyright mb-0">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                            All rights reserved | This template is made with
                            <i class="fa fa-heart" aria-hidden="true"></i> by
                            <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4 text-md-right">
                        <p class="mb-0 list-unstyled">
                            <a class="mr-md-3" href="#">Terms</a>
                            <a class="mr-md-3" href="#">Privacy</a>
                            <a class="mr-md-3" href="#">Compliances</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
