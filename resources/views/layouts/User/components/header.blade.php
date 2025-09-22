
<div x-data="{ menuOpen: false }" class="relative text-black font-sans flex flex-col">
    <div class="w-full px-0 sm:max-w-7xl sm:mx-auto sm:px-6">
        {{-- Top bar --}}
        <div class="hidden md:flex justify-between items-center py-2 text-xs sm:text-sm">
            <span id="topbar1" class="font-semibold">
                <span class="text-black">🖋 Celebrating 10 Years: </span>
                <span class="text-blue-700">2014 – 2024</span>
            </span>

            <div id="topbar2" class="flex items-center gap-4">
                {{-- Phone --}}
                <div class="flex items-center gap-1 text-blue-700">
                    <i class="fi fi-phone text-blue-600 text-md"></i>
                    <span class="text-black font-semibold text-md">
                        Call us :234 567 7899
                    </span>
                </div>

                {{-- Divider --}}
                <span class="hidden sm:block h-6 w-px bg-gray-300"></span>

                {{-- Social Icons --}}
                <div class="hidden sm:flex items-center gap-3 text-blue-700 text-md">
                    <a href="#" class="hover:text-blue-900 transition"><i class="fi fi-facebook"></i></a>
                    <a href="#" class="hover:text-blue-900 transition"><i class="fi fi-linkedin"></i></a>
                    <a href="#" class="hover:text-blue-900 transition"><i class="fi fi-instagram"></i></a>
                    <a href="#" class="hover:text-blue-900 transition">X</a>
                </div>
            </div>
        </div>

        {{-- Navbar --}}
        <div
            id="navbar"
            class="bg-white/70 backdrop-blur-xl shadow-lg rounded-none md:rounded-2xl w-full px-0 sm:px-6 md:px-8 py-2 flex items-center justify-between border border-white/30 h-20 md:h-20"
        >
            {{-- Logo --}}
            <div class="flex-shrink-0 flex items-center h-20 md:h-24">
                <img src="{{ asset('storage/logo.png') }}" alt="MedAccess Logo"
                    class="h-16 sm:h-20 md:h-24 lg:h-28 xl:h-32 w-auto object-contain" />
            </div>

            {{-- Links (desktop) --}}
            <nav class="hidden md:flex gap-8 lg:gap-10 text-base font-semibold">
                <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
                    <span class="relative z-10 group-hover:text-purple-700 text-xl">Home</span>
                    <span
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500/10 to-pink-500/10 scale-0 group-hover:scale-100 transition-transform duration-300"></span>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
                    <span class="relative z-10 group-hover:text-purple-700 text-xl">Doctors</span>
                    <span
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500/10 to-pink-500/10 scale-0 group-hover:scale-100 transition-transform duration-300"></span>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
                    <span class="relative z-10 group-hover:text-purple-700 text-xl">Services</span>
                    <span
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500/10 to-pink-500/10 scale-0 group-hover:scale-100 transition-transform duration-300"></span>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                 <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
                    <span class="relative z-10 group-hover:text-purple-700 text-xl">Blog</span>
                    <span
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500/10 to-pink-500/10 scale-0 group-hover:scale-100 transition-transform duration-300"></span>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
                <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
                    <span class="relative z-10 group-hover:text-purple-700 text-xl">About</span>
                    <span
                        class="absolute inset-0 rounded-lg bg-gradient-to-r from-purple-500/10 to-pink-500/10 scale-0 group-hover:scale-100 transition-transform duration-300"></span>
                    <span
                        class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-pink-500 transition-all duration-300 group-hover:w-full"></span>
                </a>
            </nav>

            {{-- Contact (desktop only) --}}
          <!-- Login Button -->
  <div class="flex gap-4">
  <!-- Login Button -->
  <button
    class="flex cursor-pointer items-center relative 
           bg-pink-400 text-white font-medium 
           px-4 py-2 rounded-xl shadow-md overflow-hidden 
           transition-all duration-300 hover:scale-105 hover:shadow-lg group">

    <span class="relative z-10 text-sm sm:text-base font-semibold">
      Login
    </span>

    <i class="fa fa-sign-in ml-2 relative z-10 text-sm transition-transform duration-300 group-hover:translate-x-1"></i>

    <span
      class="absolute inset-0 bg-pink-500 
             opacity-0 group-hover:opacity-25 transition duration-500 rounded-xl">
    </span>
  </button>

  <!-- Signup Button -->
  <button
    class="flex cursor-pointer items-center relative 
           bg-pink-400 text-white font-medium 
           px-4 py-2 rounded-xl shadow-md overflow-hidden 
           transition-all duration-300 hover:scale-105 hover:shadow-lg group">

    <span class="relative z-10 text-sm sm:text-base font-semibold">
      Signup
    </span>

    <i class="fa fa-user-plus ml-2 relative z-10 text-sm transition-transform duration-300 group-hover:translate-x-1"></i>

    <span
      class="absolute inset-0 bg-pink-500 
             opacity-0 group-hover:opacity-25 transition duration-500 rounded-xl">
    </span>
  </button>
</div>



            {{-- Modern Hamburger (mobile only) --}}
            <button
                class="md:hidden flex flex-col justify-center items-center w-10 h-10 relative z-50"
                aria-label="Toggle menu">
                <span :class="menuOpen ? 'rotate-45 translate-y-[6px]' : ''"
                    class="block h-[2px] w-7 bg-purple-700 rounded-sm transition-transform duration-300 ease-in-out"></span>
                <span :class="menuOpen ? 'opacity-0' : 'opacity-100'"
                    class="block h-[2px] w-7 bg-purple-700 rounded-sm my-1 transition-opacity duration-300 ease-in-out"></span>
                <span :class="menuOpen ? '-rotate-45 -translate-y-[6px]' : ''"
                    class="block h-[2px] w-7 bg-purple-700 rounded-sm transition-transform duration-300 ease-in-out"></span>
            </button>
        </div>
    </div>

    {{-- Sidebar (mobile) --}}
    <div x-show="menuOpen" x-transition
        class="fixed top-0 left-0 h-full w-72 bg-white shadow-2xl transform transition-transform duration-300 z-50">
        <div class="flex items-center justify-between px-6 border-b">
            <img src="{{ asset('logo/MedAccess Logo black.png') }}" alt="MedAccess Logo"
                class="h-[120px] sm:h-[130px] md:h-[150px] w-auto object-contain" />
            <button  class="text-2xl text-purple-700" aria-label="Close menu">
                ✕
            </button>
        </div>

        <nav class="flex flex-col gap-6 px-6 py-6 text-lg font-medium">
            <a href="#" class="text-gray-800 hover:text-purple-700 transition">Home</a>
            <a href="#" class="text-gray-800 hover:text-purple-700 transition">Pages</a>
            <a href="#" class="text-gray-800 hover:text-purple-700 transition">Services</a>
            <a href="#" class="text-gray-800 hover:text-purple-700 transition">Projects</a>
            <a href="#" class="text-gray-800 hover:text-purple-700 transition">Blog</a>
        </nav>

        <div class="flex gap-5 px-6 text-2xl text-purple-600">
            <a href="#"><i class="fi fi-facebook"></i></a>
            <a href="#"><i class="fi fi-linkedin"></i></a>
            <a href="#"><i class="fi fi-instagram"></i></a>
            <a href="#">X</a>
        </div>
    </div>

    {{-- Overlay --}}
    <div x-show="menuOpen" x-transition.opacity
        class="fixed inset-0 bg-black/30 z-40"
       ></div>
</div>

