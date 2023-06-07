@component('mail::message')
# Welcome To SaeeAM Singh

This is a community of fellow developers and we love that you have joined us.


@component('mail::button', ['url' => 'https://www.instagram.com/saeeamsingh/'])
Instagram Page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
