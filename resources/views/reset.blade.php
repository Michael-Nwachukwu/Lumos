<x-layout>
    {{-- <br><b><br><br><br><br></b> --}}
    <!-- component -->
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap'); */

        /* html,
        body {
            font-family: 'Roboto', sans-serif;
        } */

        .break-inside {
            -moz-column-break-inside: avoid;
            break-inside: avoid;
        }

        nav {
            display: none !important;
        }
    </style>

    <body class="bg-white">

        <!-- Example -->
        <div class="h-screen">

            <!-- Container -->
            <div class="flex justify-center w-full h-full">

                <!-- Login -->
                <div class="flex flex-1 flex-col items-center justify-center px-10 relative">

                    {{-- <div class="flex lg:hidden justify-between items-center w-full py-4">
                        <div class="">
                            <a href="/">
                                <img src="{{ asset('img/lumos_pink_x-removebg-preview.png') }}" class="h-5" alt="LUMOS">
                            </a>
                        </div>
                        <div class="">
                            <a href="/register" class="font-bold underline text-[#f97760]">
                                Sign up
                            </a>
                        </div>
                    </div> --}}

                    <!-- Login box -->
                    <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md mb-7">

                        <div id="login-directives" class="text-center mt-16 lg:mt-20">
                            <p class="font-bold text-2xl pb-2 text-primary-300">Reset Password</p>
                            <p class="text-md md:text-xl text-gray-400">
                                Verify email and enter new password to reset
                            </p>
                        </div>

                        <div class="flex flex-col max-w-md space-y-5">

                            {{-- <form id="login-form" method="POST" action="/users/authenticate" class="space-y-4">

                                @csrf

                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" name="email" id="email" name="email"
                                        value="{{ old('email') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required>
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Your
                                        password</label>
                                    <input type="password" name="password" name="password" value="{{ old('password') }}"
                                        id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="flex items-start">
                                    <a id="forgot-password-button" href="#"
                                        class="ml-auto text-sm text-secondary-900 hover:underline dark:text-blue-500">Lost
                                        Password?</a>
                                </div>

                                <button
                                    class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg border-black bg-primary-300 text-white w-full hover:bg-black font-bold">
                                    Sign In
                                </button>

                            </form> --}}

                            <form method="POST" action="{{ route('password.update') }}" class="space-y-4">
                                
                                @csrf

                                <input type="hidden" name="token" value="{{ request('token') }}">

                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" name="email" id="email" name="email"
                                        value="{{ old('email') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white @error('email') is-invalid @enderror"
                                        placeholder="name@company.com" required autocomplete="email" autofocus>
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password"
                                        class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">New
                                        Password</label>
                                    <input type="password" name="password"
                                        id="password" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="password-confirm"
                                        class="block mb-2 text-sm font-medium text-primary-200 dark:text-gray-300">Confirm
                                        Password</label>
                                    <input type="password" name="password_confirmation"
                                    id="password-confirm" placeholder="••••••••"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        required>
                                    @error('password')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <button type="submit" class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg border-black bg-primary-300 text-white w-full hover:bg-black font-bold">
                                    Reset Password
                                </button>
                            </form>

                        </div>
                    </div>

                    <!-- Footer -->
                    <x-socials />

                </div>

            </div>
        </div>
        <!-- Example -->
    </body>
</x-layout>

