<div class="relative text-black font-sans flex flex-col z-10">
  <div class="w-full px-0 sm:max-w-7xl sm:mx-auto sm:px-0">
    
    <!-- Top bar -->
    <div class="flex justify-between items-center py-2 text-xs sm:text-sm">
      <span id="topbar1" class="font-semibold">
        <span class="text-black">🖋 Celebrating 10 Years: </span>
        <span class="text-blue-700">2014 – 2024</span>
      </span>

      <div id="topbar2" class="flex items-center gap-4">
        <!-- Phone -->
        <div class="flex items-center gap-1 text-blue-700">
          <i class="fi fi-phone text-blue-600 text-md"></i>
          <span class="text-black font-semibold text-md">Call us :234 567 7899</span>
        </div>

        <span class="hidden sm:block h-6 w-px bg-gray-300"></span>

        <!-- Social Icons -->
        <div class="hidden sm:flex items-center gap-2 text-blue-700 text-md">
  <a href="#" class="hover:text-blue-900 transition">
    <i class="fab fa-facebook-f"></i>
  </a>
  <a href="#" class="hover:text-blue-900 transition">
    <i class="fab fa-linkedin-in"></i>
  </a>
  <a href="#" class="hover:text-blue-900 transition">
    <i class="fab fa-instagram"></i>
  </a>
  <a href="#" class="hover:text-blue-900 transition">
    <i class="fab fa-x-twitter"></i> <!-- new Twitter "X" icon -->
  </a>
</div>

      </div>
    </div>

    <!-- Navbar -->
    <div id="navbar"
      class="bg-white/70 backdrop-blur-xl shadow-lg rounded-none md:rounded-2xl w-full px-0 sm:px-6 md:px-2 py-2 flex max-sm:px-2 items-center justify-between border  border-white/30 h-20 md:h-20">

      <!-- Logo -->
      <div class="flex-shrink-0 flex items-center h-20 md:h-24">
        <img src="{{ asset('storage/logo.png') }}" alt="MedAccess Logo"
          class="h-16 sm:h-24 md:h-28 max-sm:h-24 lg:h-28 xl:h-32 w-auto object-contain" />
      </div>

      <!-- Links (desktop) -->
      <nav class="hidden md:flex gap-8 lg:gap-6 md:gap-4 text-base font-semibold">
        <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
          <span class="relative z-10 group-hover:text-purple-700 text-xl">Home</span>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-red-500 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a  class="relative scroll-link text-gray-700 px-3 py-1 transition duration-300 group">
          <span class="relative z-10 group-hover:text-purple-700 text-xl">Doctors</span>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-red-500 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
          <span class="relative z-10 group-hover:text-purple-700 text-xl">Services</span>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-red-500 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
          <span class="relative z-10 group-hover:text-purple-700 text-xl">Blog</span>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-red-500 transition-all duration-300 group-hover:w-full"></span>
        </a>
        <a href="#" class="relative text-gray-700 px-3 py-1 transition duration-300 group">
          <span class="relative z-10 group-hover:text-purple-700 text-xl">About</span>
          <span class="absolute left-0 -bottom-1 w-0 h-[2px] bg-gradient-to-r from-purple-500 to-red-500 transition-all duration-300 group-hover:w-full"></span>
        </a>
      </nav>

    <!-- Auth (desktop only) -->
<!-- Auth for lg+ (Desktop) -->
@guest
<div class="hidden lg:flex gap-4">
  <!-- Login Button -->
  <a href="{{route('login')}}"
     class="flex items-center bg-red-500 hover:bg-red-600 
            text-white font-medium px-4 py-2 rounded-xl shadow-md 
            hover:scale-105 hover:shadow-lg transition">
    <span class="text-sm sm:text-base font-semibold">Login</span>
    <i class="fa fa-sign-in ml-2"></i>
  </a>

  <!-- Signup Button -->
  <a href="{{route('register')}}"
     class="flex items-center bg-red-500 hover:bg-red-600 
            text-white font-medium px-4 py-2 rounded-xl shadow-md 
            hover:scale-105 hover:shadow-lg transition">
    <span class="text-sm sm:text-base font-semibold">Signup</span>
    <i class="fa fa-user-plus ml-2"></i>
  </a>
</div>


@endguest



<el-dropdown class="hidden {{Auth::check() ? 'lg:flex md:flex' : 'md:flex lg:hidden'}}  relative overflow-hidden">
 <!-- Trigger Button -->
