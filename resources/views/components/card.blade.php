@props([
    'title',
    'category',
    'img',
])

<div {{ $attributes->merge(['class' => 'max-w-sm border rounded-lg shadow bg-gray-800 border-gray-700']) }} >
    <a href="#">
        <img class="rounded-t-lg" src="{{ $img }}" alt="" />
    </a>
    
    <div class="px-2">
        <a href="#">
            <h5 class="text-base md:text-xl font-bold tracking-tight text-white">{{ $title }}</h5>
        </a>
    
        <p class="text-xs md:text-sm font-normal text-gray-400">{{ $category }}</p>
    </div>
    
    <div class="px-2 pb-3">
        <div class="flex flex-col md:flex-row justify-between gap-2">
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Preview
            </a>
    
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Gunakan
            </a>
        </div>
    </div>
</div>