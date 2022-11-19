@component('mail::message')
# A New Client Message From WebAiid 

User Name - {{$data->name}}

User Email - {{$data->email}}

# Message

{{$data->message}}



Thanks,<br>
{{ config('app.name') }}
@endcomponent
