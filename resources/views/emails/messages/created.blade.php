@component('mail::message')
# Introduction
- {{$msg->nom}}
- {{$msg->mail}}
{{-- The body of your message. --}}

@component('mail::panel')
	 {{$msg->message}}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
