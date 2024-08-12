@props([
    'end', // years, mountIndex, days, hours, minutes, seconds
    ])
<div
    x-data="{
        days: 0,
        hours: 0,
        minutes: 0,
        seconds: 0,
        expired: false,
        endDate: null,

        init(){
            this.endDate = new Date({{ $end }}).getTime(); {{-- Ganti Tanggal--}} 
            this.updateCountdown();
            setInterval(() => {
                this.updateCountdown();
            }, 1000);
        },

        updateCountdown() {
            const now = new Date().getTime();
            const distance = this.endDate - now;

            if (distance < 0) {
                this.expired = true;
                return;
            }

            this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
            this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            this.seconds = Math.floor((distance % (1000 * 60)) / 1000);
        },
    }" 
    {{$attributes}}
>
    {{ $slot }}
</div>