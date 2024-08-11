<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Buat Undangan Online Gratis' }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <div class="min-w-screen w-full">
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
                                <a href="/" class="block py-2 px-3 md:p-0 rounded text-gray-100 md:bg-transparent  {{ Request::is('/') ? 'bg-blue-700 md:text-blue-700' : 'md:text-gray-900 md:hover:text-gray-600' }}" aria-current="page">Home</a>
                            </li>
        
                            <li>
                                <a href="{{ route('tema') }}" class="block py-2 px-3 md:p-0 rounded text-gray-100 md:bg-transparent {{ Request::is('tema')?'bg-blue-700 md:text-blue-700':'md:text-gray-900 md:hover:text-gray-600' }}">Tema</a>
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
            
            <main>
                {{ $slot }}
            </main>

            <footer class="bg-gray-200">
                <div class="w-full mx-auto max-w-screen-xl p-4 flex flex-col items-center md:flex-row md:items-center md:justify-between">
                    <span class="text-sm text-gray-500 sm:text-center">
                        © 2023 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
                    </span>

                    <ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 sm:mt-0">
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">About</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
                        </li>
                        <li>
                            <a href="#" class="hover:underline">Contact</a>
                        </li>
                    </ul>
                </div>
            </footer>
        </div>

        @livewireScripts
    </body>
</html>
