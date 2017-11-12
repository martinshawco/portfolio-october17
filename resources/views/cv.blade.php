@extends('layouts.app')


@section('resources')
	@parent
	<style>
		html, body{
			width: 100%;
			height: 100%;
			overflow: hidden;
		}
		iframe{	
			width: calc(100% - 0px);
			height: calc(100% - 120px);
			margin: 0 0px;
		}
	</style>
@endsection


@section('content')
	<iframe src="../static/cv.pdf" frameborder="0" ></iframe>
@endsection