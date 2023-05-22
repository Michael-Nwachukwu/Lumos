@props(['course'])
@props(['students'])

<li data-aos="zoom-in-right" data-aos-duration="1500" class="splide__slide p-5 ">
    <div class="mycard">
        
        <a href="/courses/{{ $course->id }}"
            class="flex flex-col items-center md:flex-row md:max-w-xl hover:animate-pulse dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

            <img class="object-cover w-full h-full md:h-96 md:w-1/2 md:rounded-none md:rounded-l-lg"
                style="border-radius: 50px;" src="{{ $course->courseimage ? asset('storage/' . $course->courseimage) : asset('img/board.png') }}" alt="">
                
            <div class="flex flex-col justify-between p-4 leading-normal mr-10">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-amber-400 dark:text-white">
                    {{ $course->coursename }}
                </h5>
                <p class="mb-3 font-normal text-amber-200 dark:text-gray-400">
                    
                    {{ $course->description }}

                </p>

                {{-- <div class="flex flex-row items-center justify-around mt-3 space-x-5 text-amber-100">

                    <div class="text-xs">
                        <div class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                        </div>

                        <p class="pt-1"> <span>
                            @php
                                $count = DB::table('users')
                                    ->where('role', 0)
                                    ->where('course', $course->id)
                                    ->get();
                            @endphp
                        </span> {{ $count->count() }} </p>

                    </div>

                    <div class="text-xs">
                        <div class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                        </div>

                        <p class="pt-1"> <span>10</span> reviews</p>
                    </div>

                </div> --}}

                <div class="flex flex-row items-center justify-around mt-3 space-x-5 text-amber-100">
        
                    <div class="text-xs">
                        <div class="inline-flex items-end justify-start space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-person" viewBox="0 0 16 16">
                                <path
                                    d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                            </svg>
                            @php
                                $students = DB::table('users')
                                    ->where('role', 0)
                                    ->where('course', $course->id)
                                    ->get();
                            @endphp

                            <p class="pt-1"> 
                                <span>
                                    {{ $students->count() }} Students
                                </span> 
                            </p>
                        </div>

                        {{-- <p class="pt-1"> <span>10</span> students</p> --}}

                    </div>

                    <div class="text-xs">
                        <div class="inline-flex items-end justify-start space-x-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                <path
                                    d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                <path
                                    d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                            </svg>
                            <p class="pt-1"> <span>10</span> reviews</p>
                        </div>

                    </div>

                </div>

            </div>

        </a>
    </div>
</li>