<button
  class="inline-flex w-full justify-center items-center gap-x-2
         bg-red-500 hover:bg-red-600 text-white font-semibold rounded-xl shadow-md
         px-4 py-2 text-sm md:text-base lg:text-lg
         hover:shadow-lg transition
         md:px-5 md:py-2
         lg:px-6 lg:py-2 lg:mt-1">
  Account

  <svg viewBox="0 0 20 20" fill="currentColor"
       class="w-5 h-5 -mr-1 text-white md:w-4 md:h-4 lg:w-5 lg:h-5">
    <path d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
          clip-rule="evenodd" fill-rule="evenodd"/>
  </svg>

</button>


  <!-- Dropdown Menu -->
  <el-menu anchor="bottom end" popover
    class="m-0 w-56 origin-top-right rounded-md bg-white p-0 shadow-lg outline outline-1 outline-black/5 transition
           [--anchor-gap:theme(spacing.2)] data-[closed]:scale-95 data-[closed]:transform data-[closed]:opacity-0
           data-[enter]:duration-100 data-[leave]:duration-75 data-[enter]:ease-out data-[leave]:ease-in">

    <div class="py-1">
      @auth
        <a href="#"
          class=" px-4 py-2 text-sm text-gray-700 hover:bg-red-100 flex items-center">
          <i class="fa fa-home mr-2 text-red-400"></i> Dashboard
        </a>
        <a href="{{ route('profile.edit') }}"
          class=" px-4 py-2 text-sm text-gray-700 hover:bg-red-100 flex items-center">
          <i class="fa fa-user mr-2 text-red-400"></i> Profile
        </a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-red-100 flex items-center">
            <i class="fa fa-sign-out mr-2 text-red-400"></i> Logout
          </button>
        </form>
      @endauth

      @guest
        <a href="{{ route('login') }}"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100 flex items-center">
          <i class="fa fa-sign-in mr-2 text-red-400"></i> Login
        </a>
        <a href="{{ route('register') }}"
          class="block px-4 py-2 text-sm text-gray-700 hover:bg-red-100 flex items-center">
          <i class="fa fa-user-plus mr-2 text-red-400"></i> Signup
        </a>
      @endguest
    </div>
  </el-menu>
</el-dropdown>



<!-- Hamburger for sm & xs only -->
<button id="menuToggle"
  class="md:hidden flex justify-center items-center w-10 h-10 sm:w-12 sm:h-12 
         relative z-50 text-purple-700"
  aria-label="Toggle menu">

  <!-- Custom SVG -->
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
       stroke-width="1.5" stroke="currentColor" class="w-10 h-10 sm:w-12 sm:h-12">
    <path stroke-linecap="round" stroke-linejoin="round"
          d="M3.75 6.75h16.5M3.75 12h16.5M12 17.25h8.25" />
  </svg>
</button>



    </div>
  </div>

  <!-- Sidebar (mobile) -->
  <div id="sidebar" class="fixed top-0 left-0 h-full w-72 bg-white shadow-2xl transform -translate-x-full transition-transform duration-300 z-50">
<div class="flex items-center justify-between px-6 border-b py-4 relative">
  <!-- Profile Pic -->
  <img src="{{ asset('storage/user.png') }}" 
       alt="User Profile" 
       class="h-24 w-24 rounded-full object-cover border-2 border-red-400 shadow-md cursor-pointer hover:scale-105 transition-transform duration-200" />

  <!-- Close Button (Top Right Corner) -->
  <button id="closeSidebar" 
          class="absolute right-6 text-3xl text-purple-700 hover:text-red-500 transition-colors duration-200"
          aria-label="Close menu">
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

  
  </div>

  <!-- Overlay -->
  <div id="overlay" class="fixed inset-0 bg-black/30 z-40 hidden"></div>
</div>

<!-- ✅ Simple JS -->
<script>
  const menuToggle = document.getElementById("menuToggle");
  const sidebar = document.getElementById("sidebar");
  const overlay = document.getElementById("overlay");
  const closeSidebar = document.getElementById("closeSidebar");

  function openMenu() {
    sidebar.classList.remove("-translate-x-full");
    overlay.classList.remove("hidden");
  }

  function closeMenu() {
    sidebar.classList.add("-translate-x-full");
    overlay.classList.add("hidden");
  }

  menuToggle.addEventListener("click", openMenu);
  overlay.addEventListener("click", closeMenu);
  closeSidebar.addEventListener("click", closeMenu);

 

</script>


