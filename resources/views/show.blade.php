<x-layout>
    <br><br><br>

    <header class="bg-black relative flex flex-col">

        <img src="{{ $course->courseimage ? asset('storage/' . $course->courseimage) : asset('img/giphy.gif') }} "
            alt="" class="w-full lg:hidden">

        <div class="max-w-4xl px-6 py-10 space-y-5 md:ml-14 ">

            <div class="flex flex-col justify-start items-center space-y-3">

                {{-- title --}}
                <div>
                    <h1 class="text-4xl text-amber-500 font-bold">
                        {{ $course->coursename }}
                    </h1>
                </div>

                {{-- description --}}
                <div>
                    <p class="lead text-lg text-amber-300 mr-5">
                        {{ $course->description }}
                    </p>
                </div>

            </div>

            <div class="grid justify-items-start space-y-3">

                {{-- bestseller ratings and student count --}}
                <div class="flex items-center space-x-3">
                    <span class="bg-amber-500 px-3 py-1 font-bold text-black text-sm">Bestseller</span>
                    <span class="inline-flex items-center space-x-2">
                        <p class="text-amber-500 font-bold text-xl">4.4</p>
                        <span class="inline-flex items-center text-amber-300 space-x-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>

                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-star" viewBox="0 0 16 16">
                                <path
                                    d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z" />
                            </svg>
                        </span>
                    </span>
                    <p class="text-white hidden lg:block">{{ $classmates->count() }} Students</p>
                </div>

                <div class="sm:hidden">
                    <span class="text-blue-700 hidden lg:block">(18,303 ratings)</span>
                    <p class="text-white hidden lg:block">{{ $classmates->count() }} Students</p>
                </div>

                {{-- created by --}}
                <div>
                    <p class="text-white">Taught by <span class="text-blue-700 text-underline">
                            {{ $course_teacher }} </span>
                    </p>
                </div>

                {{-- last updated and language --}}
                <div>
                    <div class="flex items-center text-white space-x-4">
                        <span class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-exclamation-octagon" viewBox="0 0 16 16">
                                <path
                                    d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" />
                                <path
                                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                            </svg>
                            <p>Last updated {{ $course->updated_at }}</p>
                        </span>
                        <span class="inline-flex items-center space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-globe" viewBox="0 0 16 16">
                                <path
                                    d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z" />
                            </svg>
                            <p>English</p>
                        </span>
                    </div>
                </div>
            </div>

            <div class="lg:hidden">
                <div class="text-left">
                    <p class="text-white text-3xl font-bold py-3">$ {{ $course->courseprice }}</p>
                </div>
                <div class="px-6 space-y-3">
                    {{-- @auth
                            @if (optional($enrollist))
                                <p class="text-white">
                                    You have an active enrollment, complete it and come back for more knowledge. We're counting on it
                                </p>
                            @endif

                            @if (!optional($enrollist))
                                <form action="/payment">
                                    @csrf
                                    <input name="course_id" type="hidden" value="{{ $course->id }}">
                                    <button class="w-full bg-gray-200 py-3">Enroll</button>
                                </form>
                            @endif
                    @endauth --}}
                    {{-- <button disabled class="w-full bg-gray-200 py-3">Enroll</button> --}}
                </div>
                <div class="text-center text-xs text-white my-2">
                    30-day money back guarantee
                </div>
            </div>

        </div>

    </header>

    <div class="hidden lg:block absolute w-96 bg-white top-0 right-0 mt-20 mr-10 shadow-2xl">
        <img src="{{ $course->courseimage ? asset('storage/' . $course->courseimage) : asset('img/giphy.gif') }} "
            alt="" class="w-full h-80">
        <div>
            <p class="text-black text-3xl font-bold pl-10 py-3">${{ $course->courseprice }}</p>
        </div>
        <div class="px-6 space-y-3">

            {{-- @foreach ($enrolled as $enrolled)
                @if ($enrollment->user_id == auth()->id())
                    <p>You are enrolled in {{ $enrollment->course->name }}</p>
                @endif
            @endforeach --}}

            @auth

                {{-- @if ($enrolled && $enrolled->where('user_id', auth()->id())->exists())
                    <p class="text-sm p-4 rounded-lg backdrop-blur-sm bg-stone-600 text-white">
                        You have an active enrollment, complete it and come back for more knowledge. We're counting on it
                    </p>
                @else
                    <form action="/payment">
                        @csrf
                        <input name="course_id" type="hidden" value="{{ $course->id }}">
                        <button class="w-full bg-gray-200 py-3">Enroll</button>
                    </form>
                @endif --}}

                @if (auth()->user()->course != null)
                    <p class="text-sm p-4 rounded-lg backdrop-blur-sm bg-stone-600 text-white">
                        You have an active enrollment, complete it and come back for more knowledge. We're counting on it
                    </p>
                @else
                    <form action="/payment">
                        @csrf
                        <input name="course_id" type="hidden" value="{{ $course->id }}">
                        <button class="w-full bg-gray-200 py-3">Enroll</button>
                    </form>
                @endif

            @else
                <button onclick="window.location.href='/login'" class="w-full bg-gray-200 py-3">Sign in to enroll</button>
            @endauth


        </div>
        <div class="text-center text-xs text-black my-2">30-day money back guarantee</div>

        <div class="px-6 mt-1 mb-5">
            <h5 class="text-md font-bold text-black py-2">This Course includes</h5>
            <ol class="text-black text-xs space-y-2">
                <li>21 hours on-demand video</li>
                <li>21 hours on-demand video</li>
                <li>21 hours on-demand video</li>
                <li>21 hours on-demand video</li>
                <li>21 hours on-demand video</li>
                <li>21 hours on-demand video</li>
            </ol>
        </div>
    </div>

    <section class="mb-16">

        {{-- <div
            class="p-4 lg:w-3/5 lg:ml-20 bg-white border-2 shadow-2xl mt-6 sm:p-8 dark:bg-gray-800 dark:border-gray-700">

            <h5 class="mb-2 text-xl font-bold text-black text-left dark:text-white">What you'll learn</h5>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm">
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Have an intermediate skill level of Python programming.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Use the Jupyter Notebook Environment.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Use the numpy library to create and manipulate arrays.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Use the pandas module with Python to create and structure data.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Learn how to work with various data formats within python, including: JSON,HTML, and MS Excel
                        Worksheets.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Create data visualizations using matplotlib and the seaborn modules with python.</p>
                </div>
                <div class="inline-flex items-baseline space-x-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                        <path
                            d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                    </svg>
                    <p>Have a portfolio of various data analysis projects.</p>
                </div>
            </div>
        </div> --}}

        <x-scope-card :scopeCsv="$course->scope" />

        <!-- External resources -->
        <div class="mt-8 mx-4">
            <div
                class="p-4 apps dark:bg-gray-800 dark:text-gray-50 border border-amber-300 dark:border-gray-500 rounded-lg shadow-md">
                <h4 class="text-lg font-semibold text-amber-500">Requirements for this course</h4>
                <ul>
                    <li class="mt-3">
                        <a class="flex items-center text-amber-200 dark:text-gray-100"
                            href="https://tailwindcomponents.com/component/sidebar-navigation-1" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Sidebar Navigation</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-amber-200 dark:text-gray-100"
                            href="https://tailwindcomponents.com/component/contact-form-1" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Will to learn</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-amber-200 dark:text-gray-100"
                            href="https://tailwindcomponents.com/component/trello-panel-clone" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Task Summaries</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-amber-200 dark:text-gray-100"
                            href="https://windmill-dashboard.vercel.app/" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Client Table</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-amber-200 dark:text-gray-100"
                            href="https://demos.creative-tim.com/notus-js/pages/admin/dashboard.html" target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Social Traffic</span>
                        </a>
                    </li>
                    <li class="mt-2">
                        <a class="flex items-center text-amber-200 dark:text-gray-100" href="https://mosaic.cruip.com"
                            target="_blank">
                            <svg width="20" height="20" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" class="transform transition-transform duration-500 ease-in-out">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 9l3 3m0 0l-3 3m3-3H8m13 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <span class="inline-flex pl-2">Section: Recent Activities</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ./External resources -->

    </section>

    @include('partials._footer')

    <div class="mt-10"></div>
</x-layout>
