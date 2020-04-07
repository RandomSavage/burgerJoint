@component('mail::message')
# Thank You for your Message

<strong>Name</strong> {{$data['name']}}
<strong>Email</strong> {{$data['email']}}

<strong>Message</strong> {{$data['message']}}

{{$data['message']}}
@endcomponent
