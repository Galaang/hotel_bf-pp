<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Hotel Bintang Flores</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        @include('layout.sidebar')
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <!-- <a href="https://adminmart.com/product/modernize-free-bootstrap-admin-dashboard/" target="_blank" class="btn btn-primary">Download Free</a> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle" />
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a>
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="card" method="POST" action="">
                        <div class="card-body">
                            <div class="row">
                                @foreach ($room as $r)
                                    @if($r->tipe_kamar == 'Family')
                                    <div class="col-md-4">
                                        <td>
                                            <h5 class="card-title fw-semibold mb-4">FAMILY ROOM</h5>
                                        </td>
                                        <table>
                                            <tr>
                                                <img src="../assets/images/products/family.png" class="card-img-top"
                                                    alt="foto" />
                                            </tr>
                                            <tr>
                                            </tr>
                                        </table>

                                        <div class="card">
                                            <div class="card-body">
                                                <p>
                                                <h5 class="card-title">Rp. {{ number_format($r->harga, 0, ',', '.') }}</h5>
                                                <h7 style="color: #000">/malam</h7>
                                                </p>
                                                <p class="card-text">
                                                    <li><span>Max : 3 person</span></li>
                                                    <li><span>Size : 45 m2</span></li>
                                                    <li><span>Free WI-FI</span></li>
                                                    <li><span>Bed : {{ $r->jumlah_kasur }}</span></li>
                                                </p>
                                                <a href="/registerRoom/{{ $r->id }}/edit"
                                                    class="btn btn-secondary m-1">Edit</a>
                                                <form action="/registerRoom/{{ $r->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Hapus Kamar?')" value="Delete" class="btn btn-danger m-1">Hapus</button>
                                                </form>
                                                <!-- <button type="button" ">
                                                    Hapus
                                                    </button> -->
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($r->tipe_kamar == 'Suite')
                                    <div class="col-md-4">
                                        <h5 class="card-title fw-semibold mb-4">SUITE ROOM</h5>
                                        <div class="card">
                                            <img src="../assets/images/products/suite.png" class="card-img-top"
                                                alt="..." />
                                            <div class="card-body">
                                                <p>
                                                <h5 class="card-title">Rp. {{ number_format($r->harga, 0, ',', '.') }}</h5>
                                                <h7 style="color: #000">/malam</h7>
                                                </p>
                                                <p class="card-text">
                                                    <li><span>Max : 3 person</span></li>
                                                    <li><span>Size : 45 m2</span></li>
                                                    <li><span>Free WI-FI</span></li>
                                                    <li><span>Bed : {{ $r->jumlah_kasur }}</span></li>
                                                </p>
                                                <a href="/registerRoom/{{ $r->id }}/edit"
                                                    class="btn btn-secondary m-1">Edit</a>
                                                <form action="/registerRoom/{{ $r->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Hapus Kamar?')" value="Delete" class="btn btn-danger m-1">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($r->tipe_kamar == 'Standard')
                                    <div class="col-md-4">
                                        <h5 class="card-title fw-semibold mb-4">STANDARD ROOM</h5>
                                        <div class="card">
                                            <img src="../assets/images/products/standard.png" class="card-img-top"
                                                alt="..." />
                                            <div class="card-body">
                                                <p>
                                                <h5 class="card-title">Rp. {{ number_format($r->harga, 0, ',', '.') }}</h5>
                                                <h7 style="color: #000">/malam</h7>
                                                </p>
                                                <p class="card-text">
                                                    <li><span>Max : 3 person</span></li>
                                                    <li><span>Size : 45 m2</span></li>
                                                    <li><span>Free WI-FI</span></li>
                                                    <li><span>Bed : {{ $r->jumlah_kasur }}</span></li>
                                                </p>
                                                <a href="/registerRoom/{{ $r->id }}/edit"
                                                    class="btn btn-secondary m-1">Edit</a>
                                                <form action="/registerRoom/{{ $r->id }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Hapus Kamar?')" value="Delete" class="btn btn-danger m-1">Hapus</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                    @elseif($r->tipe_kamar == 'Deluxe')
                                        <div class="col-md-4">
                                            <h5 class="card-title fw-semibold mb-4">DELUXE ROOM</h5>
                                            <div class="card">
                                                <img src="../assets/images/products/deluxe.png" class="card-img-top"
                                                    alt="..." />
                                                <div class="card-body">
                                                    <p>
                                                    <h5 class="card-title">Rp. {{ number_format($r->harga, 0, ',', '.') }}</h5>
                                                    <h7 style="color: #000">/malam</h7>
                                                    </p>
                                                    <p class="card-text">
                                                        <li><span>Max : 3 person</span></li>
                                                        <li><span>Size : 45 m2</span></li>
                                                        <li><span>Free WI-FI</span></li>
                                                        <li><span>Bed : {{ $r->jumlah_kasur }}</span></li>
                                                    </p>
                                                    <a href="/registerRoom/{{ $r->id }}/edit"
                                                        class="btn btn-secondary m-1">Edit</a>
                                                    <form action="/registerRoom/{{ $r->id }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" onclick="return confirm('Hapus Kamar?')" value="Delete" class="btn btn-danger m-1">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach

                        </div>
                        <a href="/tambahkamar" class="btn btn-lg form-control btn-success m-1">Tambah kamar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
</body>

</html>
