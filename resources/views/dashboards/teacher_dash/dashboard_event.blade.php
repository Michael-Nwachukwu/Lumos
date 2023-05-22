<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <div class="mx-auto w-full p-3 bg-neutral-800 h-52">
            <div class="flex justify-between">
                <h1 class="text-xl sm:text-4xl font-bold text-left p-3 uppercase text-amber-500 my-auto">
                    Web development <span>program</span> <br>
                    <span class="text-xs">tutor: <span>Alex spannings</span></span>
                </h1>
                <img src="{{ asset('img/undraw_landing_page_re_6xev.svg') }}" class="w-64 sm:w-80 h-full mr-14 pt-3"
                    alt="">
            </div>

        </div>

        {{-- syllabus --}}
        <h1 class="text-3xl text-black font-bold text-left px-10 py-7">
            Events <br>
            <span class="text-xs text-gray-400 uppercase">School Events</span>
        </h1>

        <div class="flex justify-center">
            <div class="flex flex-col items-center space-y-5 py-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-calendar3-event" viewBox="0 0 16 16">
                    <path d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z"/>
                    <path d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg> 
                <p class="text-red-500 font-semibold text-xl uppercase ">No available events</p>

            </div>
        </div>

    </div>

</x-dashboard>
