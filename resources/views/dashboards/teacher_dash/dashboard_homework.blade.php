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
                            <p>You have not created a task, click "create" to start</p>
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

                                <td>

                                    <div class="inline-flex items-center space-x-7">
                                        <button data-modal-toggle="edit-modal" class="edit-button" data-homework="{{ json_encode($homework) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" class="bi bi-pencil-square fill-blue-800" viewBox="0 0 16 16">
                                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                              </svg>
                                        </button>

                                        <form method="POST" action="/homeworks/{{ $homework->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" class="bi bi-trash-fill fill-red-800" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                  </svg>
                                            </button>
                                        </form>
                                    </div>

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
                        <h3 class="mb-4 text-base pt-2 font-medium text-gray-900 dark:text-white">Course Tasks</h3>
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
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 placeholder:text-gray-600 placeholder:text-opacity-50"
                                placeholder="Brief Homework Summary" value="{{ old('title') }}"></textarea>
                            @error('title')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="due_date">Due Date:</label>
                            <input type="datetime-local" class="rounded-xl" name="due_date" id="due_date" min="{{ date('Y-m-d\TH:i') }}" value="{{ old('due_date') }}">
                            @error('due_date')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="pdf"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload File
                            </label>
                            <input
                                name="pdf"
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" id="user_avatar" type="file" value="{{ old('pdf') }}">
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

    {{-- edit Modal --}}
    <div id="edit-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full justify-center items-center">

        <div class="relative p-4 w-full max-w-md h-full md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 py-10">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="edit-modal">
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
                        <h3 class="mb-4 text-base pt-2 font-medium text-gray-900 dark:text-white">Edit Course Tasks</h3>
                    </div>

                    <form class="space-y-6" action="" method="POST" enctype="multipart/form-data" id="edit-form">
                        @csrf
                        @method('PUT')
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

                            <textarea id="editmessage" rows="5" name="title"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                                >
                                {{-- {{ $homework->title }} --}}
                            </textarea>
                            @error('title')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="due_date">Due Date:</label>
                            <input type="datetime-local" class="rounded-xl" name="due_date" id="editdue_date" min="{{ date('Y-m-d\TH:i') }}" >
                            @error('due_date')
                                <p class="text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <p id="editpdf"></p> --}}

                        <div>
                            <label for="pdf"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Upload File
                            </label>
                            <input
                                name="pdf"
                                class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                aria-describedby="user_avatar_help" type="file">
                            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">
                                Upload Pdf Instructions(pdf)
                            </div>
                        </div>

                        <button type="submit" class="bg-black px-3 py-2 text-white rounded-lg text-right">Update</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-dashboard>

<script>
    const dueDateInput = document.getElementById('due_date');
  
    // Get the current date and time
    const currentDate = new Date().toISOString().slice(0, 16);
  
    // Set the minimum value of the input field
    dueDateInput.min = currentDate;

    // Get all edit buttons
    var editButtons = $('.edit-button');

    // Attach click event handler to each edit button
    editButtons.on('click', function() {

        // Get the homework data from the data attribute
        var homeworkData = JSON.parse($(this).attr('data-homework'));
        var homeworkId = homeworkData.id;

        // Set the form's action with the homework ID
        $('#edit-form').attr('action', '/homeworks/' + homeworkId);

        // Set the value of the textarea
        $('#editmessage').val(homeworkData.title);

        // Set the value of due date input
        $('#editdue_date').val(homeworkData.due_date);

    });

</script>
  
