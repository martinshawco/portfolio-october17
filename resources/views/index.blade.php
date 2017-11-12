@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/index.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/index.js') }}"></script>
	
	
	
@endsection


@section('content')




	<div class="showcase_container">
		<ul class="showcase_menu">

			<?php $projects = \App\Project::orderBy('updated_at', 'asc')->get(); ?>

			@foreach ($projects as $proj)
				<?php
					$proj_img = \App\ProjectImage::where('project_id', $proj->id)->where('is_thumbnail', 1)->first();

				?>

				<a href="/detail/{{$proj->id}}">

					<li class="s_m_item">
						<div class="s_m_i_image @if($proj_img->is_thumbnail_centercontained == 1) containedcenter @endif" style="background-image: url('{{$proj_img->file_path}}');"></div>
						<div class="s_m_i_container">
							<h1 class="s_m_i_c_title">{{$proj->name}}</h1>
							<p class="s_m_i_c_yearandtags">
								@foreach (explode(",", $proj->tags) as $tag)
									<span class="tag">{{$tag}}</span>
								@endforeach
								
							</p>
						</div>
					</li>

				</a>

			@endforeach

		</ul>
	</div>

	
@endsection