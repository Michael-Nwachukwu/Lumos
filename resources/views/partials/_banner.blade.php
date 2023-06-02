  {{-- <br><br><br> --}}
  <section>
      {{-- carousel component --}}
      <div id="animation-carousel" class="relative" data-carousel="static">

          <!-- Carousel wrapper -->
            <div class="relative overflow-hidden h-screen">
                <!-- Item 1 -->
                <div class="hidden duration-200 ease-linear absolute inset-0 transition-all transform"
                    data-carousel-item="" style="">

                    <div class="top-16 xs:top-28 md:top-15 z-40 absolute p-5 md:p-20">
                        <div class="text-center space-y-5">
                            <h1 style="font-family: 'Righteous', cursive;"
                                class="text-2xl xs:text-4xl sm:text-6xl lg:text-[5.5em] font-extrabold text-[#fb9e8d] uppercase  text-opacity-80">
                                Flexible Learning Options.
                            </h1>
                            <div class='space-y-10'>
                                <ul class='text-sm sm:text-lg text-black 
                                sm:text-[#fdc5b9] space-y-2 font-bold'>
                                    <li class='hover:text-black cursor-pointer '>
                                        Remote Homework Delegation and Submission
                                    </li>
                                    <li class='hover:text-black cursor-pointer '>
                                        Syllabus Ahead of Time
                                    </li>
                                    <li class='hover:text-black cursor-pointer '>
                                        Seamless Connection with Tutors
                                    </li>
                                    <li class='hover:text-black cursor-pointer '>
                                        Study Analytics in Dashboard
                                    </li>
                                    <li class='hover:text-black cursor-pointer '>
                                        Virtual Classroom Experience
                                    </li>
                                </ul>
                                <button onclick="window.location.href='/register'" class="bg-black text-[#fdc5b9] px-10 py-3.5 hover:bg-[#F97760] hover:text-black">
                                    <span class="button-content font-bold xs:px-10">Sign in to get started</span>
                                </button>
                            </div>
        
                        </div>
                    </div>

                    <img src="{{ asset('img/2944806_28466.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                        alt="...">
                </div>

                <!-- Item 2 -->
                <div class="duration-200 ease-linear absolute inset-0 transition-all transform -translate-x-full z-10"
                  data-carousel-item="active">

                    <div class="top-48 lg:right-22 z-40 absolute sm:p-5 lg:p-20 space-y-6 w-full">

                        <div class="flex flex-col items-center justify-center w-full">

                            <span class="text-xs xs:text-sm sm:text-lg lg:text-xl text-orange-500 font-light uppercase text-opacity-70">education and
                                training organisations
                            </span>

                            <span class="text-xl xs:text-2xl sm:text-5xl lg:text-6xl uppercase text-zinc-300 font-bold">Browse The Best Courses</span>

                        </div>

                        {{-- search component --}}
                        @include('partials._search')

                    </div>


                    <img src="{{ asset('img/young-student-working-assignment.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover" alt="...">
                </div>

                <!-- Item 3 -->
                <div class="duration-200 ease-linear absolute inset-0 transition-all transform translate-x-full z-10"
                    data-carousel-item="">
                    <div class="bottom-0 z-40 absolute p-5 xs:p-8 lg:p-20 lg:w-4/6">
                        <h3 class="text-white text-opacity-80 text-2xl xs:text-4xl sm:text-5xl lg:text-6xl font-extrabold">
                            Lumos takes pride in the success stories of their alumni.<br>
                        </h3>
                        <p class="text-white text-sm xs:text-md sm:text-xl">
                            Many students have achieved remarkable career milestones and entrepreneurial success after
                            completing their programs at Lumos
                        </p>
                    </div>
                    <img src="{{ asset('img/group-five-african-college-students-spending-time-together-campus-university-yard-black-afro-friends-studying-education-theme.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 h-full object-cover"
                        alt="...">
                </div>
            </div>

          <!-- Slider controls -->
          <button type="button"
              class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
              data-carousel-prev="">
              <span
                  class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                      stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                      </path>
                  </svg>
                  <span class="sr-only">Previous</span>
              </span>
          </button>

          <button type="button"
              class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
              data-carousel-next="">
              <span
                  class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                  <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                      stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                      </path>
                  </svg>
                  <span class="sr-only">Next</span>
              </span>
          </button>

      </div>
  </section>
