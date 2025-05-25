@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')
<!-- Main Content -->
    <!-- Mobile Header -->
    

    <!-- Content Area -->
    <main class="p-6">
        <!-- Welcome Section -->
        <div class="mb-8">
            <h1 class="text-2xl font-bold text-gray-800 mb-2">Selamat Datang, {{ Auth::user()->name }}</h1>
        </div>
        <div class="flex items-center p-6 bg-white rounded-lg shadow-lg space-x-6">
            <!-- Profile Picture Section -->
            <div class="w-1/4 text-zinc-300">
                <svg class=" -left-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
            </div>
            
            <!-- Profile Details Section -->
            <div class="w-3/4">
                <div class="space-y-3">
                    <div>
                        <p class="text-lg text-gray-600"><strong>Nama</strong></p>
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Email</strong></p>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>NIM</strong></p>
                        <p>{{ Auth::user()->nim }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Program Studi</strong></p>
                        <p>{{ Auth::user()->prodi }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Angkatan</strong></p>
                        <p>{{ Auth::user()->angkatan }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Status</strong></p>
                        <p>{{ Auth::user()->status }}</p>
                    </div>
                    <div>
                        <p class="text-lg text-gray-600"><strong>Perkenalkan Bakat Anda</strong></p>
                        @if(Auth::user()->talent)
                            <p>{{ Auth::user()->talent }}</p>
                        @else
                            <form action="#" method="POST" class="space-y-2">
                                @csrf
                                <textarea name="talent" rows="2" class="w-full border rounded p-2" placeholder="Ceritakan bakat atau keahlian Anda secara singkat..."></textarea>
                                <button type="submit" class="bg-navy text-white px-4 py-2 rounded hover:bg-navyLight transition">Simpan</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-reveal grid grid-cols-1 gap-6 mb-8" data-sr-id="9" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            {{-- <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-4 gap-4">
                    <!-- Contoh fitur yang bisa Anda tambahkan di sini: -->
                    <!-- 1. Edit Profil -->
                    <a href="#" class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536M9 13l6-6m2 2l-6 6m-2 2h6"></path>
                        </svg>
                        Edit Profil
                    </a>
                    <!-- 2. Lihat Kuesioner -->
                    <a href="#" class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 6h13M8 12h13M8 18h13M3 6h.01M3 12h.01M3 18h.01"></path>
                        </svg>
                        Isi Kuesioner
                    </a>
                    <!-- 3. Lihat Riwayat -->
                    <a href="#" class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200">
                        <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        Riwayat Pengisian Kuesioner
                    </a>
                    <!-- 4. Logout -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="flex flex-col items-center justify-center p-4 bg-navy text-white rounded-lg hover:bg-navyLight transition-colors duration-200 w-full">
                            <svg class="w-6 h-6 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1"></path>
                            </svg>
                            Logout
                        </button>
                    </form>
                </div>
            </div> --}}
        
              
        
    </main>

@endsection
