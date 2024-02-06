@foreach($testimonials as $testimonial)
<div class="col-lg-4 mb-4 @yeild(testimonialStyle)">
<div class="testimonial-2">
    <blockquote class="mb-4">
    <p>"{{ $testimonial->content }}"</p>
    </blockquote>
    <div class="d-flex v-card align-items-center">
    <img src="{{ asset('assets/admin/testimonialImages/' . $testimonial->image) }}" alt="Image" class="img-fluid mr-3">
    <div class="author-name">
        <span class="d-block">{{ $testimonial->name }}</span>
        <span>{{ $testimonial->position }}</span>
    </div>
    </div>
</div>
</div>
@endforeach