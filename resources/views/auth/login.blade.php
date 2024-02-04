@extends('layouts.appCar')

@section('content')
  <div class="animate form login_form">
    <section class="login_content">
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <h1>Login Form</h1>
        <div>
          <input name="email" value="{{ old('email') }}" type="text" class="form-control" placeholder="username" required="" />
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
          <button class="btn btn-default submit" href="">Log in</button>
          <a class="reset_pass" href="#">Lost your password?</a>
        </div>

        <div class="clearfix"></div>

        <div class="separator">
          <p class="change_link">New to site?
            <a href="{{ route('register') }}" class="to_register"> Create Account </a>
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
@endsection