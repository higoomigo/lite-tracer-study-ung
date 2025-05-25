<nav class="navy text-white py-4 px-6 fixed w-full z-50">
    <div class="container mx-auto flex justify-between items-center">
        <div class="flex items-center">
            <svg class="w-10 h-10 mr-2" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25 5L5 15V35L25 45L45 35V15L25 5Z" stroke="white" stroke-width="2" fill="#003366"></path>
                <path d="M25 5V25M25 25V45M25 25L5 15M25 25L45 15" stroke="white" stroke-width="2"></path>
            </svg>
            <span class="font-bold text-xl">Teknik Informatika - Tracer Study</span>
        </div>
        <div class="hidden md:flex space-x-6 my-6">
            <a href="{{ url('/') }}" class="hover:text-blue-200 transition">Beranda</a>
            <a href="{{ url('/#statistik') }}" class="hover:text-blue-200 transition">Statistik</a>
            <a href="{{ url('/#programs') }}" class="hover:text-blue-200 transition">Program Studi</a>
            <a href="{{ url('/#contact') }}" class="hover:text-blue-200 transition">Kontak</a>
            @if(Route::has('login'))
                @auth
                    @if(Auth::user()->role === 'admin')
                        <!-- Tautan untuk Admin -->
                        <a href="{{ url('/admin/dashboard') }}" class="btn-navy rounded-md font-semibold shadow-lg">Admin Dashboard</a>
                    @elseif(Auth::user()->role === 'mahasiswa')
                        <!-- Tautan untuk Mahasiswa -->
                        <a href="{{ url('/user/dashboard') }}" class="btn-navy rounded-md font-semibold shadow-lg">User Dashboard</a>
                    @endif
                @else
                    <a href="{{ route('login') }}" class="btn-navy rounded-md font-semibold shadow-lg">Login</a>
                @endauth
            @endif
            {{-- <button class="btn-navy py-1 px-4 rounded-md font-semibold text-md shadow-lg">Login</button> --}}
        </div>
        <div class="md:hidden">
            <button id="mobile-menu-button" class="focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden bg-navy absolute top-full left-0 w-full py-2 px-4">
        <a href="#home" class="block py-2 hover:text-blue-200 transition">Beranda</a>
        <a href="#statistics" class="block py-2 hover:text-blue-200 transition">Statistik</a>
        <a href="#programs" class="block py-2 hover:text-blue-200 transition">Program Studi</a>
        <a href="#testimonials" class="block py-2 hover:text-blue-200 transition">Testimonial</a>
        <a href="#contact" class="block py-2 hover:text-blue-200 transition">Kontak</a>
        <a href="#Login" class="block py-2 hover:text-blue-200 transition">Login</a>
    </div>
</nav>