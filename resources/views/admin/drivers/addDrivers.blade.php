@extends('layouts.Admin.admin')
@section('title', 'Create Driver')
@section('admin')
 
 <form action="{{ route('drivers.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="max-w-7xl mx-auto ">
        <!-- Header Section -->
      <div class="flex flex-row lg:flex-row  justify-between items-center md:flex-col md:gap-2 sm:flex-col sm:gap-2 max-sm:flex-col    border border-gray-200 p-3 sm:p-3 shadow-md  rounded-2xl">
    <div>
        <h1 class="text-lg sm:text-xl lg:text-left  md:text-center max-sm:text-center sm:text-center font-bold text-gray-900 ">Add New Driver</h1>
        <p class="mt-1 text-xs sm:text-sm text-gray-500">Register a new driver and their vehicle details.</p>
    </div>
    <div class="mt-3 sm:mt-0 flex flex-row  gap-2 ">
        <button class="px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-gray-700 bg-gray-100 hover:bg-gray-200 rounded-lg shadow-sm whitespace-nowrap">
            Save Draft
        </button>
        <button type="submit" class="px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-sm whitespace-nowrap">
            Register Driver
        </button>
    </div>
</div>


        <!-- Main Content Area -->
    <div class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
    <!-- Left Column: Driver Details -->
   <div class="flex flex-col gap-6 shadow-md ">
  <!-- Driver Details Card -->
  <div class="container-card rounded-xl p-4 h-full">
    <div class="flex justify-between items-center mb-3 pb-3 border-b border-gray-200">
      <h2 class="text-base font-semibold text-gray-900">Driver Details</h2>
      <span class="text-xs px-2 py-0.5 font-medium text-amber-700 bg-amber-100 rounded-full">Status: Pending</span>
    </div>

    <!-- Tabs -->
    <div class="flex mb-4 bg-gray-100 p-0.5 rounded-lg">
      <button type="button" id="tabAccount" class="flex-1 py-1.5 text-xs font-medium text-gray-700 bg-white rounded-lg shadow-sm">Driver Account</button>
      <button type="button" id="tabDetails" class="flex-1 py-1.5 text-xs font-medium text-gray-500">Driver Details</button>
    </div>

    <!-- Tab Contents -->
    <div>
      <!-- Driver Account Fields -->
     <div id="contentAccount" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2">

  <!-- Full Name -->
  <div class="flex flex-col">
    <label for="fullName" class="text-sm font-semibold text-gray-700 mb-2">Full Name</label>
    <input type="text" value="{{ old('name') }}" name="name" id="fullName" placeholder="e.g. Ali Khan"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
        @error('name')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Email Address -->
  <div class="flex flex-col">
    <label for="email" class="text-sm font-semibold text-gray-700 mb-2">Email Address</label>
    <input type="email" value="{{ old('email') }}" id="email" name="email" placeholder="e.g. ali.khan@example.com"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
       @error('email')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Phone Number -->
  <div class="flex flex-col">
    <label for="number" class="text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
    <input type="number" value="{{ old('phone') }}" name="phone" id="number" placeholder="+923 #######"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
       @error('phone')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Password -->
  <div class="flex flex-col">
    <label for="password" class="text-sm font-semibold text-gray-700 mb-2">Password</label>
    <input type="password" name="password" value="{{ old('password') }}" id="password" placeholder="Enter password"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
       @error('password')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Confirm Password spans full width -->
  <div class="flex flex-col md:col-span-2">
    <label for="confirmPassword" class="text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
    <input type="password" value="{{ old('password_confirmation') }}" name="password_confirmation" id="confirmPassword" placeholder="Confirm password"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
      
  @error('password_confirmation')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror 
  </div>

</div>



      <!-- Driver Details Fields (hidden by default) -->
  <div id="contentDetails" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2 hidden">

  <!-- License Number spans full width on desktop -->
  <div class="flex flex-col md:col-span-2">
    <label for="license" class="text-sm font-semibold text-gray-700 mb-2">License Number</label>
    <input type="text" value="{{ old('license_number') }}" name="license_number" id="license" placeholder="Enter license number" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
         @error('license_number')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- License Expiry -->
  <div class="flex flex-col">
    <label for="license_expiry" class="text-sm font-semibold text-gray-700 mb-2">License Expiry</label>
    <input type="date" value="{{ old('license_expiry') }}" name="license_expiry" id="license_expiry" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
         @error('license_expiry')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

