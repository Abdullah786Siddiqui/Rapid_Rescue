@extends('layouts.User.user')
@section('title', 'Home')
@section('user')


{{-- Hero Section --}}
<section class="relative py-12 max-sm:py-6" data-scroll-section>
    <div class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col lg:flex-row items-center justify-between space-y-10 lg:space-y-0">
        
     
        <div class="w-full lg:w-1/2 flex flex-col justify-center text-center lg:text-left space-y-6">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-blue-800 drop-shadow-lg leading-tight">
                Quick & Reliable <span class="text-[#D42424]">Ambulance Booking</span>
            </h1>
            <p class="text-gray-700 text-lg sm:text-xl md:text-2xl max-w-lg mx-auto lg:mx-0">
                Immediate medical assistance anytime, anywhere. Our hospital ensures fast response and professional care.
            </p>

            <!-- Buttons -->
            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-4 sm:gap-6 mt-4">
                <a href="{{ url('/map') }}"
   class="bg-gradient-to-r from-red-700 via-red-600 to-red-500 
          text-white font-bold rounded-2xl shadow-lg shadow-red-300/50
          px-6 py-3 sm:px-8 sm:py-4 md:px-10 md:py-4 
          text-[clamp(1rem,2vw,1.5rem)]
          transition-transform transform hover:scale-105 
          hover:from-red-800 hover:via-red-700 hover:to-red-600
          text-center">
   Book Ambulance
</a>

                <a href="{{ url('/contact') }}"
                   class="bg-gradient-to-r from-gray-200 to-gray-300 text-gray-800 font-bold rounded-2xl shadow-lg
                          px-6 py-3 sm:px-8 sm:py-4 md:px-10 md:py-4 text-[clamp(1rem,2vw,1.5rem)]
                          transition-transform transform hover:scale-105 hover:from-gray-300 hover:to-gray-400 text-center">
                    Contact Us
                </a>
            </div>
        </div>

        <!-- Right Image -->
        <div class="w-full lg:w-1/2 flex justify-center lg:justify-end relative mt-8 lg:mt-0">
            <div class="relative w-80 sm:w-96 md:w-[28rem]">
                <img src="{{ asset('storage/ambulance.png') }}" 
                     alt="Hero" 
                     class="w-full h-auto animate-float drop-shadow-2xl rounded-3xl">
            </div>
        </div>
    </div>

    <!-- Decorative shapes -->
    <div class="absolute top-0 left-0 w-32 h-32 bg-red-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
    <div class="absolute bottom-0 right-0 w-48 h-48 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse-slow"></div>
</section>

{{-- About Section --}}
<section>


  <!-- Hero Section -->
  <div class="container max-w-7xl mx-auto px-4 py-16 md:py-24 my-16" data-scroll-section>
    <div class="flex flex-col md:flex-row items-center justify-between gap-10 md:gap-16">

      <!-- Left Column -->
      <div
        class="w-full md:w-1/2 lg:w-2/5 space-y-6 animate-fadeIn max-w-md mx-auto md:mx-0 text-center md:text-left">
        <h2 class="text-xs text-blue-600 font-semibold uppercase tracking-wider">
          Welcome to
        </h2>
        <h1
          class="text-4xl sm:text-5xl lg:text-6xl font-extrabold leading-tight text-slate-800 mb-4">
          <span class="text-[#D42424]">KS</span> Hospital
        </h1>
        <p class="text-base text-gray-500 font-medium">
          Your Health is our Mission
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          KS Hospital is a multi-speciality hospital under the bouquet of K S
          Health care, founded in February 2019 under the dynamic leadership of
          Dr. Basavaraj Kyavater, a leading Orthopaedic and Joint replacement
          surgeon.
        </p>
        <p class="text-lg text-gray-600 leading-relaxed">
          It is the first hospital in the region with world-class facilities,
          providing affordable healthcare with a patient-friendly environment
          and ethical, transparent medical practices.
        </p>

        <div class="flex flex-wrap justify-center md:justify-start gap-4">
          <button
            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-full shadow-lg transition-all duration-300 transform hover:-translate-y-1">
            Read More
          </button>
         <button
  class="bg-red-600 hover:bg-red-700 text-white font-semibold 
         py-3 px-8 rounded-full shadow-lg shadow-red-300/40
         transition-all duration-300 transform hover:-translate-y-1">
  Book Appointment
