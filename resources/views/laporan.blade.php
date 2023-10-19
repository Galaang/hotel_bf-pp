<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
                                        height="35" class="rounded-circle">
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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Laporan Pendapatan</h5>
                            <form action="{{ route('cetak-laporan') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Jenis transaksi</label>
                                    <select class="form-select" name="jenis">
                                        <option value="Tunai">Tunai</option>
                                        <option value="Non-Tunai">Non tunai</option>
                                        <option value="semua">Semua</option>
                                    </select>
                                    <p></p>
                                    <!-- <input
                                    type="text"
                                    class="form-control"
                                    id="exampleInputEmail1"
                                    aria-describedby="emailHelp"/> -->
                                    <div class="mb-3">
                                        <label
                                            style="background: #ccc;
                                    padding: 5px;
                                    border-radius: 5px;
                                    margin: 0;
                                    text-align: center;
                                    line-height: 23px;
                                    color: black;
                                    font-size: 15px;">Periode</label>
                                        <p></p>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Dari Tanggal</label>
                                            <input type="date" class="form-control" id="exampleInputEmail1" name="dari"
                                                aria-describedby="emailHelp" />
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Sampai
                                                    Tanggal</label>
                                                <input type="date" class="form-control" id="exampleInputEmail1" name="sampai"
                                                    aria-describedby="emailHelp" />
                                            </div>
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                            <!-- <h5 class="card-title fw-semibold mb-4">Inline text elements</h5> -->
                                            <!-- <div class="card mb-0">
                                        <div class="card-body p-4">
                                        <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                                        <p><del>This line of text is meant to be treated as deleted text.</del></p>
                                        <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                                        <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                                        <p><u>This line of text will render as underlined.</u></p>
                                        <p><small>This line of text is meant to be treated as fine print.</small></p>
                                        <p><strong>This line rendered as bold text.</strong></p>
                                        <p class="mb-0"><em>This line rendered as italicized text.</em></p>
                                        </div>
                                    </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
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
