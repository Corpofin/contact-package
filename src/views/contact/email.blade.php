@component('mail::message')
# Introduction

This is new query from {{$name}}
<br>
 {{$message}}

@component('mail::button', ['url' => ''])
 Contact Me
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
