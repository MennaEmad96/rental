<div class="container">
<div class="row align-items-center justify-content-center">
    <div class="col-lg-10">

    <div class="row mb-5">
        <div class="col-lg-7 intro">
        <h1><strong>Rent a car</strong> is within your finger tips.</h1>
        </div>
    </div>
    
    <form action="{{ route('listingSearch') }}" method="post" class="trip-form">
        @csrf
        <div class="row align-items-center">
        
        <div class="mb-3 mb-md-0 col-md-3">
            <select name="category" id="" class="custom-select form-control">
            <option value="">Select Type</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
            </select>
            @error('category')
                {{ $message }}
            @enderror
        </div>
        <div class="mb-3 mb-md-0 col-md-3">
            <div class="form-control-wrap">
            <input type="text" id="cf-3" placeholder="Pick up" class="form-control datepicker px-3">
            <span class="icon icon-date_range"></span>

            </div>
        </div>
        <div class="mb-3 mb-md-0 col-md-3">
            <div class="form-control-wrap">
            <input type="text" id="cf-4" placeholder="Drop off" class="form-control datepicker px-3">
            <span class="icon icon-date_range"></span>
            </div>
        </div>
        <div class="mb-3 mb-md-0 col-md-3">
            <input type="submit" value="Search Now" class="btn btn-primary btn-block py-3">
        </div>
        </div>
        
    </form>
    

    </div>
</div>
</div>