<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <x-dash-header :course="$course" :teacher_name="$teacher_name" />

        {{-- Inbox --}}
        <h1 class="text-3xl text-black font-bold text-left px-10 py-7">
            Events <br>
            <span class="text-xs text-gray-400 uppercase">School Events</span>
        </h1>

        {{-- @if (count($events) == 0)
            <div class="flex justify-center">
                <div class="flex flex-col items-center space-y-5 py-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                        class="bi bi-calendar3-event" viewBox="0 0 16 16">
                        <path
                            d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                        <path d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                    </svg>
                    <p class="text-red-500 font-semibold text-xl uppercase ">No available events</p>

                </div>
            </div>
        @endif --}}

        <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-3 px-6">
                        Event
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Date
                    </th>
                    <th scope="col" class="py-3 px-6">
                        Time
                    </th>
                </tr>
            </thead>
            <tbody class="">
                @if (count($events) == 0)
                    <div class="flex justify-center">
                        <div class="flex flex-col items-center space-y-5 py-10">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor"
                                class="bi bi-calendar3-event" viewBox="0 0 16 16">
                                <path
                                    d="M14 0H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 3.857C1 3.384 1.448 3 2 3h12c.552 0 1 .384 1 .857v10.286c0 .473-.448.857-1 .857H2c-.552 0-1-.384-1-.857V3.857z" />
                                <path d="M12 7a1 1 0 1 0 0-2 1 1 0 0 0 0 2z" />
                            </svg>
                            <p class="text-red-500 font-semibold text-xl uppercase ">No available events</p>

                        </div>
                    </div>
                @endif
                @foreach ($events as $event)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $event->event }}
                        </th>
                        <td class="py-4 px-6">
                            {{ $event->date }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $event->time }}
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>



    </div>

</x-dashboard>
