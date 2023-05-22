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
            Exam Time table <br>
            <span class="text-xs text-gray-400 uppercase">Student Exam routine</span>
        </h1>

        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('img/undraw_warning_re_eoyh.svg') }}" class="w-60 " alt=""> <br>
            <p>There are no available routines</p>
        </div>

        {{-- table --}}

        <div class="overflow-x-auto relative mx-5">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Course
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            2022-11-03
                        </td>
                        <td class="py-4 px-6">
                            09:00 AM
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            2022-11-03
                        </td>
                        <td class="py-4 px-6">
                            09:00 AM
                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            2022-11-03
                        </td>
                        <td class="py-4 px-6">
                            09:00 AM
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</x-dashboard>
