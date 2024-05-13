<x-mail::message>
# Contact From Name: {{ $name }}
Email: {{ $email }}
Message: {{ $content }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