</button>

        </div>
      </div>

     <!-- Right Column -->
<div
  class="w-full md:w-1/2 lg:w-3/5 relative flex flex-col items-center justify-center gap-6 max-sm:gap-0 mt-12 md:mt-0 animate-fadeIn">

  <!-- Large Hexagon -->
  <div
    class="relative w-64 h-64 sm:w-72 sm:h-72 md:w-80 md:h-80 lg:w-96 lg:h-96 hexagon overflow-hidden shadow-2xl z-10">
    <img
      src="https://images.unsplash.com/photo-1496048212478-63d05be2a8bb?w=800&auto=format&fit=crop&q=60"
      alt="Hospital Building"
      class="w-full h-full object-cover transform transition-transform duration-500 hover:scale-110" />
  </div>

  <!-- Small Hexagons Wrapper (for mobile stacking) -->
  <div class="flex md:block gap-4 mt-4 md:mt-0">
    <!-- Small Hexagon Top-Left -->
    <div
      class="hexagon hexagon-small overflow-hidden shadow-xl border-4 border-white transition-all duration-300 transform hover:scale-105 w-28 h-28 sm:w-32 sm:h-32 md:w-48 md:h-48 md:absolute md:-top-12 md:-left-12 z-20">
      <img
        src="https://plus.unsplash.com/premium_photo-1682096897068-03cd6e070806?w=800&auto=format&fit=crop&q=60"
        alt="Operating Room"
        class="w-full h-full object-cover" />
    </div>

    <!-- Small Hexagon Bottom-Right -->
    <div
      class="hexagon hexagon-small overflow-hidden shadow-xl border-4 border-white transition-all duration-300 transform hover:scale-105 w-28 h-28 sm:w-32 sm:h-32 md:w-48 md:h-48 md:absolute md:-bottom-12 md:-right-12 z-20">
      <img
        src="https://plus.unsplash.com/premium_photo-1664303492452-76f0745336fd?w=800&auto=format&fit=crop&q=60"
        alt="Surgeons at Work"
        class="w-full h-full object-cover" />
    </div>
  </div>

  <!-- Decorative Blue/Pink Border Lines (only for md+) -->
  <div class="absolute inset-0 z-0 hidden md:block">
    <svg viewBox="0 0 100 100" class="w-full h-full">
      <polygon
        points="50,0 100,25 100,75 50,100 0,75 0,25"
        fill="none"
        stroke="#2563EB"
        stroke-width="2"
        class="opacity-30"></polygon>
      <polygon
        points="40,10 90,35 90,85 40,90 10,65 10,15"
        fill="none"
        stroke="#EC4899"
        stroke-width="2"
        class="opacity-30"></polygon>
    </svg>
  </div>
</div>

    </div>
  </div>
</section>
{{-- Doctor Section --}}

<section class="mb-4  px-4 sm:px-8" id="doctors" data-scroll-section>
  <div class="max-w-7xl mx-auto">
    <!-- Title -->

        <div class="text-center mb-16">
      <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">
       Meet Our Doctors
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
       Highly skilled professionals dedicated to your well-being. Discover our team of doctors specializing in different fields to provide the best care possible.
      </p>
      <div class="mt-6 h-1 w-24 mx-auto bg-gradient-to-r from-blue-500 to-red-500 rounded-full"></div>
    </div>

    <!-- Doctors Grid -->
    <div class="grid  md:grid-cols-2   max-sm:grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
      <!-- Doctor Card -->
      <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:shadow-2xl group cursor-pointer">
        <div class="relative h-80 sm:h-96 overflow-hidden">
          <img src="https://i.pinimg.com/736x/ef/d0/94/efd09480361a7ede8ef71bd97eedb2c5.jpg"
               alt="Stella O'Brien"
               class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:blur-sm">
          
          <!-- Info -->
          <div class="absolute bottom-0 left-0 right-0 p-6 z-10 text-white">
            <h3 class="text-lg sm:text-xl font-bold">Stella O'Brien</h3>
            <p class="text-sm sm:text-base font-light text-gray-200">Anesthesiologist</p>
          </div>
          
          <!-- Overlay + Button -->
          <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500">
           <button 
  class="px-6 py-2 rounded-xl font-semibold text-white 
         bg-transparent backdrop-blur-md border border-white/30 
         shadow-md hover:scale-110 
         transition-all duration-500">
  View More
