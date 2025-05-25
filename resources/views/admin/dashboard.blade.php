@extends('layouts.dashboard')
@section('title', 'Dashboard Admin')
@section('content')


<!-- Main Content -->
<main class="p-6">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Welcome back, Admin!</h1>
        <p class="text-gray-600">Pantau tracking lulusan Teknik Informatika UNG.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
        <div class="stat-card scroll-reveal bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500" data-sr-id="1" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: transform 0.3s, box-shadow 0.3s, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Total Alumni</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $users->count() }}</p>
                    
                </div>
            </div>
        </div>
        
        <div class="stat-card scroll-reveal bg-white rounded-lg shadow-md p-6 border-l-4 border-purple-500" data-sr-id="3" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: transform 0.3s, box-shadow 0.3s, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-purple-100 text-purple-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Form Pekerjaan Terisi</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $pekerjaanCount }}</p>
                    
                </div>
            </div>
        </div>
        
        <div class="stat-card scroll-reveal bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500" data-sr-id="4" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: transform 0.3s, box-shadow 0.3s, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Form Wirausaha Terisi</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $wirausahaCount }}</p>
                    
                </div>
            </div>
        </div>
        
        <div class="stat-card scroll-reveal bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500" data-sr-id="5" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: transform 0.3s, box-shadow 0.3s, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-500">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h2 class="text-gray-600 text-sm">Form Lanjut Studi Terisi</h2>
                    <p class="text-2xl font-semibold text-gray-800">{{ $lanjutStudiCount }}</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni Statistik Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Pekerjaan -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Status Pekerjaan Alumni</h2>
        <canvas id="pekerjaanStatusChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Kelompok Gaji</h2>
        <canvas id="kelompokGajiChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Lokasi Pekerjaan Alumni</h2>
        <canvas id="lokasiPekerjaanChart" height="220"></canvas>
    </div>
    
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8 ">
    <!-- Studi Lanjut -->
    
    <div class="bg-white rounded-lg shadow-md p-6 h-96 w-96">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Biaya Studi S1</h2>
        <canvas id="biayaStudiChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 h-96 w-96">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Studi Lanjut (Dalam vs Luar Negeri)</h2>
        <canvas id="studiLanjutLokasiChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 h-96 w-96">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Studi Lanjut dengan Beasiswa</h2>
        <canvas id="studiLanjutBeasiswaChart" height="220"></canvas>
    </div>
    
    <!-- Wirausaha -->
    
</div>
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-2">
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Tantangan Usaha Alumni</h2>
        <canvas id="tantanganUsahaChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Jenis Usaha Alumni</h2>
        <canvas id="jenisUsahaChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Pendanaan Usaha Alumni</h2>
        <canvas id="pendanaanUsahaChart" height="220"></canvas>
    </div>
</div>


    
</main>


