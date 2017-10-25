@extends('layouts.app')


@section('resources')
	@parent
	<style>
		
		.compat_container{
			width: 700px;
			height: 300px;
			margin: 25px 25px;
			padding: 20px 20px;
			background: #333;
		}
		
		h1{
			font-size: 16pt;
		}
		
		p{
			width: 500px;
		}
		
		a{
			font-weight: 900;
			color: white;
		}
		
		a.continue{
			font-size: 12pt;
			color: #777;
		}
		
	</style>
@endsection


@section('content')

	<br/><br/><br/>
	<center>
		<div class="compat_container">
			<br/><br/>
			<h1>Unfortunately, you are using an older browser!</h1>
			<br/>
			<p>
				My Portfolio website uses complex animations and modern styling which might not be supported by your internet browser.
				<br/><br/>
				To explore the projects which I have worked on, I recommend that you use a modern browser such as 
				<a href="https://www.google.co.uk/chrome">Chrome</a> or <a href="https://www.mozilla.org/en-GB/firefox/new/">Firefox</a>
				<br/><br/>
				<a class="continue" href="/?ignore_browser">Ignore recommendation &rarr;</a>
			</p>
		</div>
	</center>

	
@endsection