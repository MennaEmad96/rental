@extends('layouts.appCar')

@section('title')
    Register
@endsection

@section('content')
    <!-- <div id="register" class="animate form registration_form"> -->
    <div id="register" class="animate form">
        <section class="login_content">
        <form method="POST" action="{{ route('register') }}" id="registerForm">
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
            <!-- <div>
                <input name="password_confirmation" value="{{ old('password_confirmation') }}" type="password" class="form-control" placeholder="Password Confirmation" required="" />
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </div> -->
            <div>
                <a class="btn btn-default submit" href="{{ route('register') }}" onclick="event.preventDefault(); document.getElementById('registerForm').submit();">Submit</a>
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
@endsection
      