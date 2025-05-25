@extends('layouts.dashboard')
@section('title-dash', 'Dashboard Pekerjaan')
@section('content')
    <div class="max-w-3xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="p-6 sm:p-8">
                <h2 class="text-3xl sm:text-4xl font-extrabold text-gray-800 border-b border-gray-200 pb-5 mb-8">
                    Detail Informasi Wirausaha
                </h2>

                @if ($wirausaha && $wirausaha->is_entrepreneur == 1)
                    <div class="space-y-10">

                        {{-- Informasi Dasar Usaha --}}
                        <section class="bg-sky-50 rounded-lg p-5 sm:p-6 border border-sky-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-sky-800 mb-6">Informasi Dasar Usaha</h3>
                            <dl class="space-y-4">
                                @if (!empty($wirausaha->business_name))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-sky-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-sky-600">Nama Usaha</dt>
                                        <dd class="mt-1 text-sm text-sky-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_name }}</dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_type))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-sky-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-sky-600">Jenis Usaha</dt>
                                        <dd class="mt-1 text-sm text-sky-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_type }}</dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_start))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-sky-600">Tanggal Mulai Usaha</dt>
                                        <dd class="mt-1 text-sm text-sky-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ \Carbon\Carbon::parse($wirausaha->business_start)->isoFormat('D MMMM YYYY') }}
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>

                        {{-- Motivasi dan Pendanaan --}}
                        <section class="bg-teal-50 rounded-lg p-5 sm:p-6 border border-teal-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-teal-800 mb-6">Motivasi dan Pendanaan</h3>
                            <dl class="space-y-4">
                                @if (!empty($wirausaha->business_reason))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-teal-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-teal-600">Alasan Memulai Usaha</dt>
                                        <dd class="mt-1 text-sm text-teal-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_reason }}
                                            @if ($wirausaha->business_reason === 'Other' && !empty($wirausaha->business_reason_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_reason_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_funding))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-teal-600">Sumber Dana Usaha</dt>
                                        <dd class="mt-1 text-sm text-teal-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_funding }}
                                            @if ($wirausaha->business_funding === 'Other' && !empty($wirausaha->business_funding_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_funding_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>

                        {{-- Operasional dan Status --}}
                        <section class="bg-indigo-50 rounded-lg p-5 sm:p-6 border border-indigo-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-indigo-800 mb-6">Operasional dan Status</h3>
                            <dl class="space-y-4">
                                @if (!empty($wirausaha->business_progress))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-indigo-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-indigo-600">Perkembangan Usaha Saat Ini</dt>
                                        <dd class="mt-1 text-sm text-indigo-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_progress }}</dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_obstacle))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-indigo-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-indigo-600">Kendala dalam Usaha</dt>
                                        <dd class="mt-1 text-sm text-indigo-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_obstacle }}
                                            @if ($wirausaha->business_obstacle === 'Other' && !empty($wirausaha->business_obstacle_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_obstacle_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                                <div
                                    class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-indigo-100 last:border-b-0">
                                    <dt class="text-sm font-medium text-indigo-600">Memiliki Karyawan</dt>
                                    <dd class="mt-1 text-sm text-indigo-900 sm:col-span-2 sm:mt-0 font-medium">
                                        {{ $wirausaha->has_employee === 'yes' ? 'Ya' : 'Tidak' }}
                                    </dd>
                                </div>
                                @if ($wirausaha->has_employee === 'yes' && isset($wirausaha->employee_count))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-indigo-600">Jumlah Karyawan</dt>
                                        <dd class="mt-1 text-sm text-indigo-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->employee_count }} orang</dd>
                                    </div>
                                @endif
                            </dl>
                        </section>

                        {{-- Pengembangan dan Dukungan --}}
                        <section class="bg-purple-50 rounded-lg p-5 sm:p-6 border border-purple-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-purple-800 mb-6">Pengembangan dan Dukungan
                            </h3>
                            <dl class="space-y-4">
                                @if (isset($wirausaha->entrepreneur_training))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-purple-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-purple-600">Mengikuti Pelatihan Wirausaha</dt>
                                        <dd class="mt-1 text-sm text-purple-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->entrepreneur_training === 'yes' ? 'Ya' : ($wirausaha->entrepreneur_training === 'no' ? 'Tidak' : $wirausaha->entrepreneur_training) }}
                                        </dd>
                                    </div>
                                @endif
                                @if ($wirausaha->entrepreneur_training === 'yes' && !empty($wirausaha->entrepreneur_training_source))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-purple-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-purple-600">Sumber Pelatihan</dt>
                                        <dd class="mt-1 text-sm text-purple-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->entrepreneur_training_source }}</dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_plan))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-purple-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-purple-600">Rencana Pengembangan Usaha</dt>
                                        <dd
                                            class="mt-1 text-sm text-purple-900 sm:col-span-2 sm:mt-0 font-medium whitespace-pre-line">
                                            {{ $wirausaha->business_plan }}
                                            @if ($wirausaha->business_plan === 'Other' && !empty($wirausaha->business_plan_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_plan_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                                @if (isset($wirausaha->business_support))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-purple-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-purple-600">Membutuhkan Dukungan/Bantuan</dt>
                                        <dd class="mt-1 text-sm text-purple-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_support === 'yes' ? 'Ya' : ($wirausaha->business_support === 'no' ? 'Tidak' : $wirausaha->business_support) }}
                                        </dd>
                                    </div>
                                @endif
                                @if ($wirausaha->business_support === 'yes' && !empty($wirausaha->business_support_type))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-purple-600">Jenis Dukungan yang Dibutuhkan</dt>
                                        <dd class="mt-1 text-sm text-purple-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_support_type }}
                                            @if ($wirausaha->business_support_type === 'Other' && !empty($wirausaha->business_support_type_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_support_type_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>

                        {{-- Visi dan Tujuan --}}
                        <section class="bg-amber-50 rounded-lg p-5 sm:p-6 border border-amber-200 shadow-md">
                            <h3 class="text-xl sm:text-2xl font-semibold text-amber-800 mb-6">Visi dan Tujuan</h3>
                            <dl class="space-y-4">
                                @if (isset($wirausaha->business_international))
                                    <div
                                        class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2 border-b border-amber-100 last:border-b-0">
                                        <dt class="text-sm font-medium text-amber-600">Rencana ke Pasar Internasional</dt>
                                        <dd class="mt-1 text-sm text-amber-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_international === 'yes' ? 'Ya' : ($wirausaha->business_international === 'no' ? 'Tidak' : $wirausaha->business_international) }}
                                        </dd>
                                    </div>
                                @endif
                                @if (!empty($wirausaha->business_goal))
                                    <div class="sm:grid sm:grid-cols-3 sm:gap-4 items-start py-2">
                                        <dt class="text-sm font-medium text-amber-600">Tujuan Utama Menjalankan Usaha</dt>
                                        <dd class="mt-1 text-sm text-amber-900 sm:col-span-2 sm:mt-0 font-medium">
                                            {{ $wirausaha->business_goal }}
                                            @if ($wirausaha->business_goal === 'Other' && !empty($wirausaha->business_goal_other))
                                                <span
                                                    class="block text-xs text-gray-600 mt-1">({{ $wirausaha->business_goal_other }})</span>
                                            @endif
                                        </dd>
                                    </div>
                                @endif
                            </dl>
                        </section>

                        {{-- Tips dan Saran --}}
                        @if (!empty($wirausaha->business_tips))
                            <section class="bg-gray-50 rounded-lg p-5 sm:p-6 border border-gray-200 shadow-md">
                                <h3 class="text-xl sm:text-2xl font-semibold text-gray-800 mb-6">Tips atau Saran</h3>
                                <dl class="space-y-4">
                                    <div class="py-2">
                                        <dd
                                            class="mt-1 text-sm text-gray-900 sm:col-span-3 sm:mt-0 font-medium whitespace-pre-line">
                                            {{ $wirausaha->business_tips }}</dd>
                                    </div>
                                </dl>
                            </section>
                        @endif

                    </div>
                @elseif ($wirausaha)
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" aria-hidden="true">
                            <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                        </svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-900">Tidak Berwirausaha</h3>
                        <p class="mt-1 text-sm text-gray-500">Alumni ini tidak mengisi data sebagai wirausahawan.</p>
                    </div>
                @else
                    <div class="text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <h3 class="mt-2 text-lg font-medium text-gray-900">Data Tidak Ditemukan</h3>
                        <p class="mt-1 text-sm text-gray-500">Detail informasi wirausaha untuk alumni ini tidak tersedia.
                        </p>
                    </div>
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
@endsection
