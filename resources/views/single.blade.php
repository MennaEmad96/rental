@extends('layouts.pages')

@section('title')
    Car Rental &mdash; Detail
@endsection

@section('sideTitle')
    <div class="col-lg-12">

    <div class="intro">
    <h1><strong>Single Blog Posts Title</strong></h1>
    <div class="pb-4"><strong class="text-black">Posted on May 22, 2020</strong></div>
    </div>

    </div>
@endsection

@section('content')
<div class="site-section">
    <div class="container">
    <div class="row">
        
        <div class="col-md-8 blog-content">
        <!-- car details start -->
        @include('includes.carDetails')
        <!-- car details end -->

        <!-- comments start -->
        <div class="pt-5">
            @include('includes.comments')
        </div>
        <!-- comments end -->

        </div>
        
        <!-- side bar start -->
        <div class="col-md-4 sidebar">

        <!-- search start -->
        <div class="sidebar-box">
            @include('includes.sideBarSearch')
        </div>
        <!-- search end -->

        <!-- categories start -->
        <div class="sidebar-box">
            @include('includes.sideBarCategories')
        </div>
        <!-- categories end -->

        @include('includes.sideBarAuthorParagraph')
        <!-- author & paragraph -->

        </div>
        <!-- side bar end -->
    </div>
    </div>
</div>
@endsection


      

    

      
    
    