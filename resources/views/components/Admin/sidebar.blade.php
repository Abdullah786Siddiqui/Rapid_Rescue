
<aside id="logo-sidebar" class="fixed top-0 left-0  z-40 w-64 h-screen overflow-y-auto  pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
   <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
      <ul class="space-y-2 font-medium">
   <li>
  <a href="#"
     class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-50 group">
    <i class="ri-dashboard-line text-lg text-gray-500 group-hover:text-blue-800"></i>
    <span class="ms-3 group-hover:text-blue-800">Dashboard</span>
  </a>
</li>


         <li>
  <!-- Doctors Dropdown Button -->
  <button type="button" 
    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group 
   hover:bg-blue-50 group dark:text-white dark:hover:bg-gray-700" 
    aria-controls="dropdown-doctors" data-collapse-toggle="dropdown-doctors">
   <i class="ri-group-line text-lg group-hover:text-blue-800"></i>
    <span class="flex-1 ms-3 text-left whitespace-nowrap">Doctors</span>
    <svg class="w-4 h-4 ms-auto text-gray-500 transition-transform group-hover:text-gray-900 
      dark:text-gray-400 dark:group-hover:text-white" 
      fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- Doctors Dropdown Menu -->
  <ul id="dropdown-doctors" class="hidden py-2 space-y-2">
    <li>
  <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-user-add-line text-md"></i>
    Add Doctor
  </a>
</li>

    <li>
   <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-list-radio text-md"></i>
    List Doctor
  </a>
    </li>
  </ul>
</li>

<li>
  <!-- Patients Dropdown Button -->
  <button type="button" 
    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group 
    hover:bg-blue-50 group dark:text-white dark:hover:bg-gray-700" 
    aria-controls="dropdown-patients" data-collapse-toggle="dropdown-patients">
     <i class="ri-group-line text-lg group-hover:text-blue-800"></i>

    <span class="flex-1 ms-3 text-left whitespace-nowrap">Patients</span>
    <svg class="w-4 h-4 ms-auto text-gray-500 transition-transform group-hover:text-gray-900 
      dark:text-gray-400 dark:group-hover:text-white" 
      fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- Patients Dropdown Menu -->
  <ul id="dropdown-patients" class="hidden py-2 space-y-2">
  
      <li>
  <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-user-add-line text-md"></i>
     Add Patient
  </a>
</li>

    <li>
   <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-list-radio text-md"></i>
      List Patients
  </a>
    </li>
  </ul>
</li>

  <li>
  <!-- Drivers Dropdown Button -->
  <button type="button" 
    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group 
   hover:bg-blue-50 group dark:text-white dark:hover:bg-gray-700" 
    aria-controls="dropdown-drivers" data-collapse-toggle="dropdown-drivers">
   <i class="ri-group-line text-lg group-hover:text-blue-800"></i>
    <span class="flex-1 ms-3 text-left whitespace-nowrap">Drivers</span>
    <svg class="w-4 h-4 ms-auto text-gray-500 transition-transform group-hover:text-gray-900 
      dark:text-gray-400 dark:group-hover:text-white" 
      fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- Doctors Dropdown Menu -->
  <ul id="dropdown-drivers" class="hidden py-2 space-y-2">
    <li>
  <a href="{{ route('drivers.create') }}"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-user-add-line text-md"></i>
    Add Driver
  </a>
</li>

    <li>
   <a href="{{ route('drivers.index') }}"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-list-radio text-md"></i>
    List Driver
  </a>
    </li>
  </ul>
</li>
<li>
  <!-- Ambulance Dropdown Button -->
  <button type="button" 
    class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group 
    hover:bg-blue-50 dark:text-white dark:hover:bg-gray-700" 
    aria-controls="dropdown-ambulance" data-collapse-toggle="dropdown-ambulance">
   <i class="ri-truck-line text-lg group-hover:text-blue-800"></i>
    <span class="flex-1 ms-3 text-left whitespace-nowrap">Ambulance</span>
    <svg class="w-4 h-4 ms-auto text-gray-500 transition-transform group-hover:text-gray-900 
      dark:text-gray-400 dark:group-hover:text-white" 
      fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"/>
    </svg>
  </button>

  <!-- Ambulance Dropdown Menu -->
  <ul id="dropdown-ambulance" class="hidden py-2 space-y-2">
  

     <li>
  <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-user-add-line text-md"></i>
    Add Ambulance
  </a>
</li>

    <li>
   <a href="#"
    class="flex items-center gap-2 w-full p-2 pl-11 text-gray-900 transition duration-75 rounded-lg 
    hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
    <i class="ri-list-radio text-md"></i>
     List Ambulances
  </a>
    </li>
  </ul>
</li>


         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-blue-50 dark:hover:bg-gray-700 group">
             <i class="ri-user-line text-lg group-hover:text-blue-800"></i>
               <span class="flex-1 ms-3 whitespace-nowrap">Users</span>
            </a>
         </li>

       <hr class="my-40 border-gray-300 mx-2 mt-9 dark:border-gray-600">

<li>
  <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button
      type="submit"
      aria-label="Logout"
      class="flex items-center p-2 text-gray-700 rounded-lg transition-colors duration-200 hover:bg-red-50 hover:text-red-900 dark:text-gray-200 dark:hover:bg-red-200 dark:hover:text-red-900 group w-full text-left"
    >
      <!-- Icon -->
      <svg
        class="shrink-0 w-5 h-5 text-red-500 transition-colors duration-200 group-hover:text-red-900"
        xmlns="http://www.w3.org/2000/svg"
        fill="none"
        viewBox="0 0 18 16"
        aria-hidden="true"
      >
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3"
        />
      </svg>

      <!-- Text -->
      <span class="ms-3 whitespace-nowrap">Logout</span>
    </button>
  </form>
</li>


       
      </ul>
   </div>
</aside>
