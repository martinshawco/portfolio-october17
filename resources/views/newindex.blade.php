@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/newindex.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/newindex.js') }}"></script>
	
	
	
@endsection


@section('content')

	<div class="showcase_container">
		<ul class="showcase_menu">

			<?php $projects = \App\Project::orderBy('updated_at', 'asc')->get(); ?>

			@foreach ($projects as $proj)
				    
				<!-- <a href="/detail/{{$proj->id}}"> -->

					<li class="s_m_item">
						<div class="s_m_i_image @if($proj->thumbnail_containcenter == true) containedcenter @endif" style="background-image: url('{{$proj->thumbnail_path}}');"></div>
						<div class="s_m_i_container">
							<h1 class="s_m_i_c_title">{{$proj->name}}</h1>
							<p class="s_m_i_c_yearandtags">
								@foreach (explode(",", $proj->tags) as $tag)
									<span class="tag">{{$tag}}</span>
								@endforeach
								
							</p>
						</div>
					</li>

				<!-- </a> -->

			@endforeach

		</ul>
	</div>

	
@endsection