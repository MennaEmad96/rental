<!-- cancel -->
@if(isset($category))
<form action="{{ route('updateCategory', ['id'=>$category->id]) }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @method('put')
@else
<form action="{{ route('storeCategory') }}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
@endif
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="add-category">{{ isset($category) ? "Edit Category" : "Add Category" }}<span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="name" value="{{ isset($category) ? $category->name : old('name') }}" type="text" id="add-category" required="required" class="form-control ">
        </div>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="{{ route('categories') }}"><button class="btn btn-primary" type="button">Cancel</button></a>
            <button type="submit" class="btn btn-success">{{ isset($category) ? "Update" : "Add" }}</button>
        </div>
    </div>

</form>