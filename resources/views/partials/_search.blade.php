{{-- search component --}}

<div class=" py-5 sm:p-8">
    <form class="mx-5" action="/courses">
        <label for="default-search"
            class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>
        <div class="relative">
            <div class="flex absolute inset-y-0 left-0 items-center pl-1 xs:pl-3 pointer-events-none">
                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="search" id="default-search" name="search"
                class="block p-4 pl-6 xs:pl-10 w-full text-sm text-slate-200 
                            font-bold rounded-lg focus:bg-transparent 
                            focus:text-black dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 placeholder:text-xs "
                placeholder="Search Courses, Categories..." required="" style="background-color:#ede7e2">
            <button type="submit"
                class="text-white absolute right-2.5 bottom-2.5 bg-neutral-800 hover:bg-transparent hover:text-black focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-xl text-sm px-5 sm:px-8 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
        </div>
    </form>
</div>
