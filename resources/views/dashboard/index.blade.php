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
                @include('layout.navbar')
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <h5 class="card-title fw-semibold mb-4"></h5>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Jumlah Pendapataan (Bulan Ini)</h5>
                                                <p class="card-text"></p>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">
                                                    Rp. {{ number_format($countPendapatan, 0, ',', '.') }}</h6>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title fw-semibold mb-4"></h5>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Jumlah Kamar</h5>
                                                <p class="card-text"></p>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">
                                                    {{ $countKamar }} Kamar</h6>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="card-title fw-semibold mb-4"></h5>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-center">Jumlah Reservasi</h5>
                                                <p class="card-text"></p>
                                                <h6 class="card-subtitle mb-2 text-muted text-center">
                                                    {{ $countReservasi }} Orang</h6>
                                                <a href="#" class="card-link"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Row 1 -->
                <div class="col-lg-4">
                    <div class="row">
                        <div class="col-lg-12">
                        </div>
                        <!-- <div class="col-lg-12"> -->
                        <!-- Monthly Earnings -->
                        <!-- <div class="card">
                  <div class="card-body">
                    <div class="row alig n-items-start">
                      <div class="col-8">
                        <h5 class="card-title mb-9 fw-semibold"> Monthly Earnings </h5>
                        <h4 class="fw-semibold mb-3">$6,820</h4>
                        <div class="d-flex align-items-center pb-1">
                          <span
                            class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                            <i class="ti ti-arrow-down-right text-danger"></i>
                          </span>
                          <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                          <p class="fs-3 mb-0">last year</p>
                        </div>
                      </div>
                      <div class="col-4">
                        <div class="d-flex justify-content-end">
                          <div
                            class="text-white bg-secondary rounded-circle p-6 d-flex align-items-center justify-content-center">
                            <i class="ti ti-currency-dollar fs-6"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="earning"></div>
                </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6 px-6 text-center">
            <p class="mb-0 fs-4">
            </p>
        </div>
    </div>
    </div>
    </div>
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/sidebarmenu.js"></script>
    <script src="../assets/js/app.min.js"></script>
    <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="../assets/js/dashboard.js"></script>
</body>

</html>
