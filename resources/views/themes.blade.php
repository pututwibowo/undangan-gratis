@php
    $dataDB = [
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'title' => 'Dayak Toraja',
            'category' => 'Wedding & Engagement',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-2.jpg',
            'title' => 'Vintage Forest',
            'category' => 'Party & Dinner',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-3.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Wedding & Engagement',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Party & Dinner',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-3.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Kids & Birthday',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Wedding & Engagement',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-2.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Kids & Birthday',
        ],
        [
            'img' => 'https://flowbite.com/docs/images/blog/image-1.jpg',
            'title' => 'Pastel Blue',
            'category' => 'Wedding & Engagement',
        ],
    ]
@endphp

<x-home-layout>
    <section class="px-32 pt-32 bg-teal-500 overflow-hidden">    
        <div class="flex flex-col md:flex-row gap-8">
            <div class="basis-2/3 space-y-6 text-white">
                <div class="text-4xl md:text-6xl font-bold leading-tight">
                    <p>Tema Undangan Digital yang Bisa di Custom</p>
                </div>

                <p class="text-base md:text-lg">Pilih dari koleksi template menakjubkan yang dapat diedit sesuka hati. Dengan desain undangan digital ini, tamu undangan tidak akan ragu untuk menghadiri acara Kamu!</p>

            </div>
            
            <div class="w-full md:w-1/3 -mb-32 mx-auto self-end ">
                <img src="{{ asset('images/undangan-digital-website.webp') }}" alt="undangan">
            </div>
        </div>
    </section>

    <nav class="flex px-32 py-3 bg-gray-200" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="#" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600">
                    <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                    </svg>
                Home
                </a>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>

                    <a href="#" class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2">Projects</a>
                </div>
            </li>

            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                    </svg>

                    <span class="ms-1 text-sm font-medium text-gray-500 md:ms-2">Flowbite</span>
                </div>
            </li>
        </ol>
    </nav>

    <div class="grid grid-cols-4 gap-4 mb-6 pt-20 px-32">
        @foreach ( $dataDB as $data)            
            <x-card 
                :img="$data['img']"
                :title="$data['title']"
                :category="$data['category']"
            />
        @endforeach
    </div>

    <div class="flex flex-col items-center mb-8">
        <!-- Help text -->
        <span class="text-sm text-gray-600 ">
            Showing <span class="font-semibold text-gray-900">1</span> to <span class="font-semibold text-gray-900">10</span> of <span class="font-semibold text-gray-900">100</span> Entries
        </span>

        <div class="inline-flex mt-2 xs:mt-0">
            <!-- Buttons -->
            <button class="flex items-center justify-center px-3 h-8 text-sm font-medium rounded-s text-white bg-gray-800 hover:bg-gray-900">
                <svg class="w-3.5 h-3.5 me-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                </svg>

                Prev
            </button>

            <button class="flex items-center justify-center px-3 h-8 text-sm font-medium text-white bg-gray-800 border-0 border-s border-gray-700 rounded-e hover:bg-gray-900">
                Next

                <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </button>
        </div>
    </div>
</x-home-layout>