{{-- @props(['enrolled']) --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- flowbite link --}}
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    {{-- splide css --}}
    <link rel="stylesheet" href=" {{ asset('splide-4.1.3\splide-4.1.3\dist\css\splide-core.min.css') }} ">

    {{-- AOS CSS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    {{-- custom css --}}
    <link rel="stylesheet" href=" {{ asset('css/styles.css') }}">

    {{-- font awesome css link --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- ggogle font raleway --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">


    {{-- tailwind css cdn  --}}
    @vite('resources/css/app.css')

    {{-- splide auto scroll extension --}}
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js">
    </script>

    <title>Lumos</title>

</head>

<body {{ $attributes->merge(['class'  => "relative"]) }}>

    {{-- include preloader --}}
    {{-- @include('partials._preloader') --}}

    <nav class="backdrop-blur-md px-2 sm:px-4 py-1.5 w-full fixed z-30 top-0 left-0">

        <div class="container flex justify-between items-center mx-auto">

            <a href="/" class="flex items-center" data-summari-detected="true">
                <img src="{{ asset('img/lumos_pink_x-removebg-preview.png') }}" class="h-4 xs:h-6 sm:h-6" alt="LUMOS">
            </a>

            <div class="flex md:order-2">
                {{-- <button class="learn-more">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text text-white">Get started</span>
                </button> --}}

                @auth
                    <div class="flex flex-row-reverse items-center gap-2 sm:gap-3">
                        <p class="font-bold uppercase text-xs sm:text-lg text-[#f97760]">
                            Welcome {{ auth()->user()->firstname }}
                        </p>

                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                            data-dropdown-placement="bottom-start" 
                            class="w-5 h-5 xs:w-7 xs:h-7 sm:w-10 sm:h-10 rounded-full cursor-pointer @if( auth()->user()->role == 0 && auth()->user()->course) ring-2 ring-green-500 @else ring-2 ring-red-500 @endif"
                            src=" {{ auth()->user()->profilepicture ? asset('storage/' . auth()->user()->profilepicture) : asset('img/undraw_pic_profile_re_i9i4.svg') }}" alt="User dropdown">
                           
                        <!-- Dropdown menu -->
                        <div id="userDropdown"
                            class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600"
                            data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom-start"
                            style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 177px);">
                            <div class="py-3 px-4 text-sm text-gray-900 dark:text-white">
                                <div>{{ auth()->user()->firstname . auth()->user()->lastname }}</div>
                                <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                            </div>
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">

                                @if (auth()->user()->role == 2)
                                    <li>
                                        <a href="/admin-dashboard"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                @endif

                                
                                @if (auth()->user()->role == 1)
                                    <li>
                                        <a href="/teacher-dashboard"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                @endif

                                
                                @if (auth()->user()->role == 0)

                                    {{-- @if ($enrolled && $enrolled->where('user_id', auth()->id())->exists())
                                        <li>
                                            <a href="/student-dashboard"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                    @else
                                        <p class="text-xs p-2 text-center font-bold text-red-700">Enroll to a Course to continue</p>
                                    @endif --}}

                                    @if (auth()->user()->course != null)
                                        <li>
                                            <a href="/student-dashboard"
                                                class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                        </li>
                                    @else
                                        <p class="text-xs p-2 text-center font-bold text-red-700">Enroll to a Course to continue</p>
                                    @endif
                                    
                                @endif

                                {{-- @if (auth()->user()->course)

                                    <li>
                                        <a href="#"
                                            class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                    </li>
                                    
                                @endif --}}
                                
                            </ul>
                            <div class="py-1 bg-stone-700 text-white">
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit py-2">
                                        <i class="fa-solid fa-door-closed px-2"></i>
                                        Logout
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div>

                    {{-- links to show if user isnt --}}
                @else
                    <button onclick="window.location.href='/register'" class="bg-[#F97760] text-black px-10 py-3.5 hover:bg-black hover:text-white hidden lg:block">
                        <span class="button-content font-bold">Get Started</span>
                    </button>
                @endauth

               

                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" aria-expanded="false">

                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">

                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd">
                        </path>
                    </svg>

                </button>

            </div>

            {{-- style="border-radius: 1.625rem; background-color:#ede7e2" --}}

            <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1 bg-[#fb9e8d] bg-opacity-90 md:bg-transparent" id="navbar-sticky">

                <ul
                    class="flex flex-col mt-4 md:flex-row md:space-x-2 items-center lg:space-x-8 md:mt-0 pt-2 md:text-sm md:font-medium md:border-0 uppercase text-black md:text-[#F97760] text-opacity-80">

                    <li
                        class="py-4 px-6 font-bold text-xs hover:text-[#b6050b] hover:-translate-y-1 hover:scale-110 ease-in-out delay-150 duration-500">
                        <a href="/" class="block md:p-0 dark:text-white" aria-current="page"
                            data-summari-detected="true">Home</a>
                    </li>

                    <li
                        class="font-bold text-xs hover:text-[#b6050b] hover:-translate-y-1 hover:scale-110 ease-in-out delay-150 duration-500 py-4 px-6">
                        <a href="#"
                            class="block md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            data-summari-detected="true">About</a>
                    </li>

                    <li
                        class="font-bold text-xs hover:text-[#b6050b] hover:-translate-y-1 hover:scale-110 ease-in-out delay-150 duration-500 py-4 px-6">
                        <a href="#"
                            class="block md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            data-summari-detected="true">Contact</a>
                    </li>

                    <li class="sm:hidden my-5">
                        <button onclick="window.location.href='/register'" class="bg-black text-white px-10 py-3.5 hover:bg-[#F97760] hover:text-white">
                            <span class="button-content font-bold">Get Started</span>
                        </button>
                    </li>

                </ul>
            </div>

        </div>
    </nav>

    
    {{-- slot in web contents --}}
    {{ $slot }}
    
    <x-flash class="z-50 top-64 right-10 absolute" />

</body>

{{-- jquery cdn --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

 <!-- jQuery -->
 <script src="{{ asset('js/jquery-3.0.0.min.js') }}"></script>
 <script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>

{{-- flowbite js --}}
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>

{{-- AOS SCRIPT --}}
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

{{-- flas.js files --}}
<script src="{{ asset('js/flash.min.js') }}"></script>
<script src="{{ asset('js/flash.jquery.min.js') }}"></script>

{{-- splide js --}}
<script src=" {{ asset('splide-4.1.3\splide-4.1.3\dist\js\splide.min.js') }}"></script>

{{-- autoscroll extension --}}
<script src=" {{ asset('splide-extension-auto-scroll-master\dist\js\splide-extension-auto-scroll.min.js') }}"></script>

{{-- font awesome script --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
    integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(window).on('load', function() { // makes sure the whole site is loaded 
        $('#mypreloader').fadeOut(); // will first fade out the loading animation 
        $('#mypreloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(350).css({
            'overflow': 'visible'
        });
    })

    const splider = new Splide('#slider1', {
        type: 'loop',
        drag: 'free',
        focus: 'center',
        perPage: 3,
        gap: 0.5,
        autoScroll: {
            speed: 1.5,
        },
        breakpoints: {
            1200: {
                perPage: 2,
                gap: '0'
            },
            640: {
                perPage: 1,
                gap: 0
            },
        },
    });

    splider.mount(window.splide.Extensions);

    var splide = new Splide('.splide', {
        type: 'loop',
        perPage: 3,
        gap: '0',
        perMove: 1,
        breakpoints: {
            1200: {
                perPage: 2,
                gap: '0'
            },
            640: {
                perPage: 1,
                gap: 0
            },
        },
    });

    splide.mount();

    // AOS initialize
    AOS.init();

</script>

</html>
