@component('mail::message')
    # Hello you have amessage from {{ $name }}

    {{ $message }}

    Email: {{ $email }}, Phone: {{ $phone }}

    Thanks.
    {{ config('app.name') }}
@endcomponent
