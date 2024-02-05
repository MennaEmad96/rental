<div class="categories">
    <h3>Categories</h3>
    @foreach($categories as $category)
    <li><a href="{{ route('listing',['id'=>$category->id]) }}">{{ $category->name }} <span>({{ $category->num }})</span></a></li>
    @endforeach
</div>