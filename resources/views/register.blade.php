<x-layout>
    {{-- <br><b><br><br><br><br></b> --}}
    <!-- component -->
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        html,
        body {
            font-family: 'Roboto', sans-serif;
        } */

        .break-inside {
            -moz-column-break-inside: avoid;
            break-inside: avoid;
        }

        /* body {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            line-height: 1.5;
        } */

        nav{
            display:none !important;
        }
    </style>

    <body class="bg-white">

        <!-- Example -->
        <div class="h-screen">

            <!-- Container -->
            <div class="grid grid-cols-3 w-full h-full">

                <!-- Sidebar -->
                <div class='hidden lg:flex flex-col justify-between bg-[#fdc5b9] lg:p-8 xl:p-12 drop-shadow-2xl'>

                    <div class="flex items-center justify-end pb-7">
                        <a href="/" class="flex justify-end" data-summari-detected="true">
                            <img src="{{ asset('img/lumos_pink_x-removebg-preview.png') }}" class="h-6" alt="LUMOS">
                        </a>
                    </div>
                    {{-- style="margin-top: -50px" --}}
                    <div class='space-y-5'>
                        <h1 class="text-3xl xl:leading-snug font-extrabold" >
                            Enter your account and
                            discover new Learning
                            experiences
                        </h1>
                        
                        <p class="text-lg">You do not have an account?</p>

                        <button onclick="window.location.href='/login'"
                            class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Create
                            account here
                        </button>
                    </div>

                    <p class="font-medium">© 2022 Lumos inc</p>
                    
                </div>

                <!-- register -->
                <div class="col-span-3 lg:col-span-2 flex flex-1 flex-col items-center justify-center px-7 relative">

                    <div class="flex lg:hidden justify-between items-center w-full py-4">
                        <div>
                            <a href="/">
                                <img src="{{ asset('img/lumos_pink_x-removebg-preview.png') }}" class="h-5" alt="LUMOS">
                            </a>
                        </div>
                        <div>
                            <a href="/login" class="font-bold underline text-[#f97760]">
                                Sign in
                            </a>
                        </div>
                    </div>

                    <div class="text-center mt-10 lg:mt-20">
                        <p class="font-bold text-2xl pb-2 text-primary-300">Sign up to start</p>
                        <p class="text-md md:text-xl text-gray-400">
                            Sign in to get the best experience with lumos, password is required !
                        </p>
                    </div>

                    <form method="POST" action="/users" class="mt-6 lg:mt-20 mb-7" enctype="multipart/form-data">
                        @csrf
                        <div class="grid gap-4 mb-8 md:grid-cols-2 ">
                            {{-- first name --}}
                            <div>
                                <label for="firstname"
                                    class="block  text-sm font-medium text-primary-200 dark:text-gray-300">First
                                    name</label>
                                <input type="text" id="first_name" name="firstname" value="{{ old('firstname') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="First Name" required="">
                                @error('firstname')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- last name --}}
                            <div>
                                <label for="lastname"
                                    class="block  text-sm font-medium text-primary-200 dark:text-gray-300">Last
                                    name</label>
                                <input type="text" id="last_name" name="lastname" value="{{ old('lastname') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Last Name" required="">
                                @error('lastname')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- email --}}
                            <div>
                                <label for="email"
                                    class="block  text-sm font-medium text-primary-200 dark:text-gray-300">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Flowbite" required="">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- phone no --}}
                            <div>
                                <label for="phone"
                                    class="block  text-sm font-medium text-primary-200 dark:text-gray-300">Phone
                                    number</label>
                                <input type="phone" id="phone" name="phone" value="{{ old('phone') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123-45-678" required="">
                                @error('phone')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- password --}}
                            <div class="">
                                <label for="password"
                                    class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Password</label>
                                <input type="password" id="password" name="password" value="{{ old('password') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="•••••••••" required="">
                                @error('password')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- confirm password --}}
                            <div class="">
                                <label for="password_confirmation"
                                    class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Confirm
                                    password</label>
                                <input type="password" id="confirm_password" name="password_confirmation"
                                    value="{{ old('password_confirmation') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="•••••••••" required="">
                                @error('password_confirmation')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- select gender --}}
                            <div class="">
                                <label for="gender"
                                    class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-400">
                                    Select Gender
                                </label>

                                <select id="gender" name="gender" value="{{ old('gender') }}"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Others</option>
                                </select>

                                @error('gender')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                            {{-- upload dp --}}
                            <div class="">
                                <label for="profilepicture" class="inline-block text-sm mb-1 text-primary-200">
                                    Profile Picture
                                </label>

                                <input
                                    class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                    aria-describedby="user_avatar_help" id="user_avatar" type="file"  name="profilepicture" value="{{ old('profilepicture') }}">
                                <div class="mt-1 text-xs text-gray-500 dark:text-gray-300" id="user_avatar_help">A
                                    profile picture is useful to confirm identity when your are logged into your account</div>

                                @error('profilepicture')
                                    <p class="text-red-500 text-xs mt-1">
                                        {{ $message }}
                                    </p>
                                @enderror
                            </div>

                        </div>

                        <button
                            class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg border-black bg-primary-300 text-white w-full hover:bg-black font-bold">
                            Sign Up
                        </button>

                    </form>

                    <!-- Footer -->
                    <x-socials />

                </div>

            </div>
        </div>
        <!-- Example -->
    </body>
</x-layout>
