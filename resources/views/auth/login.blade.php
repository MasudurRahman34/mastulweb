<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:05:21 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mastul Foundaiton</title>
  <!-- plugins:css -->
  @include ('backend.partials.css')
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
      <div class="row">
        <div class="content-wrapper full-page-wrapper d-flex align-items-center auth">
          <div class="row w-100">
            <div class="col-lg-8 mx-auto">
              <div class="row">
                <div class="col-lg-6 bg-white">
                  <div class="auth-form-light text-left p-5">
                    <h1 class="text-center" style="font-size:2rem; color:#f50530;">Mastul Foundation</h1>
                    <h4 class="font-weight-light text-center">Raising For Children</h4>
                    <form class="pt-5" method="POST" action="{{ route('login') }}">
                      <form>
                         @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Username</label>
                          
                           <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          <i class="mdi mdi-account"></i>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          
                          <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                          <i class="mdi mdi-eye"></i>
                        </div>
                        <div class="mt-5">
                          <button class="btn btn-block btn-success btn-lg font-weight-medium" type="submit">Login</a>
                        </div>
                        <div class="mt-3 text-center">
                          
                          @if (Route::has('password.request'))
                                    <a class="auth-link text-black" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                        </div>
                      </form>                  
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 login-half-bg d-flex flex-row">
                  
                </div>
                <p class="text-info font-weight-medium text-center flex-grow align-self-end">Copyright Mastul Foundation &copy; 2018  All rights reserved.<br>
                <!-- <span class="text-dark"> Developed By Masudur Rahman</span> --> </p>

              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- row ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include ('backend.partials.script')

  <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/stellar-admin/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Feb 2019 11:05:21 GMT -->
</html>
