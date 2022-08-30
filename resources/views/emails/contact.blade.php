@component('mail::message')
# Password reset

Please click the link below to reset your password.

@component('mail::button', ['url' => 'http://localhost:8000/login/password-reset'])
Reset password link
@endcomponent

<br>
{{ config('app.name') }} Team
@endcomponent
