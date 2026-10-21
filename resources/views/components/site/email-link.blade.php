@props([
    'subject' => 'Project enquiry for au2m8',
])

@php
    $composeUrl = 'https://mail.google.com/mail/?view=cm&fs=1&to='.rawurlencode('wynzyltayag@gmail.com').'&su='.rawurlencode($subject);
@endphp

<a href="{{ $composeUrl }}" target="_blank" rel="noopener noreferrer" {{ $attributes }}>
    {{ $slot }}
</a>
