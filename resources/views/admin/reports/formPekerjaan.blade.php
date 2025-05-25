@extends('layouts.dashboard')
@section('title-dash', 'Dashboard Pekerjaan')
@section('content')

    <div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="p-6 sm:p-8">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 border-b border-gray-200 pb-5 mb-8">
                    Detail Informasi Pekerjaan
                </h2>

                <div class="space-y-10">

                    {{-- Informasi Umum --}}
                    <section class="bg-blue-50 rounded-lg p-5 sm:p-6 border border-blue-200 shadow-md">
                        <h3 class="text-xl sm:text-2xl font-semibold text-blue-800 mb-6">Informasi Umum</h3>
                        <dl class="space-y-4">
                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-blue-100 last:border-b-0">
                                <dt class="text-sm font-medium text-blue-600">Status Bekerja</dt>
                                <dd class="mt-1 text-sm text-blue-900 sm:col-span-2 sm:mt-0 font-medium">
                                    {{ $pekerjaan->employed === 'yes' ? 'Sedang bekerja' : 'Tidak bekerja' }}
                                </dd>
                            </div>

                            <div
                                class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-blue-100 last:border-b-0">
                                <dt class="text-sm font-medium text-blue-600">Pernah Bekerja</dt>
                                <dd class="mt-1 text-sm text-blue-900 sm:col-span-2 sm:mt-0 font-medium">
                                    {{ $pekerjaan->ever_employed === 'yes' ? 'Pernah bekerja' : 'Belum pernah bekerja' }}
                                </dd>
                            </div>

                            @if (isset($pekerjaan->has_business))
                                {{-- Pastikan properti ada sebelum dicek --}}
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-blue-100 last:border-b-0">
                                    <dt class="text-sm font-medium text-blue-600">Memiliki Usaha</dt>
                                    <dd class="mt-1 text-sm text-blue-900 sm:col-span-2 sm:mt-0 font-medium">
                                        {{ $pekerjaan->has_business === 'yes' ? 'Ya' : 'Tidak' }}
                                    </dd>
                                </div>
                            @endif

                            @if (isset($pekerjaan->interest_return_school))
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-blue-100 last:border-b-0">
                                    <dt class="text-sm font-medium text-blue-600">Minat Kembali Sekolah</dt>
                                    <dd class="mt-1 text-sm text-blue-900 sm:col-span-2 sm:mt-0 font-medium">
                                        @switch($pekerjaan->interest_return_school)
                                            @case('yes')
                                                Ya
                                            @break

                                            @case('no')
                                                Tidak
                                            @break

                                            @default
                                                Sedang dipertimbangkan
                                            @break
                                        @endswitch
                                    </dd>
                                </div>
                            @endif

                            @if (isset($pekerjaan->plan_study))
                                <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                    <dt class="text-sm font-medium text-blue-600">Rencana Lanjut Studi</dt>
                                    <dd class="mt-1 text-sm text-blue-900 sm:col-span-2 sm:mt-0 font-medium">
                                        @switch($pekerjaan->plan_study)
                                            @case('yes')
                                                Ya
                                            @break

                                            @case('no')
                                                Tidak
                                            @break

                                            @default
                                                Mungkin
                                            @break
                                        @endswitch
                                    </dd>
                                </div>
                            @endif
                        </dl>
                    </section>

                    {{-- Pekerjaan Saat Ini --}}
                    @if ($pekerjaan->employed === 'yes')
                        <section class="bg-green-50 rounded-lg p-5 sm:p-6 border border-green-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-green-800 mb-6">Pekerjaan Saat Ini</h3>
                            <dl class="space-y-4">
                                @if (!empty($pekerjaan->industry))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-green-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-green-600">Industri</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->industry }}</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->job_status))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-green-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-green-600">Status Pekerjaan</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            @switch($pekerjaan->job_status)
                                                @case('full_time')
                                                    Penuh waktu
                                                @break

                                                @case('part_time')
                                                    Paruh waktu
                                                @break

                                                @case('freelancer')
                                                    Freelancer
                                                @break

                                                @default
                                                    {{ ucfirst(str_replace('_', ' ', $pekerjaan->job_status)) }}
                                                @break
                                            @endswitch
                                        </dd>
                                    </div>
                                @endif
                                @if (isset($pekerjaan->monthly_salary) && is_numeric($pekerjaan->monthly_salary))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-green-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-green-600">Gaji Bulanan</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            Rp{{ number_format($pekerjaan->monthly_salary, 0, ',', '.') }}</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->job_location))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-green-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-green-600">Lokasi Kerja</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->job_location }}</dd>
                                    </div>
                                @endif
                                @if (isset($pekerjaan->waiting_time))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-green-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-green-600">Waktu Tunggu Setelah Lulus</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->waiting_time }} bulan</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->job_choice_factor))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-green-600">Faktor Memilih Pekerjaan</dt>
                                        <dd class="mt-1 text-sm text-green-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->job_choice_factor }}</dd>
                                    </div>
                                @endif
                            </dl>
                        </section>
                    @endif

                    {{-- Pekerjaan Sebelumnya --}}
                    @if ($pekerjaan->ever_employed === 'yes' && $pekerjaan->employed !== 'yes') {{-- Tampilkan jika pernah kerja TAPI tidak sedang kerja --}}
                        <section class="bg-yellow-50 rounded-lg p-5 sm:p-6 border border-yellow-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-yellow-800 mb-6">Pekerjaan Sebelumnya</h3>
                            <dl class="space-y-4">
                                @if (!empty($pekerjaan->last_job_title))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-yellow-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-yellow-600">Jabatan Terakhir</dt>
                                        <dd class="mt-1 text-sm text-yellow-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->last_job_title }}</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->last_company))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-yellow-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-yellow-600">Perusahaan Terakhir</dt>
                                        <dd class="mt-1 text-sm text-yellow-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->last_company }}</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->reason_left))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-yellow-600">Alasan Berhenti</dt>
                                        <dd class="mt-1 text-sm text-yellow-900 sm:col-span-2 sm:mt-0 font-medium">
                                            @switch($pekerjaan->reason_left)
                                                @case('personal')
                                                    Alasan pribadi
                                                @break

                                                @case('layoff')
                                                    PHK
                                                @break

                                                @case('career_change')
                                                    Ganti karier
                                                @break

                                                @case('study')
                                                    Melanjutkan studi
                                                @break

                                                @default
                                                    Lainnya
                                                @break
                                            @endswitch
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>
                    @endif

                    {{-- Kondisi Tidak Bekerja --}}
                    @if ($pekerjaan->employed === 'no')
                        <section class="bg-red-50 rounded-lg p-5 sm:p-6 border border-red-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-red-800 mb-6">Kondisi Saat Ini (Tidak Bekerja)
                            </h3>
                            <dl class="space-y-4">
                                @if (!empty($pekerjaan->current_activity))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-red-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-red-600">Kegiatan Saat Ini</dt>
                                        <dd class="mt-1 text-sm text-red-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->current_activity }}</dd>
                                    </div>
                                @endif
                                @if (!empty($pekerjaan->reason_not_working))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-red-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-red-600">Alasan Tidak Bekerja</dt>
                                        <dd class="mt-1 text-sm text-red-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->reason_not_working }}</dd>
                                    </div>
                                @endif
                                @if (isset($pekerjaan->actively_looking))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-red-600">Sedang Mencari Kerja</dt>
                                        <dd class="mt-1 text-sm text-red-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $pekerjaan->actively_looking === 'yes' ? 'Ya' : 'Tidak' }}
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>
                    @endif

                    {{-- Tombol Kembali --}}
                    <div class="pt-8 mt-8 border-t border-gray-200 text-center">
                        <a href="{{ url()->previous() }}"
                            class="inline-flex items-center px-6 py-3 bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:ring-gray-300 text-white text-sm font-semibold rounded-lg shadow-md transition duration-150 ease-in-out">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                    clip-rule="evenodd" />
                            </svg>
                            Kembali
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
