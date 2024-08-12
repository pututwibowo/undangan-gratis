@prepend('fonts')
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
@endprepend

<div class="flex flex-col justify-center items-center gap-8 h-full px-4 py-8 font-[roboto]">
    <div class="mb-8 space-y-2 text-center text-white">
        <div class="text-3xl font-bold text-white"> Kirim Hadiah </div>

        <p class="text-center">Terima kasih telah menambah semangat kegembiraan pernikahan kami dengan kehadiran dan hadiah indah Anda.</p>
    </div>
    
    <div class="flex flex-col justify-center items-center">
        <div class="flex flex-col items-start gap-2">
            <div class="flex items-center gap-2 px-2 text-white text-md font-bold">
                <div class="h-10 w-10 rounded-lg bg-red-400"></div>

                <p>Bank : Nama Pengguna </p>
            </div>
            
            <x-clipboard copy-id="no-rekening-putri" copy-value="089520182077" />
        </div>

    </div>

    <div class="flex flex-col justify-center items-center">
        <div class="flex flex-col items-start gap-2">
            <div class="flex items-center gap-2 px-2 text-white text-md font-bold">
                <div class="h-10 w-10 rounded-lg bg-red-400"></div>

                <p>Bank : Nama Pengguna </p>
            </div>
            
            <x-clipboard copy-id="no-rekening-putra" copy-value="089520182077" />
        </div>

    </div>
</div>