<div class="flex flex-col">
  <label for="status" class="text-sm font-semibold text-gray-700 mb-2">Status</label>
  <select name="status" id="status" 
    class="px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500">
        
    <option hidden value="">-- Select Status --</option>

    <option value="AVAILABLE" {{ old('status') == 'AVAILABLE' ? 'selected' : '' }}>Available</option>
    <option value="OFF_DUTY" {{ old('status') == 'OFF_DUTY' ? 'selected' : '' }} disabled>Off Duty</option>
    <option value="ASSIGNED" {{ old('status') == 'ASSIGNED' ? 'selected' : '' }} disabled>Assigned</option>
    <option value="IN_TRANSIT" {{ old('status') == 'IN_TRANSIT' ? 'selected' : '' }} disabled>In Transit</option>
    <option value="UNAVAILABLE" {{ old('status') == 'UNAVAILABLE' ? 'selected' : '' }} disabled>Unavailable</option>
  </select>

  @error('status')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
</div>



  

  <!-- Address spans full width on desktop -->
  <div class="flex flex-col md:col-span-2">
    <label for="address" class="text-sm font-semibold text-gray-700 mb-2">Address</label>
    <input type="text" value="{{ old('address') }}" name="address" id="address" placeholder="Enter address" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
      @error('address')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Date of Birth -->
  <div class="flex flex-col">
    <label for="dob" class="text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
    <input type="date" value="{{ old('dob') }}" name="dob" id="dob" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
      @error('dob')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

  <!-- Hire Date -->
  <div class="flex flex-col">
    <label for="hiredate" class="text-sm font-semibold text-gray-700 mb-2">Hire Date</label>
    <input type="date" value="{{ old('hiredate') }}" name="hiredate" id="hiredate" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
      @error('hiredate')
      <span class="text-sm text-red-600 mt-1">{{ $message }}</span>
  @enderror
  </div>

</div>


    </div>
  </div>
</div>



    <!-- Right Column: Documents and Related Drivers -->
    <div class="flex flex-col gap-6 shadow-md ">
        <!-- Documents Card -->
   <div class="container-card rounded-xl p-4">
  <h2 class="text-base font-semibold text-gray-900 mb-3 pb-3 border-b border-gray-200">Documents</h2>
  <p class="text-xs text-gray-500 mb-4">Upload required documents (License, Vehicle Registration, etc.).</p>

  <!-- Grid Container -->
  <div class="grid grid-cols-3 gap-6 items-start">
  
  <!-- Left Column: Driver Profile -->
  <div class="flex flex-col items-center gap-4">
    <div class="w-36 h-36 rounded-full overflow-hidden border border-gray-200 shadow-lg cursor-pointer relative group"
         onclick="document.getElementById('profileUpload').click()">
      <img src="{{ old('driverProfileUrl') ? asset('storage/' . old('driverProfileUrl')) : 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQF02Jj8T2t7PdkytAw42HDuuSz7yXguKn8Lg&s' }}" 
           alt="Driver Profile" id="profilePreview" class="w-full h-full object-cover transition-transform duration-200 group-hover:scale-105">
      <!-- Hover Overlay -->
      <div class="absolute inset-0 bg-black bg-opacity-25 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
        <i class="ri-edit-2-line text-white text-3xl"></i>
      </div>
    </div>
    <label class="cursor-pointer text-sm text-gray-600 hover:text-gray-900 font-medium"
           onclick="document.getElementById('profileUpload').click()">
      Change Photo
      <input type="file" id="profileUpload" name="driverProfileUrl" class="hidden" accept="image/*" 
             onchange="previewImage(event, 'profilePreview')">
    </label>
  </div>

  <!-- Right Column: Documents -->
  <div class="col-span-2 flex flex-col gap-4">
    
    <!-- Driver's License -->
    <div class="flex justify-between items-center bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
         onclick="document.getElementById('licenseUpload').click()">
      <div class="flex items-center gap-3">
        <img src="{{ old('driverLicenseUrl') ? asset('storage/' . old('driverLicenseUrl')) : 'https://cdn-icons-png.flaticon.com/128/12002/12002093.png' }}"  
             alt="License" id="licensePreview" class="w-12 h-12 rounded-lg object-cover">
        <div>
          <div class="font-medium text-gray-900 text-sm">Driver's License</div>
          @error('driverLicenseUrl')
            <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
          @else
            <div class="text-xs text-gray-500">Required</div>
          @enderror
        </div>
      </div>
      <div class="w-12 h-12 flex items-center justify-center text-gray-900 bg-gray-200 rounded-xl shadow-sm hover:bg-gray-300 hover:shadow-md transition-all duration-200">
        <i class="ri-add-fill text-xl"></i>
      </div>
      <input type="file" id="licenseUpload" name="driverLicenseUrl" class="hidden" accept="image/*" 
             onchange="previewImage(event, 'licensePreview')">
    </div>

    <!-- CNIC -->
    <div class="flex justify-between items-center bg-white p-4 rounded-xl border border-gray-200 shadow-sm hover:shadow-md transition-shadow duration-300 cursor-pointer"
         onclick="document.getElementById('cnicUpload').click()">
      <div class="flex items-center gap-3">
        <img src="{{ old('driverNicUrl') ? asset('storage/' . old('driverNicUrl')) : 'https://cdn-icons-png.flaticon.com/128/3410/3410389.png' }}" 
             alt="CNIC" id="cnicPreview" class="w-12 h-12 rounded-lg object-cover">
        <div>
          <div class="font-medium text-gray-900 text-sm">CNIC</div>
          @error('driverNicUrl')
            <span class="text-xs text-red-600 mt-1">{{ $message }}</span>
          @else
            <div class="text-xs text-gray-500">Required</div>
          @enderror
        </div>
      </div>
      <div class="w-12 h-12 flex items-center justify-center text-gray-900 bg-gray-200 rounded-xl shadow-sm hover:bg-gray-300 hover:shadow-md transition-all duration-200">
        <i class="ri-add-fill text-xl"></i>
      </div>
      <input type="file" id="cnicUpload" name="driverNicUrl" class="hidden" accept="image/*" 
             onchange="previewImage(event, 'cnicPreview')">
    </div>

  </div>
