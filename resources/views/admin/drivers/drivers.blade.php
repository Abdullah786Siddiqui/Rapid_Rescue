@extends('layouts.Admin.admin')
@section('title', 'Driver List')
@section('admin')
   <div class="max-w-7xl mx-auto ">
        <!-- Header Section -->
      <div class="flex flex-row lg:flex-row  justify-between items-center md:flex-col md:gap-2 sm:flex-col sm:gap-2 max-sm:flex-col    border border-gray-200 p-3 sm:p-3 shadow-md  rounded-2xl">
    <div>
        <h1 class="text-lg sm:text-lg lg:text-left  md:text-center max-sm:text-center sm:text-center font-bold text-gray-900 ">Driver List</h1>
        <p class="mt-1 text-xs sm:text-sm text-gray-500">Register a new driver and their vehicle details.</p>
    </div>
    <div class="mt-3 sm:mt-0 flex flex-row gap-2 w-full sm:w-auto">
    <a href="{{ route('drivers.create') }}" 
       class="w-full sm:w-auto px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-sm text-center whitespace-nowrap transition-colors duration-200">
        Add Driver
    </a>
</div>

</div>

<section >
  <div class=" rounded-lg dark:bg-gray-800 mt-4 ">
  
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-1  md:grid-cols-2 lg:grid-cols-3 gap-6">

      <!-- Total Users -->
      <div class="bg-[#FAE8FF] rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer transform hover:-translate-y-1">
        <div class="flex justify-between items-center">
          <span class="text-sm font-semibold text-gray-700">Total Drivers</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
          </svg>
        </div>
        <h2 class="mt-3 text-3xl font-bold text-gray-900">3,500</h2>
        <p class="text-xs text-gray-500 mt-1">+150 this month</p>
      </div>

      <!-- Total Requests -->
      <div class="bg-[#DBFCE7] rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer transform hover:-translate-y-1">
        <div class="flex justify-between items-center">
          <span class="text-sm font-semibold text-gray-700">Active Drivers</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m4 0h1v4h1m-6 4h6" />
          </svg>
        </div>
        <h2 class="mt-3 text-3xl font-bold text-gray-900">470</h2>
        <p class="text-xs text-gray-500 mt-1">128 need attention</p>
      </div>

      <!-- Total Patients -->
      <div class="bg-[#FEF9C2] rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 cursor-pointer transform hover:-translate-y-1">
        <div class="flex justify-between items-center">
          <span class="text-sm font-semibold text-gray-700">Inactive Drivers</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-pink-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
          </svg>
        </div>
        <h2 class="mt-3 text-3xl font-bold text-gray-900">2,350</h2>
        <p class="text-xs text-gray-500 mt-1">+45 today</p>
      </div>

    </div>
  </div>
</section>

{{-- Table --}}

<div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4 md:gap-6 mt-4 bg-white dark:bg-gray-900 ">

    <!-- Left Section: Search -->
    <div class="w-full md:w-1/3 relative">
        <label for="table-search-users" class="sr-only">Search</label>
        <div class="absolute inset-y-0 left-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                      d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </div>
        <input type="text" id="search" name="search"    
               class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg 
                      bg-gray-50 focus:ring-blue-500 focus:border-blue-500 
                      dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                      dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" 
               placeholder="Search drivers...">
    </div>

    <!-- Right Section: Buttons -->
  <div class="flex flex-col md:flex-row items-stretch gap-3 w-full md:w-auto">

    <!-- Export Button -->
    <button type="button" 
            class="w-full md:w-auto inline-flex items-center justify-center px-4 py-1.5 text-sm font-medium 
                   text-gray-700 bg-gray-100 border border-gray-300 rounded-lg hover:bg-gray-200 
                   dark:bg-gray-800 dark:text-gray-200 dark:border-gray-600 dark:hover:bg-gray-700 transition">
        <i class="ri-download-2-line mr-1"></i> Export
    </button>

    <!-- Actions Dropdown -->
  <div class="relative w-full md:w-auto">
    <!-- Button -->
    <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
        class="w-full md:w-auto flex items-center justify-between text-gray-700 bg-white border border-gray-300 
               hover:bg-gray-100 focus:ring-2 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2 
               dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 dark:hover:bg-gray-700 dark:focus:ring-gray-600
               transition-all duration-150"
        type="button">
        Status
        <svg class="w-3 h-3 ms-2" fill="none" viewBox="0 0 10 6">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="m1 1 4 4 4-4"/>
        </svg>
    </button>

    <!-- Dropdown Menu -->
    <div id="dropdownAction"
        class="z-20 hidden absolute right-0 mt-2 w-44 bg-white rounded-lg shadow-lg border border-gray-200 
               dark:bg-gray-700 dark:border-gray-600">
        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200">
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 rounded-lg hover:bg-blue-50 hover:text-blue-700 dark:hover:bg-blue-600 dark:hover:text-white transition">
                    <span class="w-2.5 h-2.5 rounded-full bg-green-500 me-2"></span> Online
                </a>
            </li>
            <li>
                <a href="#"
                   class="flex items-center px-4 py-2 rounded-lg hover:bg-red-50 hover:text-red-700 dark:hover:bg-red-600 dark:hover:text-white transition">
                    <span class="w-2.5 h-2.5 rounded-full bg-red-500 me-2"></span> Offline
                </a>
            </li>
        </ul>
    </div>
