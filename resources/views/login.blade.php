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

                        <button onclick="window.location.href='/register'"
                            class="inline-block flex-none px-4 py-3 border-2 rounded-lg font-medium border-black bg-black text-white">Create
                            account here
                        </button>
                    </div>

                    <p class="font-medium">© 2022 Lumos inc</p>
                    
                </div>

                <!-- Login -->
                <div class="col-span-3 lg:col-span-2 flex flex-1 flex-col items-center justify-center px-10 relative">

                    <div class="flex lg:hidden justify-between items-center w-full py-4">
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
                    </div>

                    <!-- Login box -->
                    <div class="flex flex-1 flex-col justify-center space-y-5 max-w-md mb-7">

                        <div id="login-directives" class="text-center mt-16 lg:mt-20">
                            <p class="font-bold text-2xl pb-2 text-primary-300">Sign in to account</p>
                            <p class="text-md md:text-xl text-gray-400">
                                Sign in to get the best experience with lumos, password is required !
                            </p>
                        </div>

                        <div id="forgot-password-directives" class="text-center mt-16 lg:mt-20" style="display: none;">
                            <p class="font-bold text-2xl pb-2 text-primary-300">Forgot password?</p>
                            <p class="text-md md:text-xl text-gray-400">
                                Verify your email to reset password.
                            </p>
                        </div>

                        <div class="flex flex-col max-w-md space-y-5">

                            <form id="login-form" method="POST" action="/users/authenticate" class="space-y-4">

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

                            </form>

                            <!-- Forgot password form (hidden by default) -->
                            <form id="forgot-password-form" class="space-y-4" method="POST" action="{{ route('password.email') }}"
                                style="display: none;">
                                @csrf
                                <div>
                                    <label for="email"
                                        class="block mb-2 text-sm font-medium text-primary-500 dark:text-gray-300">Your
                                        email</label>
                                    <input type="email" name="email" value="{{ old('email') }}"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                        placeholder="name@company.com" required>
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="flex items-start">
                                    <a id="back-to-login-button" href="#"
                                        class="ml-auto text-sm text-secondary-900 hover:underline dark:text-blue-500">
                                        Login
                                    </a>
                                </div>

                                <button type="submit"
                                    class="flex items-center justify-center flex-none px-3 py-2 md:px-4 md:py-3 border-2 rounded-lg border-black bg-primary-300 text-white w-full hover:bg-black font-bold">
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

<script>
    $(document).ready(function() {
        // Show the forgot password form with fade animation and hide the login form
        $('#forgot-password-button').on('click', function(e) {
            e.preventDefault();
            $('#login-form').fadeOut('fast', function() {
                $('#forgot-password-form').fadeIn('fast');
            });

            $('#login-directives').fadeOut('fast', function(){
                $('#forgot-password-directives').fadeIn('fast');
            });

        });

        // Show the login form with fade animation and hide the forgot password form
        $('#back-to-login-button').on('click', function(e) {
            e.preventDefault();
            $('#forgot-password-form').fadeOut('fast', function() {
                $('#login-form').fadeIn('fast');
            });

            $('#forgot-password-directives').fadeOut('fast', function(){
                $('#login-directives').fadeIn('fast');
            })
        });
    });
</script>
