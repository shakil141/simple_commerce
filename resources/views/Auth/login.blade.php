
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Login Page</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/simplebar.css') }}">
    <!-- Fonts CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Icons CSS -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/feather.css') }}">
    <!-- App CSS -->
    <link rel="stylesheet" href="{{ asset('backend_assets/css/app-light.css') }}" id="lightTheme">
    <link rel="stylesheet" href="{{ asset('backend_assets/css/app-dark.css') }}" id="darkTheme" disabled>
  </head>
  <body class="light " style="overflow: hidden">
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">

        <form class="col-lg-3 col-md-4 col-10 mx-auto text-center" action="{{ route('login_success') }}" method="POST">
        @csrf
            @if(session()->has('alert-danger'))
            <div class="alert alert-danger">
                <span>{{session('alert-danger')}}</span>
            </div>
            @endif
          <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
            <img src="{{ asset('backend_assets/assets/images/logo.png') }}" alt="">
          </a>
          <h1 class="h6 mb-3">Sign in</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="admin_email" class="form-control form-control-lg" placeholder="Email address"  autofocus="">
            @error('admin_email')
                <span class="text text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="admin_password" class="form-control form-control-lg" placeholder="Password">
            @error('admin_password')
                <span class="text text-danger">{{ $message }}</span>
            @enderror
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Stay logged in </label>
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Let me in</button>
          <p class="mt-5 mb-3 text-muted">© 2020</p>
        </form>
      </div>
    </div>
    <script src="{{ asset('backend_assets/js/jquery.min.js') }}"></script>

    <script src="{{ asset('backend_assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend_assets/js/simplebar.min.js') }}"></script>

  </body>
</html>
</body>
</html>
