@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')

@extends('layouts.dashboard')

@section('title-dash', 'Transkrip dan Sertifikat')
@section('content')
<!-- Main Content -->
    <header class="bg-white shadow-sm py-4 px-6">
        <div class="flex items-center justify-between">
            <h1 class="text-lg font-semibold text-navy">Transkrip dan Sertifikat Alumni</h1>
        </div>
    </header>
    <!-- Content Area -->
    <main class="p-6">

        <!-- Transkrip Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Transkrip Akademik</h2>
            <p class="text-gray-600 mb-4">Unduh transkrip akademik Anda yang memuat informasi mengenai nilai dan IPK Anda selama masa studi.</p>

            <div class="flex items-center space-x-4">
                <button 
                    class="px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 transition duration-200"
                    onclick="window.location.href='#'">
                    Unduh Transkrip
                </button>
                <p class="text-sm text-gray-500">Pastikan Anda sudah mengisi form tracer study untuk mendapatkan transkrip.</p>
            </div>
        </div>

        <!-- Sertifikat Section -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">Sertifikat</h2>
            <p class="text-gray-600 mb-4">Unduh sertifikat kelulusan atau sertifikat pelatihan yang Anda miliki. Sertifikat ini dapat digunakan untuk berbagai keperluan, seperti melamar pekerjaan atau melanjutkan studi.</p>

            <div class="space-y-4">
                <div class="flex items-center space-x-4">
                    <button 
                        class="px-6 py-3 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 transition duration-200"
                        onclick="window.location.href='#'">
                        Unduh Sertifikat Lulusan
                    </button>
                    <p class="text-sm text-gray-500">Sertifikat kelulusan dari program studi Anda.</p>
                </div>

                <div class="flex items-center space-x-4">
                    <button 
                        class="px-6 py-3 bg-yellow-600 text-white rounded-lg shadow-md hover:bg-yellow-700 transition duration-200"
                        onclick="window.location.href='#'">
                        Unduh Sertifikat Pelatihan
                    </button>
                    <p class="text-sm text-gray-500">Jika Anda mengikuti pelatihan atau workshop, Anda dapat mengunduh sertifikat tersebut di sini.</p>
                </div>
            </div>
        </div>
    </main>

@endsection




@endsection