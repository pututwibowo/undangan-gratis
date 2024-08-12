<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        @stack('fonts')

        <!-- Scripts -->
        @vite(['resources/css/app.css','resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="font-sans antialiased w-full md:h-svh md:flex md:justify-center md:items-center bg-gray-900">
        <div class="relative mx-auto border-gray-800 dark:border-gray-800 bg-gray-800 md:border-[14px] md:rounded-[2.5rem] md:h-[600px] md:w-[300px]">
            <div class="hidden md:block h-[32px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
            <div class="hidden md:block h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
            <div class="hidden md:block h-[46px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
            <div class="hidden md:block h-[64px] w-[3px] bg-gray-800 dark:bg-gray-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
            <div class="relative md:rounded-[2rem] overflow-hidden md:w-[272px] h-svh md:h-[572px] bg-white dark:bg-gray-900">
                <!-- Page Content -->
                <main class="absolute flex flex-col h-full w-full pb-16">
                        {{ $slot }}
                </main>

                <!-- Page Bottom Navigation -->
                @persist('navigation')
                    <x-bottom-navigation class="absolute bottom-0 w-full h-16">
                        <x-slot:container>
                            <x-bottom-navigation.slide class="grid grid-cols-4 h-full max-w-lg  px-16 md:px-10">
                                <a wire:navigate href="{{ route('monocrome.preview') . '/salam' }}">
                                    <x-bottom-navigation.icon text="Salam">
                                        <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/> 
                                    </x-bottom-navigation.icon>
                                </a>
                                
                                <a wire:navigate href="{{ route('monocrome.preview') . '/acara' }}">
                                    <x-bottom-navigation.icon text="Acara">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </x-bottom-navigation.icon>
                                </a>

                                <a wire:navigate href="{{ route('monocrome.preview') . '/couple' }}">
                                    <x-bottom-navigation.icon text="Couple">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                    </x-bottom-navigation.icon>
                                </a>
                                
                                <a wire:navigate href="{{ route('monocrome.preview') . '/gallery' }}">
                                    <x-bottom-navigation.icon text="Gallery">
                                        <path fill-rule="evenodd" d="M13 10a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2H14a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                        
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12c0 .556-.227 1.06-.593 1.422A.999.999 0 0 1 20.5 20H4a2.002 2.002 0 0 1-2-2V6Zm6.892 12 3.833-5.356-3.99-4.322a1 1 0 0 0-1.549.097L4 12.879V6h16v9.95l-3.257-3.619a1 1 0 0 0-1.557.088L11.2 18H8.892Z" clip-rule="evenodd"/>
                                    </x-bottom-navigation.icon>
                                </a>
                            </x-bottom-navigation.slide>
                    
                            <x-bottom-navigation.slide class="grid grid-cols-4 h-full max-w-lg  px-16 md:px-10">
                                <a wire:navigate href="{{ route('monocrome.preview') . '/quote' }}">
                                    <x-bottom-navigation.icon text="Quote">
                                        <path fill-rule="evenodd" d="M6 6a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3H5a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2H6Zm9 0a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a3 3 0 0 1-3 3h-1a1 1 0 1 0 0 2h1a5 5 0 0 0 5-5V8a2 2 0 0 0-2-2h-3Z" clip-rule="evenodd"/>
                                    </x-bottom-navigation.icon>
                                </a>
                                
                                <a wire:navigate href="{{ route('monocrome.preview') . "/gift" }}">
                                    <x-bottom-navigation.icon text="Gift">
                                        <path d="M20 7h-.7c.229-.467.349-.98.351-1.5a3.5 3.5 0 0 0-3.5-3.5c-1.717 0-3.215 1.2-4.331 2.481C10.4 2.842 8.949 2 7.5 2A3.5 3.5 0 0 0 4 5.5c.003.52.123 1.033.351 1.5H4a2 2 0 0 0-2 2v2a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V9a2 2 0 0 0-2-2Zm-9.942 0H7.5a1.5 1.5 0 0 1 0-3c.9 0 2 .754 3.092 2.122-.219.337-.392.635-.534.878Zm6.1 0h-3.742c.933-1.368 2.371-3 3.739-3a1.5 1.5 0 0 1 0 3h.003ZM13 14h-2v8h2v-8Zm-4 0H4v6a2 2 0 0 0 2 2h3v-8Zm6 0v8h3a2 2 0 0 0 2-2v-6h-5Z"/>                          
                                    </x-bottom-navigation.icon>
                                </a>
                                
                                <a wire:navigate href="{{ route('monocrome.preview') . '/thanks' }}">
                                    <x-bottom-navigation.icon text="Thanks">
                                        <path d="m12.75 20.66 6.184-7.098c2.677-2.884 2.559-6.506.754-8.705-.898-1.095-2.206-1.816-3.72-1.855-1.293-.034-2.652.43-3.963 1.442-1.315-1.012-2.678-1.476-3.973-1.442-1.515.04-2.825.76-3.724 1.855-1.806 2.201-1.915 5.823.772 8.706l6.183 7.097c.19.216.46.34.743.34a.985.985 0 0 0 .743-.34Z"/>                          
                                    </x-bottom-navigation.icon>
                                </a>
                            </x-bottom-navigation.slide>
                        </x-slot>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev absolute bottom-1/4 left-4 md:left-2 z-10 p-2 rounded-full">
                            <svg class="size-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                            </svg>              
                        </div>

                        <div class="swiper-button-next absolute bottom-1/4 right-4 md:right-2 z-10 p-2 rounded-full">
                            <svg class="size-5 text-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>              
                        </div>
                    </x-bottom-navigation>
                @endpersist
            </div>
        </div>
        @livewireScripts
    </body>
</html>
