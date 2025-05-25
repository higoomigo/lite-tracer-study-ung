@extends('layouts.dashboard')
@section('title', 'Dashboard Admin')
@section('content')
<!-- Main Content -->
<main class="p-6">
    <!-- Statistik Kinerja Alumni -->
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Statistik Kinerja Alumni</h1>
        <p class="text-gray-600">Gambaran umum keberhasilan program pendidikan kampus berdasarkan data alumni.</p>
    </div>

    <!-- Statistik Pekerjaan Alumni -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Status Pekerjaan Alumni</h2>
            <div class="mb-2">
                <span class="text-gray-600">Alumni bekerja:</span>
                <span class="font-bold text-blue-600">{{ $alumni_employed_percentage ?? '-' }}%</span>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Rata-rata waktu tunggu kerja:</span>
                <span class="font-bold text-blue-600">{{ $alumni_avg_waiting_time ?? '-' }} bulan</span>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Rata-rata gaji alumni:</span>
                <span class="font-bold text-blue-600">Rp{{ number_format($alumni_avg_salary ?? 0, 0, ',', '.') }}</span>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Lokasi pekerjaan:</span>
                <ul class="ml-4 list-disc text-sm">
                    <li>Dalam daerah: {{ $alumni_job_location['dalam_daerah'] ?? 0 }}</li>
                    <li>Luar daerah: {{ $alumni_job_location['luar_daerah'] ?? 0 }}</li>
                    <li>Luar negeri: {{ $alumni_job_location['luar_negeri'] ?? 0 }}</li>
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Status pekerjaan:</span>
                <ul class="ml-4 list-disc text-sm">
                    <li>Full-time: {{ $alumni_job_status['full_time'] ?? 0 }}</li>
                    <li>Part-time: {{ $alumni_job_status['part_time'] ?? 0 }}</li>
                    <li>Freelancer: {{ $alumni_job_status['freelancer'] ?? 0 }}</li>
                </ul>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Jenis Industri & Faktor Pemilihan Kerja</h2>
            <div class="mb-2">
                <span class="text-gray-600">Industri tempat alumni bekerja:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_industries ?? [] as $industry => $count)
                        <li>{{ $industry }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Faktor pemilihan pekerjaan:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_job_factors ?? [] as $factor => $count)
                        <li>{{ $factor }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- Statistik Lanjut Studi Alumni -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Lanjut Studi Alumni</h2>
            <div class="mb-2">
                <span class="text-gray-600">Alumni lanjut studi:</span>
                <span class="font-bold text-purple-600">{{ $alumni_study_percentage ?? '-' }}%</span>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Lokasi studi lanjut:</span>
                <ul class="ml-4 list-disc text-sm">
                    <li>Dalam negeri: {{ $alumni_study_location['dalam_negeri'] ?? 0 }}</li>
                    <li>Luar negeri: {{ $alumni_study_location['luar_negeri'] ?? 0 }}</li>
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Sumber pembiayaan S1:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_study_funding ?? [] as $fund => $count)
                        <li>{{ $fund }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Beasiswa lanjut studi:</span>
                <ul class="ml-4 list-disc text-sm">
                    <li>Dengan beasiswa: {{ $alumni_study_scholarship['dengan'] ?? 0 }}</li>
                    <li>Tanpa beasiswa: {{ $alumni_study_scholarship['tanpa'] ?? 0 }}</li>
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Universitas & Program Studi:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_study_universities ?? [] as $univ)
                        <li>{{ $univ['nama'] }} - {{ $univ['prodi'] }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <!-- Statistik Wirausaha Alumni -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Wirausaha Alumni</h2>
            <div class="mb-2">
                <span class="text-gray-600">Alumni memulai usaha:</span>
                <span class="font-bold text-green-600">{{ $alumni_entrepreneur_percentage ?? '-' }}%</span>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Jenis usaha:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_business_types ?? [] as $type => $count)
                        <li>{{ $type }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Pendanaan usaha:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_business_funding ?? [] as $fund => $count)
                        <li>{{ $fund }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Jumlah karyawan:</span>
                <span class="font-bold text-green-600">{{ $alumni_business_employees ?? '-' }}</span>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Tantangan & Dukungan Usaha</h2>
            <div class="mb-2">
                <span class="text-gray-600">Tantangan usaha:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_business_challenges ?? [] as $challenge => $count)
                        <li>{{ $challenge }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
            <div class="mb-2">
                <span class="text-gray-600">Dukungan yang diterima:</span>
                <ul class="ml-4 list-disc text-sm">
                    @foreach($alumni_business_support ?? [] as $support => $count)
                        <li>{{ $support }}: {{ $count }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</main>
    


@endsection
