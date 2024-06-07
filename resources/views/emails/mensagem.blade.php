@component('mail::message')
# Introduction

Vambora mandar email 

@component('mail::button', ['url' => ''])
clica aqui vei
@endcomponent

é nois,<br>
{{ config('app.name') }}
@endcomponent
