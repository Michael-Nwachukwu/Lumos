@php
    use Carbon\Carbon;

    $user = auth()->user();
    $passwordChangedAt = $user->password_changed_at;
    $currentTime = Carbon::now();
    $hideEditButton = $passwordChangedAt && $passwordChangedAt->addDays(7)->isFuture();
@endphp

<div class="relative flex flex-col min-w-0 break-words bg-gray-100 dark:bg-gray-800 w-full shadow-2xl rounded-xl">
    <div class="rounded-t mb-0 px-0 border-0">
        <div class="px-4 py-2">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h3 class="font-semibold text-base text-gray-900 dark:text-gray-50">My Profile</h3>
            </div>
        </div>
        <div class="block w-full">
            <div class="px-4 bg-gray-100 border border-solid border-gray-200 py-3 border-l-0 border-r-0 whitespace-nowrap flex justify-center ">
                <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown"
                data-dropdown-placement="bottom-start" 
                class="w-20 h-20 rounded-full cursor-pointer"
                src=" {{ auth()->user()->profilepicture ? asset('storage/' . auth()->user()->profilepicture) : asset('img/undraw_pic_profile_re_i9i4.svg') }}" alt="User dropdown">
            </div>
            <ul class="my-1 space-y-1">

                <li class="flex justify-between px-10 flex-grow items-center border-gray-100 text-sm text-gray-600 py-2">

                    <div class="inline-flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>

                        <div class="font-semibold text-black">Name</div>

                    </div>

                    <p>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>

                </li>

                <li class="flex justify-between px-10 flex-grow items-center border-gray-100 text-sm text-gray-600 py-2">

                    <div class="inline-flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>

                        <div class="font-semibold text-black">Email</div>

                    </div>

                    <p>{{ auth()->user()->email }}</p>

                </li>

                <li class="flex justify-between px-10 flex-grow items-center border-gray-100 text-sm text-gray-600 py-2">

                    <div class="inline-flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                            <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>

                        <div class="font-semibold text-black">Phone</div>

                    </div>

                    <p>{{ auth()->user()->phone }}</p>

                </li>

                <li class="flex justify-between px-10 flex-grow items-center border-gray-100 text-sm text-gray-600 py-2">

                    <div class="inline-flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gender-ambiguous" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.5 1a.5.5 0 0 1 0-1h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-3.45 3.45A4 4 0 0 1 8.5 10.97V13H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V14H6a.5.5 0 0 1 0-1h1.5v-2.03a4 4 0 1 1 3.471-6.648L14.293 1H11.5zm-.997 4.346a3 3 0 1 0-5.006 3.309 3 3 0 0 0 5.006-3.31z"/>
                        </svg>

                        <div class="font-semibold text-black">Gender</div>

                    </div>

                    <p>{{ auth()->user()->gender }}</p>

                </li>

                <li class="flex justify-between px-10 flex-grow items-center border-gray-100 text-sm text-gray-600 pt-2 pb-8">

                    <div class="inline-flex items-center gap-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-check" viewBox="0 0 16 16">
                            <path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                            <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                        </svg>

                        <div class="font-semibold text-black">Admitted</div>

                    </div>

                    <p>{{ auth()->user()->created_at }}</p>

                </li>

                @if (!$hideEditButton)

                    <li class="flex justify-center py-3">
        
                        <button data-modal-toggle="editProfile-modal" href="" class="bg-neutral-800 text-white rounded-xl h-9">
                            <span class="px-8">
                                Reset Password
                            </span>
                        </button>
                    </li>

                @endif


            </ul>
            
        </div>
    </div>
</div>