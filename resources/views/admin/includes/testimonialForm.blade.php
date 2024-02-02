<!-- route method value image button -->
<!-- old image value -->
<form action="{{ route('storeTestimonial') }}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="name" value="{{ old('name') }}" type="text" id="name" required="required" class="form-control ">
        </div>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Position <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="position" value="{{ old('position') }}" type="text" id="position" required="required" class="form-control ">
        </div>
        @error('position')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">{{ old('content') }}</textarea>
        </div>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
        <div class="checkbox">
            <label>
                <input name="published" @checked(old('published')) type="checkbox" class="flat">
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" value="{{ old('image') }}" required="required" class="form-control">
        </div>
        @error('image')
            {{ $message }}
        @enderror
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <button class="btn btn-primary" type="button">Cancel</button>
            <button type="submit" class="btn btn-success">Add</button>
        </div>
    </div>

</form>
