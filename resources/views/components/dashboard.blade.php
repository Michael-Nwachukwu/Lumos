<x-layout>

    {{-- <br><br><br> --}}

    <div x-data="setup()" :class="{ 'dark': isDark }">
        <div
            class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased bg-white dark:bg-gray-700 text-black dark:text-white">

            <!-- Sidebar -->
            <div
                class="fixed flex flex-col top-20 left-0 w-14 md:w-64 bg-neutral-800 h-full transition-all duration-300 border-none sidebar z-30 hover:w-64">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col flex-grow p-3">

                    <ul class="space-y-2 mt-5">

                        @if (auth()->user()->role == 0)
                            <li>
                                <a href="/student-dashboard"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 1)
                            <li>
                                <a href="/teacher-dashboard"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 2)
                            <li>
                                <a href="/admin-dashboard"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="ml-3">Dashboard</span>
                                </a>
                            </li>
                        @endif

                        <li>
                            <button type="button"
                                class="flex items-center p-2 w-full text-base font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-slate-200 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                    sidebar-toggle-item>Academic</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-example" class="hidden py-2 space-y-2">

                                @if (auth()->user()->role == 2)
                                    <li>
                                        <a href="/admin-dashboard/course"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Create
                                            new course</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/admin-dashboard/syllabus') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Syllabus</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/admin-dashboard/homework') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Homework</a>
                                    </li>
                                @endif

                                @if (auth()->user()->role == 1)
                                    <li>
                                        <a href="teacher-dashboard/attendance"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Student
                                            Attendance</a>
                                    </li>


                                    <li>
                                        <a href="{{ url('/teacher-dashboard/syllabus') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Syllabus</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/teacher-dashboard/homework') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Homework</a>
                                    </li>
                                @endif

                                @if (auth()->user()->role == 0)
                                    <li>
                                        <a href="{{ url('/student-dashboard/syllabus') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Syllabus</a>
                                    </li>

                                    <li>
                                        <a href="{{ url('/student-dashboard/homework') }}"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Homework</a>
                                    </li>
                                @endif


                            </ul>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center p-2 w-full text-base font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700"
                                aria-controls="dropdown-example" data-collapse-toggle="dropdown-example1">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-slate-200 dark:text-gray-400 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Exam</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="dropdown-example1" class="hidden py-2 space-y-2">

                                @if (auth()->user()->role == 2)
                                    <li>
                                        <a href="/admin-dashboard/examroutine"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            routine</a>
                                    </li>


                                    <li>
                                        <a href="/admin-dashboard/examresult"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            result</a>
                                    </li>

                                    <li>
                                        <a href="/admin-dashboard/examrule"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            rule</a>
                                    </li>
                                @endif

                                @if (auth()->user()->role == 1)
                                    <li>
                                        <a href="/teacher-dashboard/examroutine"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            routine</a>
                                    </li>


                                    <li>
                                        <a href="/teacher-dashboard/examresult"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            result</a>
                                    </li>
                                @endif

                                @if (auth()->user()->role == 0)
                                    <li>
                                        <a href="/student-dashboard/examroutine"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            routine</a>
                                    </li>

                                    <li>
                                        <a href="/student-dashboard/examresult"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Exam
                                            result</a>
                                    </li>
                                @endif

                            </ul>
                        </li>

                        @if (auth()->user()->role == 2)
                            <li>
                                <button type="button"
                                    class="flex items-center p-2 w-full text-base font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700"
                                    aria-controls="dropdown-example" data-collapse-toggle="dropdown-example3">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-slate-200 dark:text-gray-400 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 text-left whitespace-nowrap"
                                        sidebar-toggle-item>Users</span>
                                    <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <ul id="dropdown-example3" class="hidden py-2 space-y-2">

                                    <li>
                                        <a href="/admin-dashboard/students"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Students</a>
                                    </li>

                                    <li>
                                        <a href="/admin-dashboard/teachers"
                                            class="flex items-center p-2 pl-11 w-full text-xs font-normal text-slate-200 rounded-lg transition duration-75 group hover:bg-neutral-800 dark:text-white dark:hover:bg-gray-700">Teachers</a>
                                    </li>

                                </ul>
                            </li>
                        @endif

                        {{-- inboxes --}}

                        @if (auth()->user()->role == 2)
                            <li>
                                <a href="/admin-dashboard/inbox"
                                    class="flex items-center p-2 font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                    <span
                                        class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 1)
                            <li>
                                <a href="/teacher-dashboard/inbox"
                                    class="flex items-center p-2 font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                    <span
                                        class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                </a>
                            </li>
                        @endif

                        @if (auth()->user()->role == 0)
                            <li>
                                <a href="/student-dashboard/inbox"
                                    class="flex items-center p-2 font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                                    <span
                                        class="inline-flex justify-center items-center p-3 ml-3 w-3 h-3 text-sm font-medium text-blue-600 bg-blue-200 rounded-full dark:bg-blue-900 dark:text-blue-200">3</span>
                                </a>
                            </li>
                        @endif

                        {{-- ======================== end inbox ================== --}}

                        {{-- ================ admin publish announcment =========== --}}

                        @if (auth()->user()->role == 2)
                            <li>
                                <a href="#"
                                    class="flex items-center p-2 font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z">
                                        </path>
                                        <path
                                            d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z">
                                        </path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Publish Announcment</span>

                                </a>
                            </li>
                        @endif

                        {{-- ================ end admin publish announcment =========== --}}

                        {{-- ================ event links starts ======== =========== --}}

                        @if (auth()->user()->role == 2)
                            <li>
                                <a href="/admin-dashboard/event"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Event</span>
                                </a>
                            </li>
                        @endif


                        @if (auth()->user()->role == 1)
                            <li>
                                <a href="/teacher-dashboard/event"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Event</span>
                                </a>
                            </li>
                        @endif


                        @if (auth()->user()->role == 0)
                            <li>
                                <a href="/student-dashboard/event"
                                    class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                    <svg aria-hidden="true"
                                        class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    <span class="flex-1 ml-3 whitespace-nowrap">Event</span>
                                </a>
                            </li>
                        @endif

                        <li>
                            <a href="#"
                                class="flex items-center p-2 text-base font-normal text-slate-200 rounded-lg dark:text-white hover:bg-neutral-800 dark:hover:bg-gray-700">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-slate-200 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <form class="inline" method="POST" action="/logout">
                                    @csrf
                                    <button type="submit py-2">
                                        <i class="fa-solid fa-door-closed px-2"></i>
                                        Logout
                                    </button>
                                </form>
                            </a>
                        </li>

                    </ul>

                    @if (auth()->user()->role == 0)
                        <div id="dropdown-cta" class="p-4 mt-6 bg-blue-50 rounded-lg dark:bg-blue-900"
                            role="alert">
                            <div class="flex items-center mb-3">
                                <span
                                    class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                                    data-collapse-toggle="dropdown-cta" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>



                            <p class="mb-3 text-sm text-blue-900 dark:text-blue-400">
                                Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a
                                limited time in your profile.
                            </p>

                        </div>
                    @endif


                    @if (auth()->user()->role == 1)
                        <div id="dropdown-cta" class="p-4 mt-6 bg-blue-50 rounded-lg dark:bg-blue-900"
                            role="alert">
                            <div class="flex items-center mb-3">
                                <span
                                    class="bg-orange-100 text-orange-800 text-sm font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-orange-200 dark:text-orange-900">Beta</span>
                                <button type="button"
                                    class="ml-auto -mx-1.5 -my-1.5 bg-blue-50 text-blue-900 rounded-lg focus:ring-2 focus:ring-blue-400 p-1 hover:bg-blue-200 inline-flex h-6 w-6 dark:bg-blue-900 dark:text-blue-400 dark:hover:bg-blue-800"
                                    data-collapse-toggle="dropdown-cta" aria-label="Close">
                                    <span class="sr-only">Close</span>
                                    <svg aria-hidden="true" class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>



                            <p class="mb-3 text-sm text-blue-900 dark:text-blue-400">
                                Preview the new Flowbite dashboard navigation! You can turn the new navigation off for a
                                limited time in your profile.
                            </p>

                        </div>
                    @endif

                </div>
            </div>
            <!-- ./Sidebar -->


            {{ $slot }}


        </div>

    </div>


</x-layout>

{{-- tw comp script --}}
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.0/dist/alpine.min.js" defer></script>


<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<script type="text/javascript">
    window.onload = function() {
        var chart = new CanvasJS.Chart("chartContainer", {
            title: {
                text: "Attendance"
            },
            data: [{
                // Change type to "doughnut", "line", "splineArea", etc.
                type: "doughnut",
                dataPoints: [{
                        label: "Present",
                        y: 10
                    },
                    {
                        label: "Absent",
                        y: 15
                    },
                ]
            }]
        });
        chart.render();
    }
</script>
