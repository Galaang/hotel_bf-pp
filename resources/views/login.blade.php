<html>
<head>
<link rel="stylesheet" href="css/style.css" type="text/css" />
<title>Hotel Bintang Flores</title>
</head>
<body>
<div class="container">
  <div class="row mt-5">
    <div class="spContainer mx-auto">
      <div class="card col-md-12 shadow">
        <div class="d-inline text-left mb-3">
          <div class="card border-danger">
            <div class="card-header">
              <h2 class="font-weight-bold text-center">
                <p>Login</p>
                Hotel Bintang Flores
              </h2>
            </div>
            <p>Selamat Datang!</p>
          </div>
          <form action="/loginAction" method="post">
            @csrf
          <div class="d-inline text-center mb-0">
            <div class="form-group mx-auto">
              <input
                class="form-control inpSp"
                type="text" name="name" required
                placeholder="username" 
              />
            </div>
          </div>
          <div class="d-inline text-center mb-3">
            <div class="form-group mx-auto">
              <input
                class="form-control inpSp" required
                type="password" name="password"
                placeholder="Password"
              />
            </div>
          </div>
          <div class="d-inline text-left mb-3">
            <div class="form-group mx-auto">
              <button type="submit" class="btn btn-primary">Login</button>
              <a class="small text-black-50 pl-2 ml-2 border-left" href=""
                >Forgot Password ?</a
              >
            </div>
          </div>
          <div class="d-inline text-left mb-1">
            <div class="form-group mx-auto mb-0">
              <label class="text-black-50 small">or login with</label>
            </div>
          </div>
          <div class="d-inline text-left">
            <div class="form-group mx-auto">
              <button type="button" class="btn btn-sm btn-light">
                <span class="badge text-white"
                  ><i class="fab fa-google text-danger"></i
                ></span>
                Google
              </button>
              <button type="button" class="btn btn-sm btn-light ml-2">
                <span class="badge text-white"
                  ><i class="fab fa-facebook-f text-primary"></i
                ></span>
                Facebook
              </button>
            </div>
          </div>
          <div class="d-inline text-left mt-3">
            <div class="form-group mx-auto mb-0">
              <a class="text-black font-weight-bold regStr" href="/register"
                >Register new account</a>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>