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
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-4">Reservasi Room</h5>
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('tambah-reservasi') }}">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <input type="hidden" name="status" value="Belum Bayar">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                name="nama" placeholder="Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No. Identitas</label>
                                            <input type="number" class="form-control" id="exampleInputName1"
                                                name="no_identitas" placeholder="KTP">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Alamat</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                name="alamat" placeholder="Alamat">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">No.HP</label>
                                            <input type="number" class="form-control" id="exampleInputName1"
                                                name="nohp" placeholder="No hp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tipe Kamar</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                name="tipe_kamar" placeholder="Tipe kamar">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Booking</label>
                                            <input type="date" class="form-control" id="exampleInputName1"
                                                name="tanggal_booking">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Waktu Booking</label>
                                            <input type="time" class="form-control" id="exampleInputName1"
                                                name="waktu_booking">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Harga Sewa</label>
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                name="harga_sewa" placeholder="Harga sewa">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Tanggal Cekout</label>
                                            <input type="date" class="form-control" id="exampleInputName1"
                                                name="tanggal_cekout">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Jenis Pemayaran</label>
                                            <select name="jenis_pembayaran" id="" class="form-control">
                                                <option value="" selected disabled><-- Pilih Jenis Pembayaran --></option>
                                                <option value="Tunai">Tunai</option>
                                                <option value="Non-Tunai">Non-Tunai</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="button" class="btn btn-light m-1">Cancel</button>
                                    </form>
                                </div>
                            </div>
                            <!-- <h5 class="card-title fw-semibold mb-4">Disabled forms</h5> -->
                            <!-- <div class="card mb-0">
                <div class="card-body">
                  <form>
                    <fieldset disabled>
                      <legend>Disabled fieldset example</legend>
                      <div class="mb-3">
                        <label for="disabledTextInput" class="form-label">Disabled input</label>
                        <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                      </div>
                      <div class="mb-3">
                        <label for="disabledSelect" class="form-label">Disabled select menu</label>
                        <select id="disabledSelect" class="form-select">
                          <option>Disabled select</option>
                        </select>
                      </div>
                      <div class="mb-3">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                          <label class="form-check-label" for="disabledFieldsetCheck">
                            Can't check this
                          </label>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                  </form>
                </div>
              </div> -->
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
