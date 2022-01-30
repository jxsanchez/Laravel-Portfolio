@component('mail::message')

# New Contact Form Submitted by {{ $data["name"] }}

{{ $data["name"] }} ({{ $data["email"] }})

{{ $data["message"] }}

@endcomponent