</div>

</div>

<script>
function previewImage(event, previewId) {
  const file = event.target.files[0];
  if (!file) return;

  const preview = document.getElementById(previewId);
  preview.src = URL.createObjectURL(file);
}
</script>



        <!-- Related Drivers Card -->
        <div class="container-card rounded-xl p-5 bg-white shadow-sm">
    <!-- Header -->
    <div class="flex justify-between items-center mb-4 border-b border-gray-200 pb-2">
        <h2 class="text-lg font-semibold text-gray-900">Related Drivers</h2>
        <a href="#" class="px-3 py-1.5 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">
            View All
        </a>
    </div>

    <!-- Driver List -->
    <div class="flex flex-col gap-3">
        <!-- Single Driver Item -->
        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <!-- Icon/Avatar -->
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-sm font-medium">
                    A
                </div>
                <div>
                    <div class="font-medium text-gray-900">Ali Khan</div>
                    <div class="text-xs text-gray-500">License: DL-12345</div>
                </div>
            </div>
            <button class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-red-500 rounded-full hover:bg-gray-100 transition">
                <!-- delete icon -->
               <i class="ri-delete-bin-6-line"></i>
            </button>
        </div>

        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-sm font-medium">
                    S
                </div>
                <div>
                    <div class="font-medium text-gray-900">Sara Ahmed</div>
                    <div class="text-xs text-gray-500">License: DL-67890</div>
                </div>
            </div>
            <button class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-red-500 rounded-full hover:bg-gray-100 transition">
                <i class="ri-delete-bin-6-line"></i>
            </button>
        </div>

        <div class="flex justify-between items-center p-2 rounded-lg hover:bg-gray-50 transition">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 text-sm font-medium">
                    H
                </div>
                <div>
                    <div class="font-medium text-gray-900">Hamza Rafiq</div>
                    <div class="text-xs text-gray-500">License: DL-54321</div>
                </div>
            </div>
            <button class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-red-500 rounded-full hover:bg-gray-100 transition">
             <i class="ri-delete-bin-6-line"></i>
            </button>
        </div>
    </div>
</div>

    </div>
</div>


    </div>
</form>


    <script>
       const tabAccount = document.getElementById('tabAccount');
  const tabDetails = document.getElementById('tabDetails');
  const contentAccount = document.getElementById('contentAccount');
  const contentDetails = document.getElementById('contentDetails');

  tabAccount.addEventListener('click', () => {
    contentAccount.classList.remove('hidden');
    contentDetails.classList.add('hidden');

    tabAccount.classList.add('bg-white', 'text-gray-700', 'shadow-sm');
    tabAccount.classList.remove('text-gray-500');

    tabDetails.classList.remove('bg-white', 'text-gray-700', 'shadow-sm');
    tabDetails.classList.add('text-gray-500');
  });

  tabDetails.addEventListener('click', () => {
    contentAccount.classList.add('hidden');
    contentDetails.classList.remove('hidden');

    tabDetails.classList.add('bg-white', 'text-gray-700', 'shadow-sm');
    tabDetails.classList.remove('text-gray-500');

    tabAccount.classList.remove('bg-white', 'text-gray-700', 'shadow-sm');
    tabAccount.classList.add('text-gray-500');
  });
    </script>
  
@endsection