</button>
          </div>
        </div>
      </div>

      <!-- Repeat for Other Doctors -->
      <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:shadow-2xl group cursor-pointer">
        <div class="relative h-80 sm:h-96 overflow-hidden">
          <img src="https://i.pinimg.com/1200x/6c/0d/88/6c0d884d00a9a3ee52662ca5ab0d719b.jpg"
               alt="John Doe"
               class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:blur-sm">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-10 text-white">
            <h3 class="text-lg sm:text-xl font-bold">John Doe</h3>
            <p class="text-sm sm:text-base font-light text-gray-200">Cardiac Surgeon</p>
          </div>
          <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500">
           <button 
  class="px-6 py-2 rounded-xl font-semibold text-white 
         bg-transparent backdrop-blur-md border border-white/30 
         shadow-md hover:scale-110 
         transition-all duration-500">
  View More
</button>
          </div>
        </div>
      </div>

      <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:shadow-2xl group cursor-pointer">
        <div class="relative h-80 sm:h-96 overflow-hidden">
          <img src="https://i.pinimg.com/736x/7a/58/b6/7a58b6f7d3bf0ef94af6a4af305d9a23.jpg"
               alt="Steven Byrne"
               class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:blur-sm">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-10 text-white">
            <h3 class="text-lg sm:text-xl font-bold">Steven Byrne</h3>
            <p class="text-sm sm:text-base font-light text-gray-200">Pediatrician</p>
          </div>
          <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500">
          <button 
  class="px-6 py-2 rounded-xl font-semibold text-white 
         bg-transparent backdrop-blur-md border border-white/30 
         shadow-md hover:scale-110 
         transition-all duration-500">
  View More
</button>
          </div>
        </div>
      </div>

      <div class="relative bg-white rounded-2xl overflow-hidden shadow-lg transform transition duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:shadow-2xl group cursor-pointer">
        <div class="relative h-80 sm:h-96 overflow-hidden">
          <img src="https://i.pinimg.com/736x/59/8c/80/598c809632f9de89259c069ef1d9bee8.jpg"
               alt="Lisa Doe"
               class="w-full h-full object-cover transition duration-500 group-hover:scale-110 group-hover:blur-sm">
          <div class="absolute bottom-0 left-0 right-0 p-6 z-10 text-white">
            <h3 class="text-lg sm:text-xl font-bold">Lisa Doe</h3>
            <p class="text-sm sm:text-base font-light text-gray-200">Psychologist</p>
          </div>
          <div class="absolute inset-0 flex items-center justify-center bg-black/40 opacity-0 group-hover:opacity-100 transition-all duration-500">
      <button 
  class="px-6 py-2 rounded-xl font-semibold text-white 
         bg-transparent backdrop-blur-md border border-white/30 
         shadow-md hover:scale-110 
         transition-all duration-500">
  View More
</button>


          </div>
        </div>
      </div>
    </div>

 <div class="flex justify-end mt-10">
  <button 
    class="px-6 py-3 rounded-full font-semibold text-white 
           bg-red-600 hover:bg-red-700
           shadow-lg hover:scale-105 
            transition-all duration-500">
    View More Doctors
  </button>
</div>

  </div>

</section>
{{-- Services Section --}}

