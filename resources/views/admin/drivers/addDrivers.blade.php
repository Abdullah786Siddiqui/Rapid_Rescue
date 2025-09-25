@extends('layouts.Admin.admin')
@section('title', 'Create Driver')
@section('admin')
  <style>
      
        .container-card {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        }
        .icon {
            width: 20px;
            height: 20px;
            color: #4b5563;
        }
   
    </style>

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
        <button class="px-3 py-1.5 sm:px-4 sm:py-2 text-xs sm:text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 rounded-lg shadow-sm whitespace-nowrap">
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
      <button id="tabAccount" class="flex-1 py-1.5 text-xs font-medium text-gray-700 bg-white rounded-lg shadow-sm">Driver Account</button>
      <button id="tabDetails" class="flex-1 py-1.5 text-xs font-medium text-gray-500">Driver Details</button>
    </div>

    <!-- Tab Contents -->
    <div>
      <!-- Driver Account Fields -->
     <div id="contentAccount" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2">

  <!-- Full Name -->
  <div class="flex flex-col">
    <label for="fullName" class="text-sm font-semibold text-gray-700 mb-2">Full Name</label>
    <input type="text" id="fullName" placeholder="e.g. Ali Khan"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Email Address -->
  <div class="flex flex-col">
    <label for="email" class="text-sm font-semibold text-gray-700 mb-2">Email Address</label>
    <input type="email" id="email" placeholder="e.g. ali.khan@example.com"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Phone Number -->
  <div class="flex flex-col">
    <label for="number" class="text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
    <input type="number" id="number" placeholder="+923 #######"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Password -->
  <div class="flex flex-col">
    <label for="password" class="text-sm font-semibold text-gray-700 mb-2">Password</label>
    <input type="password" id="password" placeholder="Enter password"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Confirm Password spans full width -->
  <div class="flex flex-col md:col-span-2">
    <label for="confirmPassword" class="text-sm font-semibold text-gray-700 mb-2">Confirm Password</label>
    <input type="password" id="confirmPassword" placeholder="Confirm password"
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

</div>



      <!-- Driver Details Fields (hidden by default) -->
  <div id="contentDetails" class="grid grid-cols-1 md:grid-cols-2 gap-6 p-2 hidden">

  <!-- License Number spans full width on desktop -->
  <div class="flex flex-col md:col-span-2">
    <label for="license" class="text-sm font-semibold text-gray-700 mb-2">License Number</label>
    <input type="text" id="license" placeholder="Enter license number" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- License Expiry -->
  <div class="flex flex-col">
    <label for="license_expiry" class="text-sm font-semibold text-gray-700 mb-2">License Expiry</label>
    <input type="date" id="license_expiry" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Phone Number -->
  <div class="flex flex-col">
    <label for="phone" class="text-sm font-semibold text-gray-700 mb-2">Phone Number</label>
    <input type="text" id="phone" placeholder="Enter phone number" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Address spans full width on desktop -->
  <div class="flex flex-col md:col-span-2">
    <label for="address" class="text-sm font-semibold text-gray-700 mb-2">Address</label>
    <input type="text" id="address" placeholder="Enter address" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Date of Birth -->
  <div class="flex flex-col">
    <label for="dob" class="text-sm font-semibold text-gray-700 mb-2">Date of Birth</label>
    <input type="date" id="dob" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
  </div>

  <!-- Hire Date -->
  <div class="flex flex-col">
    <label for="hiredate" class="text-sm font-semibold text-gray-700 mb-2">Hire Date</label>
    <input type="date" id="hiredate" 
      class="px-4 py-2 text-gray-900 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 transition duration-200">
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

  <div class="flex flex-col gap-3">

  <!-- Driver's License -->
  <div class="flex justify-between items-center bg-gray-50 p-3 rounded-lg border border-gray-200 cursor-pointer"
       onclick="document.getElementById('licenseUpload').click()">
    <div class="flex items-center gap-2.5">
      <!-- icon / preview -->
      <img src="https://cdn-icons-png.flaticon.com/128/12002/12002093.png" alt="License" id="licensePreview" class="w-8 h-8 rounded">
      <div>
        <div class="font-medium text-gray-900">Driver's License</div>
        <div class="text-xs text-gray-500">Required</div>
      </div>
    </div>
   <div class="w-10 h-10 flex items-center justify-center text-lg text-gray-900 bg-gray-200 rounded-xl shadow-sm hover:bg-gray-200 hover:shadow-md transition-all duration-200 cursor-pointer">
 <i class="ri-add-fill text-xl "></i>
</div>

    <input type="file" id="licenseUpload" class="hidden" accept="image/*" 
           onchange="previewImage(event, 'licensePreview')">
  </div>

  <!-- CNIC -->
  <div class="flex justify-between items-center bg-gray-50 p-3 rounded-lg border border-gray-200 cursor-pointer"
       onclick="document.getElementById('cnicUpload').click()">
    <div class="flex items-center gap-2.5">
      <img src="https://cdn-icons-png.flaticon.com/128/3410/3410389.png" alt="CNIC" id="cnicPreview" class="w-8 h-8 rounded">
      <div>
        <div class="font-medium text-gray-900">CNIC</div>
        <div class="text-xs text-gray-500">Required</div>
      </div>
    </div>
    <div class="w-10 h-10 flex items-center justify-center text-lg text-gray-900 bg-gray-200 rounded-xl shadow-sm hover:bg-gray-200 hover:shadow-md transition-all duration-200 cursor-pointer">
 <i class="ri-add-fill text-xl "></i>
</div>
    <input type="file" id="cnicUpload" class="hidden" accept="image/*" 
           onchange="previewImage(event, 'cnicPreview')">
  </div>

</div>

<script>
  function previewImage(event, previewId) {
    const file = event.target.files[0];
    if (!file) return;

    // Show preview
    const preview = document.getElementById(previewId);
    preview.src = URL.createObjectURL(file);

    // Send to backend to store path in DB
    const formData = new FormData();
    formData.append('document', file);

    fetch('upload.php', {
      method: 'POST',
      body: formData
    })
    .then(res => res.json())
    .then(data => console.log('File path stored in DB:', data.path))
    .catch(err => console.error(err));
  }
</script>

</div>


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