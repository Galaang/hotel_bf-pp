@extends('layout')
@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bf.png') }}')"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
                data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <h1 class="subheading">Welcome,</h1>
                    <h1 class="mb-4">Booking an Rooms For Your Vaction!</h1>
                    <p>
                        {{-- <a href="#" class="btn btn-primary">Learn more</a>
                        <a href="#" class="btn btn-white">Contact us</a> --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <section class="ftco-section ftco-book ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row justify-content-center">
                        <div class="col-md-6 text-center mb-5">
                            <h2 class="heading-section">Your Booking List</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-wrap">
                                <table class="table">
                                    <thead class="bg-primary text-white">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama</th>
                                            <th>NIK</th>
                                            <th>Alamat</th>
                                            <th>No Telepon</th>
                                            <th>Tanggal Booking</th>
                                            <th>Tanggal Cekout</th>
                                            <th>Total Harga Sewa</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reservasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->nama }}</td>
                                                <td>{{ $item->no_identitas }}</td>
                                                <td>{{ $item->alamat }}</td>
                                                <td>{{ $item->nohp }}</td>
                                                <td>{{ $item->tanggal_booking }}</td>
                                                <td>{{ $item->tanggal_cekout }}</td>
                                                <td>{{ $item->harga_sewa }}</td>
                                                <td>{{ $item->status }}</td>
                                                <td width="40">
                                                    {{-- <a href="{{ route('booking.edit', $item->id) }}"
                                                        class="btn btn-warning">Edit</a> --}}


                                                    @if ($item->status == 'Belum Bayar')
                                                        <form action="{{ route('booking.destroy', $item->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Batalkan Booking?')">Batalkan</button>
                                                        </form>
                                                        <button type="button" class="btn btn-success btn-sm"
                                                            data-toggle="modal" data-target="#exampleModal">
                                                            Bayar
                                                        </button>
                                                    @elseif($item->status == 'Menunggu Konfirmasi')
                                                        <form action="{{ route('booking.destroy', $item->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm"
                                                                onclick="return confirm('Batalkan Booking?')">Batalkan</button>
                                                        </form>
                                                    @elseif($item->status == 'Sudah Bayar')
                                                        <form action="{{ route('booking.destroy', $item->id) }}"
                                                            method="POST" style="display: inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm mt-1"
                                                                onclick="return confirm('Batalkan Booking?')">Batalkan</button>
                                                        </form>
                                                        <button type="button" class="btn btn-success btn-sm mr-1 mt-1"
                                                            data-toggle="modal" data-target="#exampleModal2">
                                                            Extend
                                                        </button>
                                                        <button type="button" class="btn btn-success btn-sm mr-1 mt-1"
                                                            data-toggle="modal" data-target="#exampleModal3">
                                                            E-Tiket
                                                        </button>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Bayar</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('booking.bayar', $item->id) }}"
                                                                enctype="multipart/form-data" id="bayar" method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12"
                                                                                            style="margin-top: 1rem">
                                                                                            <span>Dipesan</span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-building"
                                                                                                style="font-size: 2rem; margin-top: 1.5rem"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                <h4 style="color: white;">
                                                                                                    Hotel Bintang Flores
                                                                                                </h4>
                                                                                            </span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_booking)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-Out&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_cekout)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <br>
                                                                                            <span>1 {{ $item->tipe_kamar }}
                                                                                                ROOM</span><br>
                                                                                            <span>{{ $item->jumlah_kasur }}
                                                                                                BED</span><br>
                                                                                            <span>{{ $item->fasilitas }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12">
                                                                                            <span>&nbsp;&nbsp;<h5
                                                                                                    style="color: white;">
                                                                                                    Detail Tamu</h5></span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-user"
                                                                                                style="font-size: 2rem;"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>{{ $item->nama }}</span><br>
                                                                                            <span><small>{{ $item->no_identitas }}</small></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.6rem; padding-top: 0.6rem;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <span>&nbsp;&nbsp;Status</span>
                                                                                        </div>
                                                                                        <div class="col-md-6 text-right">
                                                                                            <span>{{ $item->status }}&nbsp;&nbsp;&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class="pt-2 pb-2">
                                                                                    <div class="row"
                                                                                        style="text-align: center">
                                                                                        <div class="col-md-12">
                                                                                            <label for="">Bukti
                                                                                                Pembayaran</label>
                                                                                            <input type="file"
                                                                                                class="form-control"
                                                                                                name="bukti_pembayaran"
                                                                                                required
                                                                                                accept=".jpg,.jpeg,.png">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="button"
                                                                onclick="document.getElementById('bayar').submit()"
                                                                class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal Extend-->
                                            <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="text-align: center">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">Extend
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('booking.extend-hari', $item->id) }}"
                                                                enctype="multipart/form-data" id="extend"
                                                                method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12"
                                                                                            style="margin-top: 1rem">
                                                                                            <span>Dipesan</span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-building"
                                                                                                style="font-size: 2rem; margin-top: 1.5rem"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                <h4 style="color: white;">
                                                                                                    Hotel Bintang Flores
                                                                                                </h4>
                                                                                            </span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_booking)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-Out&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_cekout)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <br>
                                                                                            <span>1 {{ $item->tipe_kamar }}
                                                                                                ROOM</span><br>
                                                                                            <span>{{ $item->jumlah_kasur }}
                                                                                                BED</span><br>
                                                                                            <span>{{ $item->fasilitas }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12">
                                                                                            <span>&nbsp;&nbsp;<h5
                                                                                                    style="color: white;">
                                                                                                    Detail Tamu</h5></span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-user"
                                                                                                style="font-size: 2rem;"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>{{ $item->nama }}</span><br>
                                                                                            <span><small>{{ $item->no_identitas }}</small></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.6rem; padding-top: 0.6rem;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <span>&nbsp;&nbsp;Tanggal Awal
                                                                                                Menginap</span>
                                                                                        </div>
                                                                                        <div class="col-md-6 text-right">
                                                                                            <span>{{ \Carbon\Carbon::parse($item->tanggal_booking)->format('d') }}
                                                                                                -
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_cekout)->locale('id')->translatedFormat('d F Y') }}&nbsp;&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class="pt-2 pb-2"
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px;">
                                                                                    <div class="row"
                                                                                        style="text-align: center">
                                                                                        <div class="col-md-12">
                                                                                            <span>Tambah Hari
                                                                                                Menginap</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class="icon">
                                                                                    <span class="ion-md-calendar"></span>
                                                                                </div>
                                                                                <input type="text" class="form-control"
                                                                                    name="tanggal_booking"
                                                                                    placeholder="Check-In"
                                                                                    value="{{ \Carbon\Carbon::parse($item->tanggal_booking)->addDays(1)->format('m/d/Y') }}"
                                                                                    autocomplete="off" readonly />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class="icon">
                                                                                    <span class="ion-md-calendar"></span>
                                                                                </div>
                                                                                <input type="text"
                                                                                    class="form-control appointment_date-check-out"
                                                                                    name="tanggal_cekout"
                                                                                    placeholder="Check-Out"
                                                                                    value="{{ \Carbon\Carbon::parse($item->tanggal_cekout)->addDays(1)->format('m/d/Y') }}"
                                                                                    autocomplete="off" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Batal</button>
                                                            <button type="button"
                                                                onclick="document.getElementById('extend').submit()"
                                                                class="btn btn-primary">Simpan</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Modal E-tiket-->
                                            <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header" style="text-align: center">
                                                            <h5 class="modal-title" id="exampleModalCenterTitle">E-Tiket
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('booking.extend-hari', $item->id) }}"
                                                                enctype="multipart/form-data" id="extend"
                                                                method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12"
                                                                                            style="margin-top: 1rem">
                                                                                            <span>Dipesan</span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-building"
                                                                                                style="font-size: 2rem; margin-top: 1.5rem"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                <h4 style="color: white;">
                                                                                                    Hotel Bintang Flores
                                                                                                </h4>
                                                                                            </span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-in&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_booking)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <span
                                                                                                style="margin-top: 0.1rem">Check-Out&nbsp;&nbsp;&nbsp;
                                                                                                {{ \Carbon\Carbon::parse($item->tanggal_cekout)->locale('id')->translatedFormat('D, d M Y') }}</span><br>
                                                                                            <br>
                                                                                            <span>1 {{ $item->tipe_kamar }}
                                                                                                ROOM</span><br>
                                                                                            <span>{{ $item->jumlah_kasur }}
                                                                                                BED</span><br>
                                                                                            <span>{{ $item->fasilitas }}</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.7rem;">
                                                                                    <div class="row ml-2">
                                                                                        <div class="col-md-12">
                                                                                            <span>&nbsp;&nbsp;<h5
                                                                                                    style="color: white;">
                                                                                                    Detail Tamu</h5></span>
                                                                                        </div>
                                                                                        <div class="col-md-1">
                                                                                            <span class="fa fa-user"
                                                                                                style="font-size: 2rem;"></span>
                                                                                        </div>
                                                                                        <div class="col-md-11">
                                                                                            <span>{{ $item->nama }}</span><br>
                                                                                            <span><small>{{ $item->no_identitas }}</small></span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <div class="input-wrap">
                                                                                <div class=""
                                                                                    style="background-color: #5a6268; color: white; border-radius: 5px; padding-bottom: 0.6rem; padding-top: 0.6rem;">
                                                                                    <div class="row">
                                                                                        <div class="col-md-6">
                                                                                            <span>&nbsp;&nbsp;Total
                                                                                                Harga</span>
                                                                                        </div>
                                                                                        <div class="col-md-6 text-right">
                                                                                            <span>Rp.
                                                                                                {{ number_format($item->harga_sewa, 0, ',', '.') }}&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
@endsection
