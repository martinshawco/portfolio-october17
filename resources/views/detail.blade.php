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
		<img class="@if ($proj->thumbnail_containcenter) containedcenter @endif" src="{{$proj->thumbnail_path}}" alt="">
	</div>
	<div class="details_container">
		<h1 class="d_name">{{$proj->name}}</h1>
		<p class="d_description">{!! $proj->description !!}</p>
		<div class="d_link_container"><a href="{{$proj->url}}" class="d_link">
			@if (!strpos($proj->url, "github.com"))
				See this work online &rarr;
			@else
				View the source code on GitHub &rarr;
			@endif
		</a></div>
	</div>
@endsection