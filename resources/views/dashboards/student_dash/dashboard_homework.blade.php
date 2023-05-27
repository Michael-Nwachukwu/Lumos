<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <x-dash-header :course="$course" :teacher_name="$teacher_name" />


        {{-- syllabus --}}
        <h1 class="text-3xl text-black font-bold text-left px-10 py-7 mb-8">
            Homework <br>
            <span class="text-xs text-gray-400 uppercase">Student homework</span>
        </h1>

        {{-- table --}}
        <div class="overflow-x-auto relative mx-10">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                <tbody class="">
                    @if ($homeworks->isEmpty())
                        <div class="flex flex-col items-center justify-center">
                            <img src="{{ asset('img/undraw_warning_re_eoyh.svg') }}" class="w-60 " alt=""> <br>
                            <p>oOps No Tasks Available</p>
                        </div>
                    @else
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Task
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    File
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Due
                                </th>
                            </tr>
                        </thead>
                        @foreach($homeworks as $homework)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $homework->title }} 
                                </th>

                                <td class="py-4 px-6">
                                    @if ($homework->pdf)
                                        <a href="{{ route('homework.download', $homework->id) }}" >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-download" viewBox="0 0 16 16">
                                            <path
                                            d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path
                                            d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                            </svg>
                                        </a>
                                    @endif
                                </td>

                                <td class="py-4 text-red-500 font-bold">
                                    {{ $homework->due_date }}
                                </td>

                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>

</x-dashboard>
