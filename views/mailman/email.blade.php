@component('mail::message')
# Introduction 
Hello {{ $name }}

The message is: {{ $message }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
