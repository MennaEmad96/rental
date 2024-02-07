<div class="container">
<div class="row justify-content-center text-center">
<div class="col-7 text-center mb-5">
    <h2>Contact Us Or Use This Form To Rent A Car</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo assumenda, dolorum necessitatibus eius earum voluptates sed!</p>
</div>
</div>
<div class="row">
    <div class="col-lg-8 mb-5" >
    <form action="{{ route('storeMessage') }}" method="post">
        @csrf
        <div class="form-group row">
        <div class="col-md-6 mb-4 mb-lg-0">
            <input name="firstName" value="{{ old('firstName') }}" type="text" class="form-control" placeholder="First name">
        </div>
        @error('firstName')
            {{ $message }}
        @enderror
        <div class="col-md-6">
            <input name="lastName" value="{{ old('lastName') }}" type="text" class="form-control" placeholder="Last name">
        </div>
        @error('lastName')
            {{ $message }}
        @enderror
        </div>

        <div class="form-group row">
        <div class="col-md-12">
            <input name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Email address">
        </div>
        @error('email')
            {{ $message }}
        @enderror
        </div>

        <div class="form-group row">
        <div class="col-md-12">
            <textarea name="content" id="" class="form-control" placeholder="Write your message." cols="30" rows="10">{{ old('content') }}</textarea>
        </div>
        @error('content')
            {{ $message }}
        @enderror
        </div>
        <div class="form-group row">
        <div class="col-md-6 mr-auto">
            <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5" value="Send Message">
        </div>
        </div>
    </form>
    </div>
    <div class="col-lg-4 ml-auto">
    <div class="bg-white p-3 p-md-5">
        <h3 class="text-black mb-4">Contact Info</h3>
        <ul class="list-unstyled footer-link">
        <li class="d-block mb-3">
            <span class="d-block text-black">Address:</span>
            <span>34 Street Name, City Name Here, United States</span></li>
        <li class="d-block mb-3"><span class="d-block text-black">Phone:</span><span>+1 242 4942 290</span></li>
        <li class="d-block mb-3"><span class="d-block text-black">Email:</span><span>info@yourdomain.com</span></li>
        </ul>
    </div>
    </div>
</div>
</div>