<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <div class="mx-auto w-full p-3 bg-neutral-700 h-52">
            <div class="flex justify-between">
                <h1 class="text-xl sm:text-4xl font-bold text-left p-3 uppercase text-amber-500 my-auto">

                    Welcome Administrator <br>
                </h1>
                <img src="{{ asset('img/undraw_landing_page_re_6xev.svg') }}" class="w-64 sm:w-80 h-full mr-14 pt-3" alt="">
            </div>

        </div>

        {{-- <!-- Statistics Cards --> --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 p-4 gap-4">

            <div class="bg-neutral-600 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-amber-500 dark:border-gray-600 text-white font-medium group">

                <div
                    class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="stroke-current text-amber-500 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                        </path>
                    </svg>
                </div>

                <div class="text-right text-amber-300 font-semibold">
                    <p class="text-2xl">{{ $students->count() }}</p>
                    <p>Students</p>
                </div>
                
            </div>

            <div class="bg-neutral-600 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-amber-500 dark:border-gray-600 text-white font-medium group">
                <div
                    class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="stroke-current text-amber-500 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>

                <div class="text-right text-amber-300 font-semibold">
                    <p class="text-2xl">{{ $teachers->count() }}</p>
                    <p>Teachers</p>
                </div>
            </div>

            <div class="bg-neutral-600 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-amber-500 dark:border-gray-600 text-white font-medium group">
                <div
                    class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="stroke-current text-amber-500 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                    </svg>
                </div>
                <div class="text-right text-amber-300 font-semibold">
                    <p class="text-2xl">3</p>
                    <p>exams</p>
                </div>
            </div>

            <div class="bg-neutral-600 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-amber-500 dark:border-gray-600 text-white font-medium group">
                <div
                    class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="stroke-current text-amber-500 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>

                <div class="text-right text-amber-300 font-semibold">
                    <p class="text-2xl">0</p>
                    <p>Events</p>
                </div>
            </div>

            <div class="bg-neutral-600 dark:bg-gray-800 shadow-lg rounded-md flex items-center justify-between p-3 border-b-4 border-amber-500 dark:border-gray-600 text-white font-medium group">
                <div
                    class="flex justify-center items-center w-14 h-14 bg-white rounded-full transition-all duration-300 transform group-hover:rotate-12">
                    <svg width="30" height="30" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor"
                        class="stroke-current text-amber-500 dark:text-gray-800 transform transition-transform duration-500 ease-in-out">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                        </path>
                    </svg>
                </div>

                <div class="text-right text-amber-300 font-semibold">
                    <p class="text-2xl">{{ $courses->count() }}</p>
                    <p>Courses</p>
                </div>
            </div>

        </div>
        {{-- <!-- ./Statistics Cards --> --}}

        <div class="grid grid-cols-1 lg:grid-cols-2 p-4 gap-4">

            {{-- <!========================================== attendance chart ====================================================================> --}}
            
            <div id="chartContainer" style="height: 300px; width: 100%;"></div>

            {{-- <!=========================================== ./attendance chart =================================================================> --}}


            {{-- <!=========================================== events ====================================================================> --}}
            
            <div>
                <div class="rounded bg-gray-200 dark:bg-gray-800 p-3">
                    <div class="flex justify-between py-1 text-black dark:text-white">
                        <h3 class="text-sm font-semibold">Events</h3>
                        <svg class="h-4 fill-current text-gray-600 dark:text-gray-500 cursor-pointer"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M5 10a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4zm7 0a1.999 1.999 0 1 0 0 4 1.999 1.999 0 1 0 0-4z" />
                        </svg>
                    </div>

                    <div class="flex justify-center">
                        <div class="flex flex-col items-center space-y-2 py-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-calendar3-event" viewBox="0 0 16 16">
                                <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                                <path d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                            </svg> 
                            <p class="text-amber-500 font-normal text-xl uppercase">No events</p>

                        </div>
                    </div>

                    {{-- <div class="text-sm text-black dark:text-gray-50 mt-2">
                        <div
                            class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                            Delete all references from the wiki</div>
                        <div
                            class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                            Remove analytics code</div>
                        <div
                            class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                            Do a mobile first layout
                            <div class="flex justify-between items-start mt-2 ml-2 text-white text-xs">
                                <span class="bg-pink-600 rounded p-1 text-xs flex items-center">
                                    <svg class="h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24">
                                        <path
                                            d="M12 2c-.8 0-1.5.7-1.5 1.5v.688C7.344 4.87 5 7.62 5 11v4.5l-2 2.313V19h18v-1.188L19 15.5V11c0-3.379-2.344-6.129-5.5-6.813V3.5c0-.8-.7-1.5-1.5-1.5zm-2 18c0 1.102.898 2 2 2 1.102 0 2-.898 2-2z" />
                                    </svg>
                                    2
                                </span>
                            </div>
                        </div>
                        <div
                            class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                            Check the meta tags</div>
                        <div
                            class="bg-white dark:bg-gray-600 hover:bg-gray-50 dark:hover:bg-gray-700 p-2 rounded mt-1 border-b border-gray-100 dark:border-gray-900 cursor-pointer">
                            Think more tasks for this example
                            <div class="text-gray-500 mt-2 ml-2 flex justify-between items-start">
                                <span class="text-xs flex items-center">
                                    <svg class="h-4 fill-current mr-1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 50 50">
                                        <path
                                            d="M11 4c-3.855 0-7 3.145-7 7v28c0 3.855 3.145 7 7 7h28c3.855 0 7-3.145 7-7V11c0-3.855-3.145-7-7-7zm0 2h28c2.773 0 5 2.227 5 5v28c0 2.773-2.227 5-5 5H11c-2.773 0-5-2.227-5-5V11c0-2.773 2.227-5 5-5zm25.234 9.832l-13.32 15.723-8.133-7.586-1.363 1.465 9.664 9.015 14.684-17.324z" />
                                    </svg>
                                    0/3
                                </span>
                            </div>
                        </div>
                        <p class="mt-3 text-gray-600 dark:text-gray-400">Add a card...</p>
                    </div> --}}
                </div>
            </div>

            {{-- <!======================================---- ./events =================================================================> --}}

        </div>

        

        {{-- <!==========================================-- Client Table ========================================================================--> --}}

        <div class="mt-4 mx-4">
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            <tr
                                class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                                <th class="px-4 py-3">Course</th>
                                <th class="px-4 py-3">Instructor</th>
                                <th class="px-4 py-3">No of Students</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">

                            <tr
                                class="bg-gray-50 dark:bg-gray-800 hover:bg-neutral-800 dark:hover:bg-gray-900 text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3">
                                    <div class="flex items-center text-sm">
                                        <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                                            <img class="object-cover w-full h-full rounded-full"
                                                src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&amp;q=80&amp;fm=jpg&amp;crop=entropy&amp;cs=tinysrgb&amp;w=200&amp;fit=max&amp;ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                alt="" loading="lazy" />
                                            <div class="absolute inset-0 rounded-full shadow-inner"
                                                aria-hidden="true"></div>
                                        </div>
                                        <div>
                                            <p class="font-semibold">Hans Burger</p>
                                            <p class="text-xs text-gray-600 dark:text-gray-400">10x Developer
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 py-3 text-sm">$855.85</td>
                               
                                <td class="px-4 py-3 text-sm">15-01-2021</td>
                            </tr>

                           
                        </tbody>
                    </table>
                </div>

                <div
                    class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                    <span class="flex items-center col-span-3"> Showing 21-30 of 100 </span>
                    <span class="col-span-2"></span>
                    <!-- Pagination -->
                    <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                        <nav aria-label="Table navigation">
                            <ul class="inline-flex items-center">
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Previous">
                                        <svg aria-hidden="true" class="w-4 h-4 fill-current"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">1</button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">2</button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 text-white dark:text-gray-800 transition-colors duration-150 bg-blue-600 dark:bg-gray-100 border border-r-0 border-blue-600 dark:border-gray-100 rounded-md focus:outline-none focus:shadow-outline-purple">3</button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">4</button>
                                </li>
                                <li>
                                    <span class="px-3 py-1">...</span>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">8</button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple">9</button>
                                </li>
                                <li>
                                    <button
                                        class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                        aria-label="Next">
                                        <svg class="w-4 h-4 fill-current" aria-hidden="true"
                                            viewBox="0 0 20 20">
                                            <path
                                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                clip-rule="evenodd" fill-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </li>
                            </ul>
                        </nav>
                    </span>
                </div>

            </div>
        </div>

        {{-- <!==========================================-- ./Client Table ========================================================================--> --}}
        
    </div>
    
</x-dashboard>

