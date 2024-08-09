@props([
    'title',
    'category',
    'img',
])

<div class="max-w-sm border rounded-lg shadow bg-gray-800 border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{ $img }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#">
            <h5 class="mb-1 text-xl font-bold tracking-tight text-white">{{ $title }}</h5>
        </a>

        <p class="mb-3 text-sm font-normal text-gray-400">{{ $category }}</p>
        
        <div class="flex justify-between">
            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-gray-600 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Preview
            </a>

            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                Gunakan
            </a>
        </div>
    </div>
</div>