<section  data-scroll-section> 
  <div class="max-w-7xl mx-auto px-6 lg:px-8 py-20 text-gray-800">

    <!-- Header -->
    <div class="text-center mb-16">
      <span class="inline-block bg-blue-100 text-blue-600 text-sm font-semibold py-2 px-6 rounded-full mb-4">
        OUR SERVICES
      </span>
    
       <div class="text-center mb-16">
      <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">
        Our Services For You
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
       Explore our professional services designed to provide quality healthcare, convenience, and peace of mind.
      </p>
      <div class="mt-6 h-1 w-24 mx-auto bg-gradient-to-r from-blue-500 to-red-500 rounded-full"></div>
    </div>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">


      <!-- Service Card 1 -->
      <div class="relative rounded-3xl p-8 text-center bg-gradient-to-tr from-blue-50 to-blue-200 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:shadow-2xl group overflow-hidden cursor-pointer">
        <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full bg-blue-300 opacity-30 blur-3xl"></div>
        <div class="flex justify-center mb-6 relative z-10">
          <div class="w-20 h-20 rounded-full flex items-center justify-center bg-blue-300 group-hover:scale-110 transition-transform duration-500">
            <svg class="w-10 h-10 text-blue-700 group-hover:text-blue-800 transition-colors duration-500" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-blue-700 group-hover:text-blue-900 transition-colors duration-500 relative z-10">24/7 Emergency</h3>
        <p class="text-gray-600 group-hover:text-gray-800 transition-colors duration-500 relative z-10">
          Immediate response and medical assistance anytime, anywhere.
        </p>
      </div>

      <!-- Service Card 2 -->
      <div class="relative rounded-3xl p-8 text-center bg-gradient-to-tr from-red-50 to-red-200 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:shadow-2xl group overflow-hidden cursor-pointer">
        <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full bg-red-300 opacity-30 blur-3xl"></div>
        <div class="flex justify-center mb-6 relative z-10">
          <div class="w-20 h-20 rounded-full flex items-center justify-center bg-red-300 group-hover:scale-110 transition-transform duration-500">
            <svg class="w-10 h-10 text-red-700 group-hover:text-red-800 transition-colors duration-500" fill="currentColor" viewBox="0 0 24 24">
              <path d="M19 8H5c-1.1 0-2 .9-2 2v6c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2v-6c0-1.1-.9-2-2-2zm-2 4h-4v4h4v-4zm-8 4H5v-4h4v4z"/>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-red-700 group-hover:text-red-900 transition-colors duration-500 relative z-10">Medication Delivery</h3>
        <p class="text-gray-600 group-hover:text-gray-800 transition-colors duration-500 relative z-10">
          Fast and safe delivery of your prescribed medicines.
        </p>
      </div>

      <!-- Service Card 3 -->
      <div class="relative rounded-3xl p-8 text-center bg-gradient-to-tr from-blue-50 via-blue-100 to-blue-200 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:shadow-2xl group overflow-hidden cursor-pointer">
        <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full bg-blue-300 opacity-30 blur-3xl"></div>
        <div class="flex justify-center mb-6 relative z-10">
          <div class="w-20 h-20 rounded-full flex items-center justify-center bg-blue-300 group-hover:scale-110 transition-transform duration-500">
            <svg class="w-10 h-10 text-blue-700 group-hover:text-blue-900 transition-colors duration-500" fill="currentColor" viewBox="0 0 24 24">
              <path d="M15 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm-9-2c1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3 1.34 3 3 3zm11 6.5l-2.48-1.55c-1.12.75-2.48 1.55-3.52 1.55-2.83 0-5.12-2.29-5.12-5.12S8.17 6.29 11 6.29c1.04 0 2.4.8 3.52 1.55L17 10.5v6zm-2 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-blue-700 group-hover:text-blue-900 transition-colors duration-500 relative z-10">24hr Health Monitoring</h3>
        <p class="text-gray-600 group-hover:text-gray-800 transition-colors duration-500 relative z-10">
          Continuous tracking of your health stats with professional alerts.
        </p>
      </div>

      <!-- Service Card 4 -->
      <div class="relative rounded-3xl p-8 text-center bg-gradient-to-tr from-red-50 via-red-100 to-red-200 shadow-lg transform transition duration-500 hover:-translate-y-4 hover:shadow-2xl group overflow-hidden cursor-pointer">
        <div class="absolute -top-8 -right-8 w-32 h-32 rounded-full bg-red-300 opacity-30 blur-3xl"></div>
        <div class="flex justify-center mb-6 relative z-10">
          <div class="w-20 h-20 rounded-full flex items-center justify-center bg-red-300 group-hover:scale-110 transition-transform duration-500">
            <svg class="w-10 h-10 text-red-700 group-hover:text-red-900 transition-colors duration-500" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm-1-11H9v2h2v-2zm4 0h-2v2h2v-2z"/>
            </svg>
          </div>
        </div>
        <h3 class="text-xl font-semibold mb-2 text-red-700 group-hover:text-red-900 transition-colors duration-500 relative z-10">Ambulance Booking</h3>
        <p class="text-gray-600 group-hover:text-gray-800 transition-colors duration-500 relative z-10">
          Quick ambulance booking with real-time location tracking.
        </p>
        
      </div>
      </div>

 <div class="flex justify-end mt-10">
  <button 
    class="px-6 py-3 rounded-full font-semibold text-white 
           bg-red-600 hover:bg-red-700
           shadow-lg hover:scale-105 
            transition-all duration-500">
    View More Services
  </button>
