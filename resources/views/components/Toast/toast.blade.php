@if(session('login') || session('logout'))
<div id="toast-welcome"
     class="fixed inset-0 flex items-start top-2 justify-center z-[9999]">
    <div class="flex items-center space-x-3 px-6 py-2  
         {{ session('login') ? 'bg-green-100' : 'bg-red-100' }} 
         rounded-xl shadow-lg transform -translate-y-10 scale-90 opacity-0 
         transition-all duration-500 ease-out"
         role="alert">

        <!-- Icon -->
        <div>
            @if(session('login'))
                🎉 
            @elseif(session('logout'))
                🚪
            @endif
        </div>

        <!-- Message -->
        <div class="text-lg font-medium {{ session('login') ? 'text-green-800' : 'text-red-800' }}">
            {{ session('login') ?? session('logout') }}
        </div>
    </div>
</div>




<script>
    const toast = document.querySelector('#toast-welcome div');

    // Entry animation (slide down + fade in)
    setTimeout(() => {
        toast.classList.remove("-translate-y-10", "opacity-0");
        toast.classList.add("translate-y-0", "opacity-100");
    }, 100);

    // Exit animation (slide up + fade out)
    setTimeout(() => {
        toast.classList.remove("translate-y-0", "opacity-100");
        toast.classList.add("-translate-y-10", "opacity-0");
        setTimeout(() => document.getElementById('toast-welcome')?.remove(), 500);
    }, 2500);
</script>
@endif