<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // --- DATA FROM CONTROLLER ---
        const pekerjaanStatus = @json($pekerjaanStatus ?? []);
        const jenisPekerjaan = @json($jenisPekerjaan ?? []);
        const lokasiPekerjaan = @json($lokasiPekerjaan ?? []);
        const kelompokGaji = @json($kelompokGaji ?? []);
        const alasanTidakBekerja = @json($alasanTidakBekerja ?? []);
        const sedangMencariKerja = @json($sedangMencariKerja ?? []);
        const pertimbanganWirausaha = @json($pertimbanganWirausaha ?? []);
        const memilikiUsaha = @json($memilikiUsaha ?? []);
        const minatStudi = @json($minatStudi ?? []);
        const rencanaStudi = @json($rencanaStudi ?? []);
        const lanjutStudi = @json($lanjutStudi ?? []);
        const wirausaha = @json($wirausaha ?? []);
        const biayaStudi = @json($biayaStudi ?? []);

        // --- CHARTS ---

        // 1. Status Pekerjaan Alumni (Pie)
        
        // Tidak perlu membuat chart kelompokGaji di sini, karena chart yang sesuai dengan controller adalah:
        // Status Pekerjaan Alumni: Bekerja, Tidak Bekerja (lihat data yang dikirim controller)
        // Jika ingin menampilkan chart "Pernah Bekerja" dan "Tidak Pernah Bekerja", buat chart baru.
        // Berikut contoh pie chart "Pernah Bekerja" vs "Tidak Pernah Bekerja":

        // const pernahBekerjaCtx = document.createElement('canvas');
        // pernahBekerjaCtx.id = 'pernahBekerjaChart';
        // document.getElementById('pekerjaanStatusChart').parentNode.appendChild(pernahBekerjaCtx);

        // new Chart(pernahBekerjaCtx.getContext('2d'), {
        //     type: 'pie',
        //     data: {
        //     labels: ['Pernah Bekerja', 'Tidak Pernah Bekerja'],
        //     datasets: [{
        //         data: [
        //         pekerjaanStatus['ever_employed'] ?? 0,
        //         pekerjaanStatus['never_employed'] ?? 0
        //         ],
        //         backgroundColor: ['#22c55e', '#f59e42'],
        //         borderColor: ['#15803d', '#d97706'],
        //         borderWidth: 1
        //     }]
        //     },
        //     options: {
        //     responsive: true,
        //     plugins: { legend: { position: 'bottom' } }
        //     }
        // });

        // Chart: Kelompok Gaji Alumni (Bar)
        

        const pekerjaanStatusCtx = document.getElementById('pekerjaanStatusChart').getContext('2d');
        new Chart(pekerjaanStatusCtx, {
            type: 'pie',
            data: {
                labels: ['Bekerja', 'Tidak Bekerja'],
                datasets: [{
                    data: [
                        pekerjaanStatus['employed'] ?? 0,
                        pekerjaanStatus['unemployed'] ?? 0,
                        
                    ],
                    backgroundColor: ['#001F3F', '#003366', '#00509E', '#7FB3D5'],
                    borderColor: ['#FFFFFF','#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        const kelompokGajiCtx = document.getElementById('kelompokGajiChart').getContext('2d');
        new Chart(kelompokGajiCtx, {
            type: 'bar',
            data: {
                labels: ['0-3jt', '3-5jt', '5-10jt', '10jt+'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        kelompokGaji['0-3jt'] ?? 0,
                        kelompokGaji['3-5jt'] ?? 0,
                        kelompokGaji['5-10jt'] ?? 0,
                        kelompokGaji['10jt+'] ?? 0
                    ],
                   backgroundColor: ['#001F3F', '#003366', '#00509E', '#7FB3D5'],
                    borderColor: ['#FFFFFF','#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // 2. Lokasi Pekerjaan Alumni (Bar)
        const lokasiPekerjaanCtx = document.getElementById('lokasiPekerjaanChart').getContext('2d');
        new Chart(lokasiPekerjaanCtx, {
            type: 'bar',
            data: {
                labels: ['Dalam Daerah', 'Luar Daerah', 'Luar Negeri'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        lokasiPekerjaan['dalam_daerah'] ?? 0,
                        lokasiPekerjaan['luar_daerah'] ?? 0,
                        lokasiPekerjaan['luar_negeri'] ?? 0
                    ],
                    backgroundColor: ['#001F3F', '#003366', '#00509E'],
                    borderColor: ['#FFFFFF','#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // 3. Studi Lanjut (Dalam vs Luar Negeri) (Bar)
        const studiLanjutLokasiCtx = document.getElementById('studiLanjutLokasiChart').getContext('2d');
        new Chart(studiLanjutLokasiCtx, {
            type: 'bar',
            data: {
                labels: ['Dalam Negeri', 'Luar Negeri'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        lanjutStudi['domestic'] ?? 0,
                        lanjutStudi['international'] ?? 0
                    ],
                    backgroundColor: [ '#00509E', '#7FB3D5'],
                    borderColor: ['#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // 4. Studi Lanjut dengan Beasiswa (Pie)
        const studiLanjutBeasiswaCtx = document.getElementById('studiLanjutBeasiswaChart').getContext('2d');
        new Chart(studiLanjutBeasiswaCtx, {
            type: 'pie',
            data: {
                labels: ['Beasiswa', 'Tanpa Beasiswa'],
                datasets: [{
                    data: [
                        lanjutStudi['beasiswa'] ?? 0,
                        lanjutStudi['tanpa_beasiswa'] ?? 0
                    ],
                    backgroundColor: ['#00509E', '#7FB3D5'],
                    borderColor: ['#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        // 5. Jenis Pekerjaan Alumni (Bar)
        const jenisPekerjaanCtx = document.getElementById('jenisUsahaChart').getContext('2d');
        new Chart(jenisPekerjaanCtx, {
            type: 'bar',
            data: {
                labels: ['Full-time', 'Part-time', 'Freelancer'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        jenisPekerjaan['full_time'] ?? 0,
                        jenisPekerjaan['part_time'] ?? 0,
                        jenisPekerjaan['freelancer'] ?? 0
                    ],
                    backgroundColor: [ '#00509E', '#7FB3D5', '#0E2148'],
                    borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
        
        const biayaStudiCtx = document.getElementById('biayaStudiChart').getContext('2d');
        new Chart(biayaStudiCtx, {
            type: 'bar',
            data: {
                labels: ['Orang Tua','Beasiswa',  'Sendiri', 'Lainnya'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        biayaStudi['parents'] ?? 0,
                        biayaStudi['scholasrship'] ?? 0,
                        biayaStudi['self'] ?? 0,
                        biayaStudi['other'] ?? 0,
                    ],
                    backgroundColor: [ '#00509E', '#7FB3D5', '#0E2148'],
                    borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });

        // 6. Pendanaan Usaha Alumni (Pie)
        const pendanaanUsahaCtx = document.getElementById('pendanaanUsahaChart').getContext('2d');
        new Chart(pendanaanUsahaCtx, {
            type: 'pie',
            data: {
                labels: ['Modal Pribadi', 'Pinjaman', 'Investor'],
                datasets: [{
                    data: [
                        wirausaha['modal_pribadi'] ?? 0,
                        wirausaha['pinjaman'] ?? 0,
                        wirausaha['investor'] ?? 0
                    ],
                    backgroundColor: ['#00509E', '#7FB3D5', '#0E2148'],
                    borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { position: 'bottom' } }
            }
        });

        // 7. Tantangan Usaha Alumni (Bar) - gunakan alasanTidakBekerja
        const tantanganUsahaCtx = document.getElementById('tantanganUsahaChart').getContext('2d');
        new Chart(tantanganUsahaCtx, {
            type: 'bar',
            data: {
                labels: ['Tidak Ada Kesempatan', 'Studi', 'Keluarga', 'Kesehatan', 'Lainnya'],
                datasets: [{
                    label: 'Jumlah Alumni',
                    data: [
                        alasanTidakBekerja['no_opportunity'] ?? 0,
                        alasanTidakBekerja['study'] ?? 0,
                        alasanTidakBekerja['family'] ?? 0,
                        alasanTidakBekerja['health'] ?? 0,
                        alasanTidakBekerja['other'] ?? 0
                    ],
                    backgroundColor: ['#001F3F', '#003366', '#00509E', '#7FB3D5', '#B3C6E0'],
                    borderColor: ['#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF', '#FFFFFF'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: { legend: { display: false } },
                scales: { y: { beginAtZero: true } }
            }
        });
    });
    </script>
{{-- <script>
document.addEventListener('DOMContentLoaded', function() {
    // --- PEKERJAAN ---

    // Pie Chart: Status Pekerjaan Alumni
    const pekerjaanStatusCtx = document.getElementById('pekerjaanStatusChart').getContext('2d');
    new Chart(pekerjaanStatusCtx, {
        type: 'pie',
        data: {
            labels: ['Full-time', 'Part-time', 'Freelancer'],
            datasets: [{
                data: [65, 20, 15], // Contoh data persentase
                backgroundColor: [
                    '#2563eb', // navy (Full-time)
                    '#22c55e', // green (Part-time)
                    '#f59e42'  // yellow/orange (Freelancer)
                ],
                borderColor: [
                    '#1e40af',
                    '#15803d',
                    '#d97706'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // Bar Chart: Lokasi Pekerjaan Alumni
    const lokasiPekerjaanCtx = document.getElementById('lokasiPekerjaanChart').getContext('2d');
    new Chart(lokasiPekerjaanCtx, {
        type: 'bar',
        data: {
            labels: ['Dalam Daerah', 'Luar Daerah', 'Luar Negeri'],
            datasets: [{
                label: 'Jumlah Alumni',
                data: [120, 60, 20],
                backgroundColor: [
                    '#2563eb', // navy
                    '#f59e42', // yellow/orange
                    '#22c55e'  // green
                ],
                borderColor: [
                    '#1e40af',
                    '#d97706',
                    '#15803d'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // --- STUDI LANJUT ---

    // Bar Chart: Studi Lanjut Dalam Negeri vs Luar Negeri
    const studiLanjutLokasiCtx = document.getElementById('studiLanjutLokasiChart').getContext('2d');
    new Chart(studiLanjutLokasiCtx, {
        type: 'bar',
        data: {
            labels: ['Dalam Negeri', 'Luar Negeri'],
            datasets: [{
                label: 'Jumlah Alumni',
                data: [80, 20],
                backgroundColor: [
                    '#2563eb', // navy
                    '#a78bfa'  // purple
                ],
                borderColor: [
                    '#1e40af',
                    '#7c3aed'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie Chart: Studi Lanjut dengan Beasiswa vs Tanpa Beasiswa
    const studiLanjutBeasiswaCtx = document.getElementById('studiLanjutBeasiswaChart').getContext('2d');
    new Chart(studiLanjutBeasiswaCtx, {
        type: 'pie',
        data: {
            labels: ['Beasiswa', 'Tanpa Beasiswa'],
            datasets: [{
                data: [55, 45],
                backgroundColor: [
                    '#22c55e', // green
                    '#2563eb'  // navy
                ],
                borderColor: [
                    '#15803d',
                    '#1e40af'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // --- WIRAUSAHA ---

    // Bar Chart: Jenis Usaha Alumni
    const jenisUsahaCtx = document.getElementById('jenisUsahaChart').getContext('2d');
    new Chart(jenisUsahaCtx, {
        type: 'bar',
        data: {
            labels: ['Restoran', 'Teknologi', 'Pendidikan', 'Fashion', 'Lainnya'],
            datasets: [{
                label: 'Jumlah Alumni',
                data: [15, 25, 10, 8, 12],
                backgroundColor: [
                    '#f59e42', // orange
                    '#2563eb', // navy
                    '#fde047', // yellow
                    '#a78bfa', // purple
                    '#64748b'  // slate/gray
                ],
                borderColor: [
                    '#d97706',
                    '#1e40af',
                    '#eab308',
                    '#7c3aed',
                    '#334155'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });

    // Pie Chart: Sumber Pendanaan Usaha Alumni
    const pendanaanUsahaCtx = document.getElementById('pendanaanUsahaChart').getContext('2d');
    new Chart(pendanaanUsahaCtx, {
        type: 'pie',
        data: {
            labels: ['Modal Pribadi', 'Pinjaman', 'Investor'],
            datasets: [{
                data: [60, 25, 15],
                backgroundColor: [
                    '#22c55e', // green
                    '#fde047', // yellow
                    '#2563eb'  // navy
                ],
                borderColor: [
                    '#15803d',
                    '#eab308',
                    '#1e40af'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { position: 'bottom' }
            }
        }
    });

    // Bar Chart: Tantangan Usaha Alumni
    const tantanganUsahaCtx = document.getElementById('tantanganUsahaChart').getContext('2d');
    new Chart(tantanganUsahaCtx, {
        type: 'bar',
        data: {
            labels: ['Modal', 'Pemasaran', 'Tenaga Kerja', 'Regulasi', 'Lainnya'],
            datasets: [{
                label: 'Jumlah Alumni',
                data: [30, 22, 15, 10, 8],
                backgroundColor: [
                    '#f59e42', // orange
                    '#2563eb', // navy
                    '#22c55e', // green
                    '#a78bfa', // purple
                    '#64748b'  // slate/gray
                ],
                borderColor: [
                    '#d97706',
                    '#1e40af',
                    '#15803d',
                    '#7c3aed',
                    '#334155'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
});
</script> --}}



@endsection
