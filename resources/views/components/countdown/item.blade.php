@props([
    'text',
    'data', //days hours minutes seconds
    ])

<div {{ $attributes->merge(['class'=>'bg-gray-300 rounded-xl text-neutral-content'])}}>
    <span class="font-mono text-xl font-bold" x-text="{{ $data }}">
    </span>
    {{ $text }}
</div>