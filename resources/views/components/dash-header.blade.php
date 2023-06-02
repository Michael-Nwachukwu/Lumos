@props(['course'])
@props(['teacher_name'])


<div class="mx-auto w-full p-3 bg-neutral-800 h-52">
    <div class="flex justify-between">
        <h1 class="text-xl sm:text-4xl font-bold text-left p-3 uppercase text-[#fdc5b9] my-auto">
            {{ $course->coursename }}
            <span>program</span> <br>
            <span class="text-xs">tutor: <span>
                {{ $teacher_name }}</span></span>
        </h1>
        <img src="{{ asset('img/undraw_landing_page_re_6xev.svg') }}" class="w-64 sm:w-80 h-full mr-14 pt-3" alt="">
    </div>

</div>