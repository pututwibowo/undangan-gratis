<div class="pb-20">
    <nav class="bg-gray-100 fixed w-full z-20 top-0 start-0 border-b text-gray-900 border-gray-200">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo">

                <span class="hidden md:inline self-center text-2xl font-semibold whitespace-nowrap">Undangan Gratis</span>
            </a>
            
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <a href="{{ route('login') }}" class="hidden md:block">
                    <button type="button" class="inline-flex items-center justify-center gap-1 px-5 py-2.5 me-0 md:me-2 text-sm font-medium text-center rounded-lg text-white drop-shadow-md bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-400">
                        Masuk
    
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                        </svg>                      
                    </button>
                </a>

                <a href="{{ route('register') }}" class="hidden md:block">
                    <button type="button" class="inline-flex items-center justify-center px-5 py-2.5 me-0 md:me-2 text-sm font-medium text-center rounded-lg text-white drop-shadow-md bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-500">
                        Daftar & Coba Gratis
    
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </a>

                <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden" aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-800 md:bg-gray-100 border-gray-700  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <li>
                        <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:text-blue-500" aria-current="page">Home</a>
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-100 md:text-gray-900 md:hover:text-gray-600 md:p-0">About</a>
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-100 md:text-gray-900 md:hover:text-gray-600 md:p-0">Services</a>
                    </li>

                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-100 md:text-gray-900 md:hover:text-gray-600 md:p-0">Contact</a>
                    </li>

                    <li class="md:hidden">
                        <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">
                    </li>

                    <li class="mb-2 flex flex-col gap-3 block md:hidden">
                        <div>
                            <a href="{{ route('login') }}">
                                <button type="button" class="inline-flex items-center justify-center gap-1 w-full px-5 py-3 me-0 md:me-2 text-sm font-medium text-center rounded-lg text-white drop-shadow-md bg-teal-400 hover:bg-teal-500 focus:ring-4 focus:outline-none focus:ring-teal-400">
                                    Masuk
                
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15M12 9l3 3m0 0-3 3m3-3H2.25" />
                                    </svg>                      
                                </button>
                            </a>
                        </div>
                        
                        <div>
                            <a href="{{ route('register') }}">
                                <button type="button" class="inline-flex items-center justify-center w-full px-5 py-3 me-0 md:me-2 text-sm font-medium text-center rounded-lg text-white drop-shadow-md bg-gray-600 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-500">
                                    Daftar & Coba Gratis
                
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Section Hero -->
    <section class="p-10 pt-28 bg-teal-400">    
        <div class="flex flex-col md:flex-row gap-8">
            <div class="basis-2/3 space-y-6 text-white">
                <div class="text-4xl md:text-6xl font-bold leading-tight">
                    <p>Buat Undangan Online Digital Website Untuk </p>

                    <p class="text-amber-200">Pernikahan</p>
                </div>

                <p class="text-base md:text-lg">Buat undangan online digital website custom dengan Satu Momen, meski kamu gaptek tetap bisa bikin undangan website sendiri dari smart phone. Cukup pilih tema, edit detail acara, upload foto, semua bisa selesai dalam hitungan menit.</p>
                
                <div class="flex flex-col md:flex-row gap-2 ">
                    <div>                        
                        <a href="{{ route('register') }}">
                            <button type="button" class="inline-flex items-center justify-center px-5 py-2.5 me-0 md:me-2 text-sm font-medium text-center rounded-lg text-white drop-shadow-md bg-gray-800 hover:bg-gray-900 focus:ring-4 focus:outline-none focus:ring-gray-500">
                                Daftar & Coba Gratis
    
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </button>
                        </a>
                    </div>
                    
                    <div>
                        <a href="https://wa.me/+6289520182077" target="_blank">
                            <button type="button" class="inline-flex justify-center items-center px-5 py-2.5 text-center font-medium rounded-lg text-sm text-gray-900 drop-shadow-md bg-gray-100 hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 me-2" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                                </svg>
                                
                                Konsultasi Gratis
                            </button>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="w-full md:w-1/2 mx-auto self-center ">
                <img src="{{ asset('images/aplikasi-undangan-digital-website.webp') }}" alt="undangan">
            </div>
        </div>
    </section>

    <section class="mt-10 p-2">
        <div class="flex flex-col md:flex-row gap-6">
            <div class="basis-1/2">
                <img class="md:w-3/4 mx-auto" src="{{ asset('images/reseller-undangan-digital-website-2.webp') }}" alt="Gambar 10 Menit Undangan Jadi">
            </div>

            <div class="basis-1/2 self-center px-5 md:pe-48 space-y-8 text-3xl md:text-4xl leading-tight text-gray-800">
                <p class="font-bold">Buat Undangan Online Digital Website 10 Menit Cukup Pake HP Aja</p>

                <p class="text-base">Buat undangan website praktis dan nyaman. Tanpa harus didepan laptop berjam-jam. Cukup pilih tema, edit detail acara, upload foto, semua bisa selesai dalam hitungan menit.</p>
            </div>
        </div>
    </section>

</div>
