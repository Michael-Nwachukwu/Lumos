<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <x-dash-header :course="$course" :teacher_name="$teacher_name" />

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
                            Javascript Dom Manipulations

                        </th>
                        <td class="py-4 px-6">
                            80
                        </td>
                        <td class="py-4 px-6">
                            A
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations

                        </th>
                        <td class="py-4 px-6">
                            80
                        </td>
                        <td class="py-4 px-6">
                            A
                        </td>

                    </tr>
                    <tr class="bg-white dark:bg-gray-800">
                        <th scope="row"
                            class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Javascript Dom Manipulations

                        </th>
                        <td class="py-4 px-6">
                            80
                        </td>
                        <td class="py-4 px-6">
                            A
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

</x-dashboard>
