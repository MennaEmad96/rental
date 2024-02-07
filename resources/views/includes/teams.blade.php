<div class="container">
<div class="row justify-content-center text-center mb-5 section-2-title">
    <div class="col-md-6">
    <h2 class="mb-4">Meet Our Team</h2>
    </div>
</div>
<div class="row align-items-stretch">

    @foreach($teams as $team)
    <div class="col-lg-4 col-md-6 mb-5">
    <div class="post-entry-1 h-100 person-1">
        
        <img src="{{ asset('assets/admin/teamImages/' . $team->image) }}" alt="Image"
            class="img-fluid">
    
        <div class="post-entry-1-contents">
        <span class="meta">{{ $team->position }}</span>
        <h2>{{ $team->name }}</h2>
        <p>{{ $team->content }}</p>
        </div>
    </div>
    </div>
    @endforeach

</div>
</div>