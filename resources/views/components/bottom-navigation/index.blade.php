<div {{ $attributes->merge(['class' => 'bg-white border-t border-gray-200 dark:bg-gray-700 dark:border-gray-600' ])}}>
    <div
        x-init ="
            new Swiper($el, {
                modules: [Navigation, Pagination],

                touchStartPreventDefault: false,

                pagination: {
                    el: '.swiper-pagination',
                },



                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },

                on: {
                    slideChange: function () {
                    updateNavigation(this);
                    },
                    init: function () {
                    updateNavigation(this);
                    },
                },
            });

            function updateNavigation(swiper) {
                const prev = swiper.navigation.prevEl.classList;
                const next = swiper.navigation.nextEl.classList;

                if (swiper.isBeginning) {
                    prev.add('hidden');
                } else {
                    prev.remove('hidden');
                }

                if (swiper.isEnd) {
                    next.add('hidden');
                } else {
                    next.remove('hidden');
                }
            }
        " 
        class="swiper h-full"
    >
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
            <!-- Slides -->
            {{ $container }}
        </div>
        
        {{ $slot }}
    </div>      
    
</div>