</div>



</section>

{{-- Rewiews Section --}}

<section class="relative mb-16 py-20 px-6 lg:px-12 " data-scroll-section>
  <div class="max-w-7xl mx-auto">
    
    <!-- Heading -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-extrabold text-gray-900 tracking-tight">
        What Our Patients Say
      </h2>
      <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
        Honest experiences from people who trusted us with their health & well-being.
      </p>
      <div class="mt-6 h-1 w-24 mx-auto bg-gradient-to-r from-blue-500 to-red-500 rounded-full"></div>
    </div>

    <!-- Reviews Grid -->
    <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-3">
      
      <!-- Review Card -->
      <article class="relative rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 
                     bg-gradient-to-br from-blue-500/10 to-white/60 backdrop-blur-md border border-blue-200">
        <div class="flex items-start gap-4">
          <img class="w-16 h-16 rounded-full object-cover border-2 border-blue-500 shadow-sm" 
               src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTD3MMz_nvqayrRj2KzLT5A3rjgToNpmit81A&s" 
               alt="John Doe">
          <div class="flex-1">
            <h3 class="font-semibold text-gray-900 text-lg">John Doe</h3>
            <span class="text-sm text-gray-500">Visited: 2 weeks ago</span>
            <div class="flex mt-2 text-yellow-400">
              <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
          </div>
        </div>
        <p class="mt-4 text-gray-700 leading-relaxed italic border-l-4 border-blue-500 pl-4">
          "The staff was incredibly kind and attentive. I felt cared for every step of the way."
        </p>
      </article>

      <!-- Review Card -->
      <article class="relative rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 
                     bg-gradient-to-br from-red-500/10 to-white/60 backdrop-blur-md border border-red-200">
        <div class="flex items-start gap-4">
          <img class="w-16 h-16 rounded-full object-cover border-2 border-red-500 shadow-sm" 
               src="https://images.unsplash.com/photo-1525134479668-1bee5c7c6845?auto=format&fit=crop&w=80&q=80" 
               alt="Jane Smith">
          <div class="flex-1">
            <h3 class="font-semibold text-gray-900 text-lg">Jane Smith</h3>
            <span class="text-sm text-gray-500">Visited: 1 month ago</span>
            <div class="flex mt-2 text-yellow-400">
              <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
              <span class="text-gray-300">⭐</span>
            </div>
          </div>
        </div>
        <p class="mt-4 text-gray-700 leading-relaxed italic border-l-4 border-red-500 pl-4">
          "Doctor explained everything clearly. The facilities were spotless and efficient."
        </p>
      </article>

      <!-- Review Card -->
      <article class="relative rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 p-6 
                     bg-gradient-to-br from-blue-400/10 to-white/60 backdrop-blur-md border border-blue-200">
        <div class="flex items-start gap-4">
          <img class="w-16 h-16 rounded-full object-cover border-2 border-blue-500 shadow-sm" 
               src="https://img.freepik.com/free-photo/portrait-excited-brunette-girl-smiling-pointing-fingers-sideways-left-right-showing-advertisement-with-happy-pleased-face-standing-white-background_176420-47167.jpg?semt=ais_hybrid&w=740&q=80" 
               alt="Michael Brown">
          <div class="flex-1">
            <h3 class="font-semibold text-gray-900 text-lg">Michael Brown</h3>
            <span class="text-sm text-gray-500">Visited: 3 days ago</span>
            <div class="flex mt-2 text-yellow-400">
              <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
            </div>
          </div>
        </div>
        <p class="mt-4 text-gray-700 leading-relaxed italic border-l-4 border-blue-500 pl-4">
          "Recovery area was comfortable. Nurses checked regularly to ensure I was doing well."
        </p>
      </article>

    </div>
  </div>
