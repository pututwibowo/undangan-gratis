@props(['col'])

<div class="swiper-slide">
    <div {{ $attributes->merge(['class' => 'mx-auto']) }}>
        {{ $slot }}
    </div>
</div>
