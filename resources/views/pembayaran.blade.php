@extends('layout')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bf.png') }}')" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">

        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-4">
                    <form action="{{ route('booking-kamar') }}" method="POST" class="appointment-form">
                        @csrf
                        <h3 class="mb-3">Selesaikan Pembayaran</h3>
                        {{-- <input type="hidden" name="id" value="{{ $id }}"> --}}
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="number" class="form-control" name="no_identitas" placeholder="NIK" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="alamat" placeholder="Alamat" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon">
                                            <span class="ion-md-calendar"></span>
                                        </div>
                                        <input type="text" class="form-control appointment_date-check-in" name="tanggal_booking" placeholder="Check-In" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon">
                                            <span class="ion-md-calendar"></span>
                                        </div>
                                        <input type="text" class="form-control appointment_date-check-out" name="tanggal_cekout" placeholder="Check-Out" autocomplete="off" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" class="form-control" placeholder="Phone number" name="nohp" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <div class="input-wrap">
                                        <div class="icon">
                                            <span class="ion-ios-clock"></span>
                                        </div>
                                        <input type="time" class="form-control" placeholder="Time" name="waktu_booking" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="form-field">
                                        <div class="select-wrap">
                                            <div class="icon">
                                                <span class="fa fa-chevron-down"></span>
                                            </div>
                                            <select id="" class="form-control" name="jenis_pembayaran">
                                                <option value="" selected disabled>Jenis Pembayaran</option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Non-Tunai">Non-Tunai</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Booking Now!" class="btn btn-primary py-3 px-4" />
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
