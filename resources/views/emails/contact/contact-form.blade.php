@component('mail::message')
# New message for you with subject {{$data['subject']}}

<strong> Full name: </strong> {{$data['first_name']}} {{$data['last_name']}}

<strong> Email: </strong> {{$data['email']}}

<strong> Message: </strong>
{{$data['message']}}
@endcomponent