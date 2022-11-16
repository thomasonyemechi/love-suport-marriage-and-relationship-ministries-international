@component('mail::message')
    # Hello Gidi you have a message from {{ $name }}

    {{ $message }}

    Email: {{ $email }}, Phone: {{ $phone }}

    Thanks.
    Bigger Technology
@endcomponent
