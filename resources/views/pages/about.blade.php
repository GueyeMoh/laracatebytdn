@extends('layouts.master',['title'=>'about'])
@section('content')
<div class="container">
	<h2>What is Laracarte</h2>
	<p>Laracarte is a clone app of <a href="laramap.com">Laramap</a></p>
		<div class="col-md-6">
			<p class="alert alert-warning"><strong><i class="fa fa-exclamation-triangle"></i>This app has been built by <a href="https://twitter.com/@gueymoh">@gueye</a> for learning purposes</strong></p>
		</div>
	<p>Feel free to help improve the <a href="#">source code</a></p>

	<h2>What is Laramap?</h2>
	<p>Laramap is the website in which laracarte is inspired</p> 
	<p>More info <a href="#">here</a></p>	
	<hr>
	<p>Which tools and services are used in Laracarte?</p>
	<p>Basically, it's a Laravel &amp; Bootstrap. But there is a bunch of services used for email and other sections </p>
	<ul>
		<li>Laravel</li>
		<li>Bootstrap</li>
		<li>Amazon S3</li>
		<li>Mandrill</li>
		<li>Google Maps</li>
		<li>Gravatar</li>
		<li>Antony Martin's geolocatiion package</li>
		<li>Michel Fortin's Markdown Parser package</li>
		<li>Heroku</li>
	</ul>
	<hr>
</div>
@endsection