<!DOCTYPE html>
<html data-bs-theme="light" lang="en">
<x-message />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
  <title>Register - Brand</title>
  <script defer src="https://unpkg.com/alpinejs@3.2.4/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
  <link rel="stylesheet" href="{{ asset('fonts/fontawesome-all.min.css')}}">
</head>

<body class="bg-gradient-dark">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <div class="card my-3 bg-muted">
          <div class="card-body p-6">
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="text-dark mb-4">Create an Account!</h4>
                  </div>
                  <form action="{{ route('storedata') }}" method="post" class="user">
                    @csrf
                    <div class="row mb-3">
                      @error('name')
                      <div style="font-size: 10px; color:red;">{{ $message }}</div>
                      @enderror
                      <div class="col-sm-12"><input class="form-control form-control-user" type="text" id="exampleLastName" placeholder="Name" name="name"></div>
                    </div>
                    @error('email')
                    <div style="font-size: 10px; color:red;">{{ $message }}</div>
                    @enderror
                    <div class="mb-3"><input class="form-control form-control-user" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Email Address" name="email"></div>
                    <div class="row mb-3">
                      <div class="col-sm-6 mb-3 mb-sm-0"><input class="form-control form-control-user" type="password" id="examplePasswordInput" placeholder="Password" name="password"></div>
                      <div class="col-sm-6"><input class="form-control form-control-user" type="password" id="exampleRepeatPasswordInput" placeholder="Repeat Password" name="cpassword"></div>
                    </div><button class="btn btn-primary d-block btn-user w-100" type="submit">Register Account</button>
                    <hr>
                    <br>
                  </form>
                  <div class="text-center"><a class="small" href="{{ route('login' )}}">Already have an account? Login!</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/script.min.js') }}"></script>
</body>

</html>