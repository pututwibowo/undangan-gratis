@prepend('fonts')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
@endprepend

<div class="font-[Roboto] flex flex-col justify-center gap-4 h-full p-10">
	<x-timeline>
		<x-timeline.item date="5 February 2024" title="Akad Nikah" time="10:00 WIB"/>
		<x-timeline.item date="19 Maret 2024" title="Resepsi Nikah" time="08:00 WIB"/>
		<x-timeline.item date="2 April 2024" title="Ngunduh Mantu" time="09:00 WIB"/>
	</x-timeline>

	<x-countdown class="grid grid-cols-4 gap-2 row-start-9 col-span-6 text-center" end="2024, 9, 11, 10, 30, 0">
		<x-countdown.item class="flex flex-col gap-0 p-1" text="Hari" data="days"/>
		<x-countdown.item class="flex flex-col p-1" text="Jam" data="hours"/>
		<x-countdown.item class="flex flex-col p-1" text="Menit" data="minutes"/>
		<x-countdown.item class="flex flex-col p-1" text="Detik" data="seconds"/>
	</x-countdown>
</div>

