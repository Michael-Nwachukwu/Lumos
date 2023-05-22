<x-layout>

    {{-- include carousel --}}
    @include('partials._banner')


    <article>

        <div data-aos="zoom-in-right" data-aos-duration="3000" class="">

            {{-- text --}}
            <div class="grid justify-items-center pt-10">
                <h5 class="text-2xl">Learn new skills</h5><br>
                <h1 class="text-4xl uppercase" style="margin-top: -20px"><span class="font-bold">Search</span>
                    Courses</h1>
            </div>

            {{-- include search from partials --}}
            @include('partials._search')


            {{-- include stats from partials --}}
            @include('partials._stats')

        </div>

    </article>

    {{-- courses section --}}
    <section class="splide mt-20 bg-stone-700 pt-8" aria-label="Splide Basic HTML Example"
        style="border-top-left-radius:50px; border-top-right-radius:50px;">

        {{-- heading and arrows --}}
        <div class="flex justify-between items-center px-10 mb-8">

            {{-- text --}}
            <div class="text-amber-500">
                <h5 class="text-2xl text-center">Learn new skills</h5><br>
                <h1 class="text-5xl font-bold uppercase" style="margin-top: -20px">
                    Popular<span class="font-bold"> Courses</span>
                </h1>
            </div>

            {{-- splide arrows --}}
            <div class="splide__arrows">
                <button class="splide__arrow splide__arrow--prev">
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
                <button class="splide__arrow splide__arrow--next">
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

        </div>

        {{-- courses list --}}
        <div class="splide__track mb-20">
            
            <ul class="splide__list">

                {{-- @if (count($listings) == 0)
                    <p style="color: red">no jobs available at this time</p>
                @endif --}}

                @foreach ($courses as $course)
                    {{-- listing card --}}
                    <x-course-card :course="$course" class="splide__slide"  />
                @endforeach

            </ul>

            <div class="flex justify-center mt-10">
                <a href="/courses" class="bg-amber-500 w-5/12 py-2 text-center rounded-xl font-bold">See all Courses</a>
            </div>


        </div>

        {{-- why you should choose us --}}
        <div class="bg-amber-300" style="border-top-left-radius:80px; border-top-right-radius:80px;">

            {{-- why you should choose lumos --}}
            <div class="pt-10 px-20">
                <h1 class="text-4xl md:text-7xl font-bold text-right">Why you should <br> choose Lumos </h1>
            </div>

            {{-- cards for reasons --}}
            <div class="grid grid-cols-1 sm:grid-cols-3 mb-20 sm:ml-10 p-5 space-y-3 justify-items-center">

                <div data-aos="zoom-in-down" data-aos-duration="3000" class="bg-neutral-800 p-6 max-w-sm rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                            clip-rule="evenodd"></path>
                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-amber-500 dark:text-white">Need a
                            help in
                            Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-amber-200 dark:text-gray-400">Go to this step by step guideline
                        process
                        on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-amber-200 hover:underline">
                        See our guideline
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                            </path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div data-aos="zoom-in-down" data-aos-duration="3000" class="bg-neutral-800 p-6 max-w-sm rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                            clip-rule="evenodd"></path>
                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-amber-500 dark:text-white">Need a
                            help in
                            Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-amber-200 dark:text-gray-400">Go to this step by step guideline
                        process
                        on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-amber-200 hover:underline">
                        See our guideline
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                            </path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                            </path>
                        </svg>
                    </a>
                </div>

                <div data-aos="zoom-in-down" data-aos-duration="3000" class="bg-neutral-800 p-6 max-w-sm rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <svg class="mb-2 w-10 h-10 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                        viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5 5a3 3 0 015-2.236A3 3 0 0114.83 6H16a2 2 0 110 4h-5V9a1 1 0 10-2 0v1H4a2 2 0 110-4h1.17C5.06 5.687 5 5.35 5 5zm4 1V5a1 1 0 10-1 1h1zm3 0a1 1 0 10-1-1v1h1z"
                            clip-rule="evenodd"></path>
                        <path d="M9 11H3v5a2 2 0 002 2h4v-7zM11 18h4a2 2 0 002-2v-5h-6v7z"></path>
                    </svg>
                    <a href="#">
                        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-amber-500 dark:text-white">Need a
                            help in
                            Claim?</h5>
                    </a>
                    <p class="mb-3 font-normal text-amber-200 dark:text-gray-400">Go to this step by step guideline
                        process
                        on how to certify for your weekly benefits:</p>
                    <a href="#" class="inline-flex items-center text-amber-200 hover:underline">
                        See our guideline
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z">
                            </path>
                            <path
                                d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z">
                            </path>
                        </svg>
                    </a>
                </div>

            </div>

            {{-- we employ the best tutors --}}
            <div class="pr-10">
                <h1 class="text-4xl md:text-7xl font-bold text-right">We employ the Best Tutors, <br> Professionals in
                    the field</h1>
                <p class="text-sm text-muted text-right">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Quasi, nobis ratione ipsam cupiditate libero, <br> architecto obcaecati explicabo, voluptates eaque
                    harum tempore? Iure nihil ipsa odit eos ad quo, in nisi.</p>
            </div>

            {{-- our teachers gallery --}}
            <div
                class="containertym flex flex-col md:flex-row justify-around items-center space-y-5 w-full mt-10 pb-10">

                <div class="cardtym card0">
                    <div class="bordertym">
                        <h2 class="text-2xl p-5">Al Pacino</h2>
                        <div class="iconstym">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>

                <div class="cardtym card1">
                    <div class="bordertym">
                        <h2 class="text-2xl p-5">Ben Stiller</h2>
                        <div class="iconstym">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                
                <div class="cardtym card2">
                    <div class="bordertym">
                        <h2 class="text-2xl p-5">Patrick Stewart</h2>
                        <div class="iconstym">
                            <i class="fa fa-codepen" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    {{-- browse courses by category --}}
    <section class="mb-20">

        <div class="container mx-auto">

            <h1 class="text-center font-bold text-5xl p-10">Browse Courses by Category</h1>

            <div class="mx-auto grid grid-cols-2 md:grid-cols-4 justify-items-center gap-8">

                <a href="/courses?tag=programming"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/web-dev-gif.gif') }}" alt="">
                    <p class="lead text-center mt-6">PROGRAMMING</p>
                </a>


                <a href="/courses?tag=artificial intelligence"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/120430.webp') }}" alt="">
                    <p class="lead text-center mt-6">ARTIFICIAL INTELLIGENCE</p>
                </a>

                <a href="/courses?tag=music"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/e2127b452438f766fab14c1480aebd0f.gif') }}"
                        alt="">
                    <p class="lead text-center mt-6">MUSIC</p>
                </a>

                <a href="/courses?tag=data"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/animation-in-web-design.gif') }}" alt="">
                    <p class="lead text-center mt-6">DATA</p>
                </a>

                <a href="/courses?tag=marketing"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36"
                        src="{{ asset('img/DT_G70_Digital-marketing-Animated-GIF-Icon-pack.gif') }}" alt="">
                    <p class="lead text-center mt-6">MARKETING</p>
                </a>

                <a href="/courses?tag=arts"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/cowboy.gif') }}" alt="">
                    <p class="lead text-center mt-6">ARTS</p>
                </a>

                <a href="/courses?tag=literature"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/web-dev-gif.gif') }}" alt="">
                    <p class="lead text-center mt-6">LITERATURE</p>
                </a>

                <a href="/courses?tag=seo"
                    class="p-6 w-52 bg-white rounded-xl border border-gray-200 shadow-xl hover:bg-gray-200 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                    <img class="w-full h-36" src="{{ asset('img/web-dev-gif.gif') }}" alt="">
                    <p class="lead text-center mt-6">SEO</p>
                </a>


            </div>

        </div>

    </section>

    {{-- gggg --}}
    <section class="bg-black text-white" style="border-top-left-radius:50px; border-top-right-radius:50px;">

        <div class="flex justify-end">
            <div class="p-3 md:p-12">
                <h1 class="text-5xl md:text-7xl font-bold text-right uppercase">
                    Lets make your <br> learning experience <br> seamless...easy!!
                </h1>

                <div class="flex justify-end">
                    <button class="learn-more text-right mt-5 ">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text text-white">Get started</span>
                    </button>
                </div>
            </div>

        </div>

        <div class="splide pb-20" id="slider1" role="group" aria-label="Splide Basic HTML Example">
            <div class="splide__track">
                <ul class="splide__list text-white">
                    <li class="splide__slide">
                        <div class="bg-dark text-white w-96 h-48 rounded-2xl border">
                            <div class="flex justify-center p-4">
                                <div class="space-y-8 text-sm">
                                    <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam,
                                        unde cum mollitia distinctio voluptates labore odit quasi temporibus minima
                                        architecto sit facilis? Deserunt amet nemo numquam recusandae odio sed.
                                        Aspernatur.
                                    </p>

                                    <div class="flex flex-row divide-x space-x-6 text-sm">
                                        <span>Sophie Weller</span>
                                        <span class="pl-3">web Development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="bg-dark text-white w-96 h-49 rounded-2xl border">
                            <div class="flex justify-center p-4">
                                <div class="space-y-8 text-sm">
                                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam,
                                        unde cum mollitia distinctio voluptates labore odit quasi temporibus minima
                                        architecto sit facilis? Deserunt amet nemo numquam recusandae odio sed.
                                        Aspernatur.
                                    </p>

                                    <div class="flex flex-row divide-x space-x-6 text-sm">
                                        <span>Sophie Weller</span>
                                        <span class="pl-3">web Development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="splide__slide">
                        <div class="bg-dark text-white w-96 h-49 rounded-2xl border">
                            <div class="flex justify-center p-4">
                                <div class="space-y-8 text-sm">
                                    <p class="lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam,
                                        unde cum mollitia distinctio voluptates labore odit quasi temporibus minima
                                        architecto sit facilis? Deserunt amet nemo numquam recusandae odio sed.
                                        Aspernatur.
                                    </p>

                                    <div class="flex flex-row divide-x space-x-6 text-sm">
                                        <span>Sophie Weller</span>
                                        <span class="pl-3">web Development</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        {{-- include footer --}}
        @include('partials._footer')

        <br><br>


    </section>

</x-layout>
