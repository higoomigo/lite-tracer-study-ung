@extends('layouts.dashboard')
@section('title-dash', 'Dashboard Pekerjaan')
@section('content')

    <div class="max-w-2xl mx-auto p-6 md:p-8 bg-white rounded-xl shadow-2xl mt-10">
        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6 md:mb-8 border-b border-gray-200 pb-4">
            Detail Informasi Lanjut Studi
        </h2>

        <div class="space-y-6">
            <div
                class="p-4 rounded-lg
            @if ($lanjutStudi->plan_study === 'yes') bg-green-50 border border-green-300
            @else
                bg-red-50 border border-red-300 @endif">
                <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
                    <dt
                        class="text-base font-semibold 
                    @if ($lanjutStudi->plan_study === 'yes') text-green-700 @else text-red-700 @endif">
                        Rencana Lanjut Studi
                    </dt>
                    <dd
                        class="mt-1 sm:mt-0 text-base font-bold
                    @if ($lanjutStudi->plan_study === 'yes') text-green-700 @else text-red-700 @endif">
                        {{ $lanjutStudi->plan_study === 'yes' ? 'Ya, Akan Melanjutkan Studi' : 'Tidak Melanjutkan Studi' }}
                    </dd>
                </div>
            </div>

            @if ($lanjutStudi->plan_study === 'yes')
                <div class="pt-6 border-t border-gray-200 space-y-5">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Detail Rencana:</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                        <div>
                            <dt class="text-sm font-medium text-gray-500">Lokasi Studi</dt>
                            <dd class="mt-1 text-md text-gray-800 font-medium">
                                {{ $lanjutStudi->study_location ?? '-' }}
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Sumber Pembiayaan</dt>
                            <dd class="mt-1 text-md text-gray-800 font-medium">
                                {{ $lanjutStudi->study_financed_by }}
                                @if ($lanjutStudi->study_financed_by === 'Other' && !empty($lanjutStudi->study_financed_by_other))
                                    <span
                                        class="block text-xs text-gray-600">({{ $lanjutStudi->study_financed_by_other }})</span>
                                @endif
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Menerima Beasiswa</dt>
                            <dd
                                class="mt-1 text-md font-medium
                            @if ($lanjutStudi->study_scholarship === 'yes') text-green-600 @else text-red-600 @endif">
                                {{ $lanjutStudi->study_scholarship === 'yes' ? 'Ya' : 'Tidak' }}
                            </dd>
                        </div>

                        @if ($lanjutStudi->study_scholarship === 'yes')
                            <div>
                                <dt class="text-sm font-medium text-gray-500">Jenis Beasiswa</dt>
                                <dd class="mt-1 text-md text-gray-800 font-medium">
                                    {{ $lanjutStudi->scholarship_type }}
                                    @if ($lanjutStudi->scholarship_type === 'Other' && !empty($lanjutStudi->scholarship_type_other))
                                        <span
                                            class="block text-xs text-gray-600">({{ $lanjutStudi->scholarship_type_other }})</span>
                                    @endif
                                </dd>
                            </div>
                        @endif

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Nama Universitas Tujuan</dt>
                            <dd class="mt-1 text-md text-gray-800 font-medium">
                                {{ $lanjutStudi->university_name ?? '-' }}
                            </dd>
                        </div>

                        <div>
                            <dt class="text-sm font-medium text-gray-500">Program Studi Pilihan</dt>
                            <dd class="mt-1 text-md text-gray-800 font-medium">
                                {{ $lanjutStudi->study_program ?? '-' }}
                            </dd>
                        </div>

                        <div class="md:col-span-2"> {{-- Tanggal mulai bisa dibuat full width jika perlu --}}
                            <dt class="text-sm font-medium text-gray-500">Rencana Tanggal Mulai Studi</dt>
                            <dd class="mt-1 text-md text-gray-800 font-medium">
                                {{-- Memastikan study_start_date adalah objek Carbon sebelum format, atau sudah di-cast di model --}}
                                @if ($lanjutStudi->study_start_date)
                                    @if ($lanjutStudi->study_start_date instanceof \Carbon\Carbon)
                                        {{ $lanjutStudi->study_start_date->format('d F Y') }}
                                    @else
                                        {{-- Jika string, coba parse atau tampilkan apa adanya (sesuaikan) --}}
                                        {{ \Carbon\Carbon::parse($lanjutStudi->study_start_date)->format('d F Y') }}
                                    @endif
                                @else
                                    -
                                @endif
                            </dd>
                        </div>
                    </div>
                </div>
            @endif

            <div class="pt-6 border-t border-gray-200 mt-8">
                <a href="{{ url()->previous() }}"
                    class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white text-sm font-medium rounded-md shadow-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd" />
                    </svg>
                    Kembali
                </a>
            </div>
        </div>
    </div>

@endsection
