<aside id="sidebar"
    class="sidebar fixed top-0 left-0 z-40 w-64 h-screen bg-navy text-white transition-all duration-300 ease-in-out">
    <div class="h-full flex flex-col justify-between">
        <div>
            <!-- Logo -->
            <div class="flex items-center justify-center h-16 border-b border-navyLight">
                @if (Auth::user()->role == 'admin')
                    <h1 class="text-xl font-bold">Admin</h1>
                @else
                    <h1 class="text-xl font-bold">Alumni</h1>
                @endif
            </div>

            <!-- ADMIN SIDEBAR -->
            @if (Auth::user()->role == 'admin')
                <nav class="mt-6 px-4">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link @if (Route::is('admin.dashboard')) active @endif flex items-center px-6 py-3 text-gray-100 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                        Dashboard
                    </a>
                    <div class="relative">
                        <a href="{{ route('admin.student') }}" class="nav-link  flex items-center px-6 py-3 text-gray-300 rounded-lg mb-1"
                            id="">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z">
                                </path>
                            </svg>
                            Manage Students
                        </a>

                    </div>
                    <a href="{{ route('admin.form') }}"
                        class="nav-link @if (Route::is('admin.form')) active @endif flex items-center px-6 py-3 text-gray-300 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                        Reports
                    </a>
                </nav>
            @else
                <nav class="mt-6 px-4">
                    <a href="{{ route('user.dashboard') }}"
                        class="nav-link @if (Route::is('user.dashboard')) active @endif flex items-center px-6 py-3 text-gray-300 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="12" cy="8" r="4" stroke="currentColor" stroke-width="2"
                                fill="none" />
                            <path stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 20c0-3.314 3.582-6 8-6s8 2.686 8 6" />
                        </svg>
                        Profil
                    </a>

                    <a href="{{ route('user.forms') }}"
                        class="nav-link @if (Route::is('user.forms')) active @endif flex items-center px-6 py-3 text-gray-300 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="16" rx="2" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="8" y1="8" x2="16" y2="8" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="8" y1="12" x2="16" y2="12" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="8" y1="16" x2="12" y2="16" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Formulir
                    </a>

                    <a href="{{ route('user.transcript') }}"
                        class="nav-link @if (Route::is('user.transcript')) active @endif flex items-center px-6 py-3 text-gray-300 rounded-lg mb-1">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect x="4" y="4" width="16" height="16" rx="2" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 8h8M8 12h8M8 16h4" />
                        </svg>
                        Transkrip
                    </a>
                </nav>
            @endif

        </div>

        <!-- Profile Section -->
        <div class="p-4 border-t border-navyLight">
            <div class="flex items-center">
                <div class="relative w-10 h-10 rounded-full overflow-hidden bg-navyLight">
                    <svg class="absolute w-12 h-12 text-gray-400 -left-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="mt-4 w-full flex items-center justify-center px-4 py-2 bg-red-600 hover:bg-red-700 rounded-lg transition-colors duration-200">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                        </path>
                    </svg>
                    Logout
                </button>
            </form>

        </div>
    </div>
</aside>

<header class="bg-white shadow-sm py-4 px-6 md:hidden">
    <div class="flex items-center justify-between">
        <button id="menuToggle" class="text-gray-600 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                </path>
            </svg>
        </button>

        <div class="w-6"></div> <!-- Spacer for alignment -->
    </div>
</header>

<script>
    // Mendapatkan elemen yang dibutuhkan
    const manageStudentsLink = document.getElementById('manageStudents');
    const dropdownContent = document.getElementById('dropdownContent');

    // Menambahkan event listener untuk menghandle klik
    manageStudentsLink.addEventListener('click', function(event) {
        event.preventDefault(); // Mencegah link berfungsi seperti biasa
        dropdownContent.classList.toggle('hidden'); // Toggle kelas hidden
        dropdownContent.classList.toggle('block'); // Menampilkan dropdown
    });
</script>
