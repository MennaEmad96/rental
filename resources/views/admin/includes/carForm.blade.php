<!-- cancel error -->
@if(isset($car))
<form action="{{ route('updateCar', ['id'=>$car->id]) }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
    @method('put')
@else
<form action="{{ route('storeCar') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype="multipart/form-data">
@endif
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="title" value="{{ isset($car) ? $car->title : old('title') }}" type="text" id="title" required="required" class="form-control ">
        </div>
        @error('title')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">{{ isset($car) ? $car->content : old('content') }}</textarea>
        </div>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label for="luggage" class="col-form-label col-md-3 col-sm-3 label-align">Luggage <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="luggage" class="form-control" type="number" name="luggages" value="{{ isset($car) ? $car->luggages : old('luggages') }}" required="required">
        </div>
        @error('luggages')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label for="doors" class="col-form-label col-md-3 col-sm-3 label-align">Doors <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="doors" class="form-control" type="number" name="doors" value="{{ isset($car) ? $car->doors : old('doors') }}" required="required">
        </div>
        @error('doors')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label for="passengers" class="col-form-label col-md-3 col-sm-3 label-align">Passengers <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="passengers" class="form-control" type="number" name="passengers" value="{{ isset($car) ? $car->passengers : old('passengers') }}" required="required">
        </div>
        @error('passengers')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 ">
            <input id="price" class="form-control" type="number" name="price" value="{{ isset($car) ? $car->price : old('price') }}" required="required">
        </div>
        @error('price')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Active</label>
        <div class="checkbox">
            <label>
                <input name="active" type="checkbox" class="flat" {{ (isset($car) && $car->active) || old('active') ? 'checked' : '' }}>
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" value="{{ isset($car) ? $car->image : old('image') }}" {{ isset($car) ? '' : 'required="required"' }} class="form-control">
            @if(isset($car))
                <img src="{{ asset('assets/admin/carImages/'.$car->image) }}" alt="" style="width: 300px;">
                <input type="hidden" name="oldImageName" value="{{ $car->image }}">
            @endif
        </div>
        @error('image')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <select class="form-control" name="category_id" id="">
                <option value="">Select Category</option>
                @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ (isset($car) && $car->category_id == $category->id) || old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        @error('category_id')
            {{ $message }}
        @enderror
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button type="submit" class="btn btn-success">{{ isset($car) ? 'Update' : 'Add' }}</button>
        </div>
    </div>

</form>