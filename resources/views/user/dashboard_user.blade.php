@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')
<!-- Main Content -->
    <!-- Mobile Header -->
    <header class="bg-white shadow-sm py-4 px-6 md:hidden">
        <div class="flex items-center justify-between">
            <button id="menuToggle" class="text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="text-lg font-semibold text-navy">{{ Auth::user()->name }}</h1>
            <div class="w-6"></div> <!-- Spacer for alignment -->
        </div>
    </header>

    <!-- Content Area -->
    <main class="p-6">
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang, {{ Auth::user()->name }}</h1>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg shadow-lg space-x-6">
            <!-- Profile Picture Section -->
            <div class="w-1/4">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=0D8ABC&color=fff&size=256" alt="Profile picture of {{ Auth::user()->name }}. User is facing forward and smiling. The background is a solid blue color." class="rounded-lg w-64 h-80 object-cover shadow-md border-4 border-gray-200">
            </div>
            
            <!-- Profile Details Section -->
            <div class="w-3/4">
                <div class="space-y-3">
                    <div>
                        <p class="text-lg text-gray-600"><strong>Name</strong></p>
                        <p> {{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Email</strong></p>
                        <p> {{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>NIM</strong></p>
                        <p> {{ Auth::user()->nim }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Program Studi</strong></p>
                        <p> {{ Auth::user()->prodi }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Angkatan</strong></p>
                        <p> {{ Auth::user()->angkatan }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Status</strong></p>
                        <p> {{ Auth::user()->status }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-reveal grid grid-cols-1 gap-6 mb-8" data-sr-id="9" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-4 gap-4">
                    <button class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                        </svg>
                        Add Student
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                        </svg>
                        New Course
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Generate Report
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Schedule Event
                    </button>
                </div>
            </div>
        
              
        
    </main>

@endsection
