@component('mail::message')
# Introduction

New task has been scheduled. Waiting for approvle.

@component('mail::button', ['url' => 'www.google.com'])
Review The Task
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