</div>


</div>


</div>

<div class="relative overflow-x-auto shadow-lg sm:rounded-lg mt-4">
 

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 border">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Position
                </th>
                <th scope="col" class="px-6 py-3">
                    Status
                </th>
                <th scope="col" class="px-6 py-3">
                    hiredate
                </th>
                <th scope="col" class="px-14 py-3 ">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
    @forelse ($drivers as $driver)
   
{{-- <pre>
{{ print_r($drivers->toArray()) }}
</pre> --}}

        <tr class="bg-white border rounded-md dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
            <td class="w-4 p-4">
                <div class="flex items-center">
                    <input id="checkbox-{{ $driver->id }}" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="checkbox-{{ $driver->id }}" class="sr-only">checkbox</label>
                </div>
            </td>
          <th scope="row" class="flex flex-col sm:flex-row items-center px-4 py-4 text-gray-900 dark:text-white">
    <!-- Profile Image -->
    <img class="w-12 h-12 sm:w-10 sm:h-10 rounded-full object-cover" 
         src="{{ $driver->driverProfile && $driver->driverProfile->driverProfileUrl ? asset('storage/' . $driver->driverProfile->driverProfileUrl) : asset('images/default-avatar.png') }}" 
         alt="Driver image">

    <!-- Name & Email -->
    <div class="mt-2 sm:mt-0 sm:ms-3 text-center sm:text-left">
        <div class="text-base font-semibold truncate">{{ $driver->name }}</div>
        <div class="text-sm text-gray-500 dark:text-gray-400 truncate">{{ $driver->email }}</div>
    </div>  
</th>

            <td class="px-6 py-4">
               
               Driver
            </td>
            <td class="px-6 py-4">
             <div class="flex items-center">
        @if ($driver->driverProfile && ($driver->driverProfile->status === 'OFF_DUTY' || $driver->driverProfile->status === 'UNAVAILABLE'))
        <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
    @else
        <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
    @endif
</div>

            </td>
            <td class="px-6 py-4">
               {{ optional($driver->driverProfile)->hiredate ?? '-' }}

            </td>
    <td class="px-6 py-4">
                <a href="#" 
                   class="inline-flex items-center px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 font-medium">
                   <i class="ri-edit-line mr-2 text-gray-600 dark:text-gray-200"></i> Edit
                </a>
              <button command="show-modal" commandfor="dialog" class="inline-flex items-center px-3 py-1 bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200 rounded-md hover:bg-gray-200 dark:hover:bg-gray-600 transition-all duration-200 font-medium">
                   <i class="ri-delete-bin-6-line  text-gray-600 hover:text-red-600 dark:text-gray-200"></i></button>

            </td>


        </tr>
        <el-dialog>
  <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 m-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent p-0 backdrop:bg-transparent">
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-[closed]:opacity-0 data-[enter]:duration-300 data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in"></el-dialog-backdrop>

   <div tabindex="0" class="fixed inset-0 z-50 flex items-center justify-center bg-black/40 p-4 sm:p-0">
  <el-dialog-panel
    class="relative w-full max-w-md transform overflow-hidden rounded-2xl bg-white shadow-xl transition-all
           data-[closed]:translate-y-4 data-[closed]:opacity-0 data-[enter]:duration-300 
           data-[leave]:duration-200 data-[enter]:ease-out data-[leave]:ease-in 
           sm:scale-100 sm:rounded-2xl sm:shadow-2xl">

    <!-- Header -->
    <div class="px-6 pt-6 text-center">
      <h3 id="dialog-title" class="text-xl font-semibold text-gray-900">
        Delete Driver
      </h3>
      <p class="mt-3 text-sm leading-6 text-gray-600">
        Are you sure you want to delete this driver record from the table?  
        This action is <span class="font-semibold text-red-600">irreversible</span>.
      </p>
    </div>

    <!-- Footer -->
    <div class="mt-2 flex flex-col-reverse gap-3 px-6 py-5 bg-gray-50 sm:flex-row sm:justify-end sm:gap-4">
      <button type="button" command="close" commandfor="dialog"
        class="inline-flex justify-center rounded-lg border border-gray-300 bg-white px-4 py-2.5 
               text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-100 hover:border-gray-400
               transition-colors duration-200 ease-in-out">
        Cancel
      </button>
      <form action="{{ route('drivers.destroy', $driver->id) }}" method="POST" >
    @csrf
    @method('DELETE')
      <button type="submit"    
        class="inline-flex justify-center rounded-lg bg-red-600 px-4 py-2.5 text-sm font-semibold 
               text-white shadow-sm hover:bg-red-500 focus:ring-2 focus:ring-red-500 focus:ring-offset-2
               transition-colors duration-200 ease-in-out">
        Delete
      </button>
      </form>
    </div>
  </el-dialog-panel>
</div>

  </dialog>
</el-dialog>
    @empty
        <tr>
            <td colspan="6" class="text-center py-4 text-gray-500">No drivers found</td>
        </tr>
    @endforelse
</tbody>

    </table>
</div>

</div>




  
@endsection