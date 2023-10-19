<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel Bintang Flores</title>
  <link rel="stylesheet" href="css/style.css" type="text/css"/>
</head>
<body>
  <div class="container">
    <div class="row mt-5">
      <div class="spCsontainer mx-auto">
        <div class="card col-md-12 shadow">
          <div class="d-inline text-left mb-3">
            <div class="card border-danger">
              <div class="card-header">
                <h2 class="font-weight-bold text-center">
                  <p>Register</p>
                  Hotel Bintang Flores
                </h2>
              </div>
              <!-- <h5>Selamat Datang!</h5> -->
            </div>
            @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $item)
                              <p>{{ $item }}</p>
                          @endforeach
                      </ul>
                  </div>
              @endif
              
              @if (Session::get('success'))
                  <div class="alert alert-success">
                      {{ Session::get('success') }}
                  </div>
              @endif
            <form action="/register" method="post">
              @csrf
            <div class="d-inline text-center mb-0">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="text" name="name"
                  placeholder="Username" value="{{Session::get('name')}}"
                />
              </div>
            </div>
            <div class="d-inline text-center mb-0">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="email" name="email"
                  placeholder="Email" value="{{Session::get('email')}}"
                />
              </div>
            </div>
                        <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="Password" name="password"
                  placeholder="Password" value="{{Session::get('password')}}"
                />
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="text" name="no_id"
                  placeholder="No.Identitas" value="{{Session::get('no_id')}}"
                />
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="text" name="telepon"
                  placeholder="No.Handphone" value="{{Session::get('telepon')}}"
                />
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="date" name="Tanggal_Lahir"
                  placeholder="Tanggal Lahir" value="{{Session::get('Tanggal_Lahir')}}"
                />
              </div>
            </div>
            <div class="d-inline text-center mb-3">
              <div class="form-group mx-auto">
                <input
                  class="form-control inpSp"
                  type="text" name="Jenis_Kelamin"
                  placeholder="Jenis Kelamin" value="{{Session::get('Jenis_Kelamin')}}"
                />
              </div>
            </div>
            <div class="d-inline text-left mb-3">
              <div class="form-group mx-auto ">
                <button class="btn btn-primary">Confirm</button>
              </div>
            </div>
            </form>
            <div class="d-inline text-left mb-1">
              <div class="form-group mx-auto mb-0">
                <label class="text-black-50 small">or login with</label>
              </div>
            </div>
            <div class="d-inline text-left mt-3">
              <div class="form-group mx-auto mb-0">
                <a class="text-black font-weight-bold regStr" href="/">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>