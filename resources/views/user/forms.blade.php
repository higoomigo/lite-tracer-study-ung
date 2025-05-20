@extends('layouts.dashboard')
@section('title-dash', 'Dashboard User')
@section('content')

<main class="p-6">
    <!-- Welcome Section -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Formulir</h1>
        <p>Pilih formulir yang akan anda isi sesuai jalur anda</p>
    </div>

    @if ($hasFilledForm)
        <div class="flex items-center p-4 mb-4 bg-green-100 rounded-lg">
            <svg class="w-6 h-6 text-green-600 mr-2 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-green-800 font-semibold">Transkrip Anda Bisa Diambil Di Admin, Terimakasih Atas Partisipasinya</span>
        </div>
    @endif

    <!-- Formulir Pekerjaan -->
    <div class="flex items-center p-6 bg-white rounded-lg shadow-md space-x-6 mb-4">
        <div class="flex-shrink-0">
        <svg class="w-10 h-10 text-blue-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" fill="none"/>
            <path d="M8 8h8M8 12h8M8 16h4" stroke="currentColor"/>
        </svg>
        </div>
        <div class="flex-1">
        <h2 class="text-lg font-semibold text-gray-800">Pendataan Pekerjaan Alumni</h2>
        </div>
        @if($hasFilledFormPekerjaan)
            <div class="flex items-center space-x-2">
            <svg class="w-5 h-5 text-blue-600" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/>
            </svg>
            <span class="text-sm text-blue-700 font-semibold">Sudah diisi</span>
            </div>
        @else
            <a href="{{ route('pekerjaan.create') }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">Isi Formulir</a>
        @endif
    </div>
    <!-- Lanjut Studi -->
    <div class="flex items-center p-6 bg-white rounded-lg shadow-md space-x-6 mb-4">
        <div class="flex-shrink-0">
        <svg class="w-10 h-10 text-green-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" fill="none"/>
            <path d="M8 8h8M8 12h4" stroke="currentColor"/>
        </svg>
        </div>
        <div class="flex-1">
        <h2 class="text-lg font-semibold text-gray-800">Pendataan Lanjut Studi Alumni</h2>
        </div>
        <a href="{{ route('lanjut_studi.create') }}" class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-600 transition">Isi Formulir</a>
    </div>
    <!-- Wirausaha -->
    <div class="flex items-center p-6 bg-white rounded-lg shadow-md space-x-6 mb-4">
        <div class="flex-shrink-0">
        <svg class="w-10 h-10 text-yellow-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <rect x="4" y="4" width="16" height="16" rx="2" stroke="currentColor" fill="none"/>
            <path d="M8 8h8M8 12h6" stroke="currentColor"/>
        </svg>
        </div>
        <div class="flex-1">
        <h2 class="text-lg font-semibold text-gray-800">Pendataan Wirausaha Alumni</h2>
        </div>
        <a href="{{ route('wirausaha.create') }}" class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 transition">Isi Formulir</a>
    </div>

    
</main>

@endsection