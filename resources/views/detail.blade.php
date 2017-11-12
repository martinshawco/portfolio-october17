@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/detail.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/detail.js') }}"></script>
@endsection


@section('content')
	
	<?php
		$proj = \App\Project::find($id);
	?>

	<div class="image_container">

		<ul class="slides_container">

			<?php $firstimg = \App\ProjectImage::where("project_id", $proj->id)->where("is_thumbnail", 1)->first(); ?>
			<li class="slide showing">
				<img class="@if ($firstimg->is_thumbnail_centercontained) containedcenter @endif" src="{{$firstimg->file_path}}" alt="">
			</li>

			<?php $images = \App\ProjectImage::where("project_id", $proj->id)->where("is_thumbnail", "!=", 1)->orWhereNull('is_thumbnail')->get(); ?>
			@foreach ($images as $img)
				<li class="slide">
					<img class="@if ($img->is_thumbnail_centercontained) containedcenter @endif" src="{{$img->file_path}}" alt="">
				</li>
			@endforeach

		</ul>

	</div>
	<div class="details_container">
		<h1 class="d_name">{{$proj->name}}</h1>
		<p class="d_description">{!! $proj->description !!}</p>
		<div class="d_link_container"><a href="{{$proj->url}}" class="d_link">
			@if ($proj->url == null)
				&nbsp;
			@elseif (!strpos($proj->url, "github.com"))
				See this work online &rarr;
			@else
				<div class="github-card" data-github="<?php echo explode("github.com/", $proj->url)[1]; ?>" data-width="100%" data-height="" data-theme="default"></div>
				<script src="//cdn.jsdelivr.net/github-cards/latest/widget.js"></script>
				View the source code on GitHub &rarr;
			@endif
		</a></div>
	</div>




	<script>
		$(() => {

			var $slides = $('.slides_container .slide');
			var currentSlide = 0;
			var slideInterval = setInterval(nextSlide, 3200);

			function nextSlide() {
				$slides.removeClass("showing");
				if ($slides.length > currentSlide +1) {
					currentSlide++;
				} else {
					currentSlide = 0;
				}
				$slides.eq(currentSlide).addClass("showing");



			}

		});
		

	</script>

@endsection