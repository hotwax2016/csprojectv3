@component('mail::message')
# Introduction

New task has been scheduled. Waiting for approvle.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
