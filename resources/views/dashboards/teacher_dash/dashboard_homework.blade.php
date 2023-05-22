<x-dashboard>

    <div class="h-full ml-14 mt-20 mb-10 md:ml-64">

        <x-dash-header :course="$course" :teacher_name="$course_teacher->firstname . ' ' . $course_teacher->lastname" />

        {{-- homework --}}
        <div class="flex items-center justify-between mx-20">
            <h1 class="text-3xl text-black font-bold text-left px-10 py-7">
                Homework <br>
                <span class="text-xs text-gray-400 uppercase">Student homework</span>
            </h1>

            <button class="bg-green-500 px-5 py-2 rounded-xl text-white" type="button"
                data-modal-toggle="authentication-modal">
                <span class="inline-flex items-center space-x-3 font-bold">
                    <span>
                        Create
                    </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                        class="bi bi-plus-lg" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z" />
                    </svg>
                </span>
            </button>
        </div>

        {{-- table --}}

        <div class="overflow-x-auto relative mx-10">
            <table class="w-full text-sm text-left text-gray-700 dark:text-gray-400">
                <tbody class="">
                    @if ($homeworks->isEmpty())
                        <div class="flex flex-col items-center justify-center">
                            <img src="{{ asset('img/undraw_warning_re_eoyh.svg') }}" class="w-60 " alt=""> <br>
                            <p>There are no schemes available</p>
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
                            </tr>
                        </thead>
                        @foreach($homeworks as $homework)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 ">
                                <th scope="row"
                                    class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $homework->title }} 
                                </th>

                                <td class="py-4 px-6">
                                    <a href="{{ route('homework.download', $homework->id) }}" >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                            class="bi bi-download" viewBox="0 0 16 16">
                                            <path
                                                d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                            <path
                                                d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>

    </div>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">

        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 py-10">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="py-6 px-6 lg:px-8">

                    <div class="flex items-baseline justify-between">
                        <img src="{{ asset('img/lumosBOW.jpg') }}" class="w-20" alt="">
                        <h3 class="mb-4 text-base pt-2 font-medium text-gray-900 dark:text-white">Course Syllabus</h3>
                    </div>



                    <form class="space-y-6" action="/createHomework" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="hidden">
                            <label for="course_id"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                course
                            </label>

                            <input 
                                name="course_id"
                                type="hidden"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                value="{{ $course->id }}"
                                >

                        </div>
                        <div>
                            <label for="title"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                Task
                            </label>

                            <textarea id="message" rows="5" name="title"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Brief Homework Summary">
                            </textarea>
                        </div>

                        <div>
                            <label for="pdf"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload File
                            </label>
                            <input
                                name="pdf"
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                Upload Pdf Instructions(pdf)
                            </div>
                        </div>

                        <button type="submit" class="bg-black px-3 py-2 text-white rounded-lg text-right">Add</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-dashboard>
