@extends('layouts.master', ['title'=>'Contact'])
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-6  col-sm-10 mx-auto">
			<h2>Get In Touch</h2>
			<p class="text-muted">If you are having problem with this service, please <a href="mailto:gueyemoda98@gmail.com">ask for help</a> </p>
			<form action="{{route('contact.store')}}" method="POST">
				{{csrf_field()}}
				<div class="form-group">
					<label for="name" class="control-label">Name</label>
					<input type="text" name="nom" class="form-control" required="required" class="{{$errors->has('nom') ? 'is-invalid' : ''}}">	
					{!! $errors->first('nom', "<div class='invalid-feedback'>:message</div>") !!}
				</div>
				<div class="form-group">
					<label for="mail" class="control-label">Email</label>
					<input type="email" name="mail" class="form-control" required="required" class="{{$errors->has('mail') ? 'is-invalid' : ''}}">	
					{!!$errors->first('mail', "<div class='invalid-feedback'>:message</div>")!!}
				</div>
				<div class="form-group">
					<label for="message" class="control-label sr-only">Message</label>
					<textarea class="form-control {{$errors->has('message') ? 'is-invalid' : ''}}" required="required" name="message" rows="10" cols="10"></textarea>	
					{!!$errors->first('message', "<div class='invalid-feedback'>:message</div>")!!}
				</div>
				<div class="form-group">
					<button class="btn btn-primary btn-block">Submit Enquiry &raquo;</button>
				</div>
				
			</form>
			
		</div>
		
	</div>
	
</div>
@endsection