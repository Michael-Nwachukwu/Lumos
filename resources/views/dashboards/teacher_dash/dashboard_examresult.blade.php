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
            Exam results <br>
            <span class="text-xs text-gray-400 uppercase">Course Performances</span>
        </h1>
        {{-- 
        <div class="flex flex-col items-center justify-center">
            <img src="{{ asset('img/undraw_warning_re_eoyh.svg') }}" class="w-60 " alt=""> <br>
            <p>There are no results available</p>
        </div> --}}

        {{-- table --}}

        <div class="overflow-x-auto relative mx-5">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6">
                            Student Name
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Scope
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Score
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Grade
                        </th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Michael Scofield
                        </th>

                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            <input type="text">
                        </td>
                        <td class="py-4 px-6">
                            <label for="countries"
                                class="block mb-2 text-xs font-medium text-gray-900 dark:text-gray-400">
                                Select Grade
                            </label>

                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>

                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Michael Scofield
                        </th>

                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            <input type="text">
                        </td>
                        <td class="py-4 px-6">
                            <label for="countries"
                                class="block mb-2 text-xs font-medium text-gray-900 dark:text-gray-400">
                                Select Grade
                            </label>
                            
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>

                        </td>
                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Michael Scofield
                        </th>

                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations
                        </th>
                        <td class="py-4 px-6">
                            <input type="text">
                        </td>
                        <td class="py-4 px-6">
                            <label for="countries"
                                class="block mb-2 text-xs font-medium text-gray-900 dark:text-gray-400">
                                Select Grade
                            </label>
                            
                            <select id="countries"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option>A</option>
                                <option>B</option>
                                <option>C</option>
                                <option>D</option>
                                <option>E</option>
                                <option>F</option>
                            </select>

                        </td>                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</x-dashboard>
