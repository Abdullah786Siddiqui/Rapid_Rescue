@if(session()->has('login') || session()->has('logout') || session()->has('driver') || session()->has('driverdel'))
@php
    // Session messages aur types handle karna
    $toast = [
        'message' => session('login') ?? session('logout') ?? session('driver') ?? session('driverdel'),
        'type'    => session('login') || session('driver') ? 'success' : 'error',
        'icon'    => session('login') ? '🎉' : (session('logout') ? '🚪' : '✅')
    ];
@endphp

<div id="toast-welcome" class="fixed inset-0 flex items-start justify-center top-2 z-[9999]">
    <div class="flex items-center space-x-3 px-6 py-2 
        {{ $toast['type'] === 'success' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}
        rounded-xl shadow-lg transform -translate-y-10 scale-90 opacity-0 
        transition-all duration-500 ease-out"
        role="alert">

        <!-- Icon -->
        <div>{{ $toast['icon'] }}</div>

        <!-- Message -->
        <div class="text-lg font-medium">
            {{ $toast['message'] }}
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
