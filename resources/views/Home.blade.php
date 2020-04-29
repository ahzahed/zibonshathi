@extends('Frontend.app')

@section('hcontent')
@include('Frontend.menu')
@include('Frontend.Banner')
@include('Frontend.MaleFeatured')
@include('Frontend.FemaleFeatured')
@include('Frontend.Services')
@include('Frontend.Counter')
@include('Frontend.Testimonial')
@include('Frontend.Blogs')
@include('Frontend.Video')
@include('Frontend.Footer')
@include('Frontend.Copyright')

<!--Back to top button part start -->
<a href="#" class="back-to-top">
  <i class="fas fa-chevron-up"></i>
</a>
<!--Back to top button part end -->

@endsection

