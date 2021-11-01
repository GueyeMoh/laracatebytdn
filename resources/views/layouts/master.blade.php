<!DOCTYPE html>
<html>
<head>
	{{--on utilise le helpers page_title --}}
	<title>{{page_title($title ?? '')}}</title>
	{{-- <title>{{isset($title) ? $title . ' |' : ''}} Laracarte - List of Artisans</title> --}}
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- Charger la police open sans via google font --}}
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	{{-- <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700' rel='stylesheet'> --}}
	<style >
		body{
			font-family: 'Open Sans' Helvitica sans-serif;
		}
		footer{
			margin: 4em 0 
		}
		/*.flashy{
			font-family: "Source Sans Pro", Arial, sans-serif;
			padding: 11px 30px;
			border-radius: 4px;
			font-weight: 400;
			position: fixed;
			bottom: 20px;
			right: 20px;
			font-size: 16px;
			color: #fff;
       }*/
	</style>
</head>
<body>
	
	@include('layouts.partials._nav')

	@yield('content')
	<script src="https://code.jquery.com/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	{{-- <script id="flashy-template" type="text/template">
    <div class="flashy flashy--{{ Session::get('flashy_notification.type') }}">
        <i class="material-icons">speaker_notes</i>
        <a href="#" class="flashy__body" target="_blank"></a>
    </div> --}}
    </script>
    @include('flashy::message')
	@include('layouts.partials._footer')
	
</body>
</html>