</section>
{{-- Footer Section --}}

<footer class="bg-gradient-to-r from-blue-100 via-white to-red-100 text-gray-800 w-full p-10 md:p-14 lg:p-20" data-scroll-section>
  <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-12">

    <!-- Column 1: Brand Info -->
    <div class="col-span-2">
      <h3 class="text-2xl font-bold text-blue-900 mb-4">MediCare Hospital</h3>
      <p class="text-sm leading-relaxed mb-4 text-gray-600">
        Providing compassionate and expert medical care to our community.  
        Your health is our top priority, 24/7.
      </p>
      <div class="space-y-2 text-sm">
        <div class="flex items-center space-x-2">
          <span class="text-red-600">📍</span>
          <span>123 Medical Drive, Healthville, 54321</span>
        </div>
        <div class="flex items-center space-x-2">
          <span class="text-red-600">📞</span>
          <span>(123) 456-7890</span>
        </div>
        <div class="flex items-center space-x-2">
          <span class="text-red-600">📧</span>
          <span>support@medicare.com</span>
        </div>
      </div>
    </div>

    <!-- Column 2: Quick Links -->
    <div>
      <h3 class="text-lg font-semibold text-blue-900 mb-4">Quick Links</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-red-600 transition-colors">Home</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">About Us</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Services</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Doctors</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Appointments</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Contact</a></li>
      </ul>
    </div>

    <!-- Column 3: Departments -->
    <div>
      <h3 class="text-lg font-semibold text-blue-900 mb-4">Departments</h3>
      <ul class="space-y-2 text-sm">
        <li><a href="#" class="hover:text-red-600 transition-colors">Cardiology</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Neurology</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Orthopedics</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Pediatrics</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Oncology</a></li>
        <li><a href="#" class="hover:text-red-600 transition-colors">Emergency</a></li>
      </ul>
    </div>

    <!-- Column 4: Working Hours + Newsletter -->
    <div>
      <h3 class="text-lg font-semibold text-blue-900 mb-4">Working Hours</h3>
      <ul class="text-sm text-gray-600 space-y-1 mb-6">
        <li>Mon - Fri: <span class="text-gray-900 font-medium">08:00 - 20:00</span></li>
        <li>Saturday: <span class="text-gray-900 font-medium">09:00 - 17:00</span></li>
        <li>Sunday: <span class="text-red-600 font-medium">Closed</span></li>
      </ul>

      <h3 class="text-lg font-semibold text-blue-900 mb-4">Newsletter</h3>
      <form class="flex flex-col  sm:flex-row gap-2">
        <input type="email" placeholder="Your email"
          class="w-full sm:w-auto p-2 rounded-lg bg-white border border-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-red-400">
        <button type="submit"
          class="w-full sm:w-auto bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition-colors">
          Subscribe
        </button>
      </form>
    </div>

  </div>

  <!-- Social Media & Copyright -->
  <div class="mt-12 pt-8 border-t border-gray-300 flex flex-col md:flex-row items-center justify-between text-sm text-gray-600">
    <p>&copy; 2024 MediCare Hospital. All Rights Reserved.</p>
    <div class="flex space-x-4 mt-4 md:mt-0">
      <a href="#" class="p-2 bg-blue-100 rounded-full hover:bg-red-500 hover:text-white transition transform hover:scale-110">🌐</a>
      <a href="#" class="p-2 bg-blue-100 rounded-full hover:bg-red-500 hover:text-white transition transform hover:scale-110">🐦</a>
      <a href="#" class="p-2 bg-blue-100 rounded-full hover:bg-red-500 hover:text-white transition transform hover:scale-110">📘</a>
      <a href="#" class="p-2 bg-blue-100 rounded-full hover:bg-red-500 hover:text-white transition transform hover:scale-110">📸</a>
    </div>
  </div>
</footer>


 
    {{-- @auth
        <p>Welcome, {{ Auth::user()->name }} 👋</p>
    @endauth --}}

@endsection
