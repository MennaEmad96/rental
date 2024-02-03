<!DOCTYPE html>
<html lang="en">
  <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Rent Car Admin | Login/Register</title>

        <!-- Bootstrap -->
        <link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- NProgress -->
        <link href="{{ asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
        <!-- Animate.css -->
        <link href="{{ asset('assets/admin/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="{{ asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <!-- <div id="register" class="animate form registration_form"> -->
        <div id="register" class="animate form">
          <section class="login_content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <h1>Create Account</h1>
                <div>
                    <input name="fullName" value="{{ old('fullName') }}" type="text" class="form-control" placeholder="Fullname" required="" />
                    @error('fullName')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <input name="userName" value="{{ old('userName') }}" type="text" class="form-control" placeholder="Username" required="" />
                    @error('userName')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email" required="" />
                    @error('email')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <input name="password" value="{{ old('password') }}" type="password" class="form-control" placeholder="Password" required="" />
                    @error('password')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password" class="form-control" placeholder="Password Confirmation" required="" />
                    @error('password_confirmation')
                        {{ $message }}
                    @enderror
                </div>
                <div>
                    <button class="btn btn-default submit" href="">Submit</button>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                    <p class="change_link">Already a member ?
                    <a href="{{ route('login') }}" class="to_register"> Log in </a>
                    </p>

                    <div class="clearfix"></div>
                    <br />

                    <div>
                    <h1><i class="fa fa-car"></i></i> Rent Car Admin</h1>
                    </div>
                </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
