@props(['scopeCsv'])

@php
    $scopes = explode(',', $scopeCsv);
@endphp

<div class="p-4 lg:w-3/5 lg:ml-20 bg-white border-2 shadow-2xl mt-6 sm:p-8 dark:bg-gray-800 dark:border-gray-700">

    <h5 class="mb-2 text-xl font-bold text-black text-left dark:text-white">What you'll learn</h5>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 text-sm">

        @foreach ($scopes as $scope)
            <div class="inline-flex items-baseline space-x-1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-check2 text-lg" viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                </svg>
                <p>{{ $scope }}</p>
            </div>
        @endforeach


    </div>
</div>
