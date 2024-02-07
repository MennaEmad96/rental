<!-- cancel, old image value with add and edit -->
@if(isset($team))
<form action="{{ route('updateTeam', ['id'=>$team->id]) }}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
    @method('put')
@else
<form action="{{ route('storeTeam') }}" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
@endif
    @csrf
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="name" value="{{ isset($team) ? $team->name : old('name') }}" type="text" id="name" required="required" class="form-control ">
        </div>
        @error('name')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Position <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input name="position" value="{{ isset($team) ? $team->position : old('position') }}" type="text" id="position" required="required" class="form-control ">
        </div>
        @error('position')
            {{ $message }}
        @enderror
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <textarea id="content" name="content" required="required" class="form-control">{{ isset($team) ? $team->content :old('content') }}</textarea>
        </div>
        @error('content')
            {{ $message }}
        @enderror
    </div>
    
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
        <div class="checkbox">
            <label>
                <input name="published" {{ (isset($team) && $team->published) || old('published') ? 'checked' : '' }} type="checkbox" class="flat">
            </label>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
        </label>
        <div class="col-md-6 col-sm-6 ">
            <input type="file" id="image" name="image" value="{{ isset($team) ? $team->image : old('image') }}" {{ isset($team) ? '' : 'required="required"' }} class="form-control">
            @if(isset($team))
                <img src="{{ asset('assets/admin/teamImages/'.$team->image) }}" alt="" style="width: 300px;">
                <input type="hidden" name="oldImageName" value="{{ $team->image }}">
            @endif
        </div>
        @error('image')
            {{ $message }}
        @enderror
    </div>
    <div class="ln_solid"></div>
    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <a href="{{ route('teams') }}"><button class="btn btn-primary" type="button">Cancel</button></a>
            <button type="submit" class="btn btn-success">{{ isset($team) ? 'Update' : 'Add' }}</button>
        </div>
    </div>

</form>
