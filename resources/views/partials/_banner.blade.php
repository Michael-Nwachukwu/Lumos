  {{-- <br><br><br> --}}
  <section>
    {{-- carousel component --}}

    <div id="animation-carousel" class="relative" data-carousel="static">

        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden md:h-[35rem]">

            <!-- Item 1 -->
            <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform"
                data-carousel-item="" style="">

                <div class="text-red-400 top-11 md:top-14 z-40 text-right absolute p-5 md:p-20">
                    <span class="text-3xl md:text-7xl uppercase">the easiest way to learn "in demand skills - with
                    </span>
                    <span class="inline-flex items-center space-x-4">
                        <span class="text-red-500 font-bold text-3xl md:text-7xl uppercase">lumos</span>

                        <button onclick="window.location.href='/register'" class="bg-black text-white px-12 py-5 text-amber-400  hover:bg-amber-500 hover:text-black">
                            <span class="button-content font-bold">Get Started</span>
                        </button>
                    </span>
                    <p class="lead text-xl text-black mt-6 hidden md:block">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Voluptas nihil dolores aliquid necessitatibus expedita corrupti nostrum ea
                        ducimus ipsam molestias. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Officiis,
                        praesentium quis dolores voluptates dolorum nostrum voluptate tempore repellendus magnam
                        cumque? </p>
                </div>

                <img src="{{ asset('img/books-1155565_1920.jpg') }}"
                    class="absolute block w-full blur-sm -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>

            <!-- Item 2 -->
            <div class="duration-200 ease-linear absolute inset-0 transition-all transform -translate-x-full z-10"
                data-carousel-item="">

                <img src="{{ asset('img/puzzle-removebg-preview.png') }}" class="absolute block right-0 top-20 z-40 h-4/6" alt="...">

                <div class="mx-auto top-11 md:top-48 z-40 absolute p-5 md:p-20 space-y-6">

                    <div class="flex flex-col items-center justify-center pl-4">

                        <span class="text-xl text-neutral-800 font-bold uppercase">education and training organisations
                        </span>
                        
                        <span class="text-3xl md:text-6xl uppercase text-white font-bold">Browse The Best Courses</span>

                    </div>

                    {{-- search component --}}
                    @include('partials._search')
                    
                   
                </div>

                <img src="{{ asset('img/digitization-5353007_1920.jpg') }}"
                    class="absolute block w-full blur-sm -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>

            <!-- Item 3 -->
            <div class="duration-200 ease-linear absolute inset-0 transition-all transform translate-x-0 z-20"
            data-carousel-item="active">
                <div class="text-black top-14 z-40 text-5xl font-bold absolute p-20 uppercase">
                    No age barriers. old, young and all differences are welcome to learn with us. 
                    <div class="flex justify-center">
                        <img src="{{ asset('img/lumosBOW-removebg-preview.png') }}" class="mt-8" alt="LUMOS">
                    </div>
                </div>
                <img src="{{ asset('img/grandmother-1822560_1920.jpg') }}"
                    class="absolute block w-full grayscale -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>

            <!-- Item 4 -->
            <div class="duration-200 ease-linear absolute inset-0 transition-all transform translate-x-full z-10"
                data-carousel-item="">
                <div class="text-white bottom-0 z-40 text-5xl font-bold absolute p-20 uppercase">
                   explore our new kiddies musical. let your kid enroll in our musica course and get them proficient in no time. sign up to get started 
                </div>
                <img src="{{ asset('img/toddler-5166749_1920.jpg') }}"
                    class="absolute block w-full blur-sm -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                    alt="...">
            </div>

        </div>

        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev="">
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                    </path>
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>

        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next="">
            <span
                class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800"
                    fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                    </path>
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>

    </div>

</section>