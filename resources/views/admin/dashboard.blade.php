@extends('layouts.dashboard')
@section('title', 'Dashboard Admin')
@section('content')


<!-- Main Content -->
<main class="p-6">
    <div class="mb-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-2">Welcome back, Admin!</h1>
        <p class="text-gray-600">Here's what's happening with your school today.</p>
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
                    <h2 class="text-gray-600 text-sm">Total Students</h2>
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
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
    <!-- Studi Lanjut -->
    <div class="bg-white rounded-lg shadow-md p-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Studi Lanjut (Dalam vs Luar Negeri)</h2>
        <canvas id="studiLanjutLokasiChart" height="220"></canvas>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6">
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


    <!-- Statistik Kinerja Alumni -->
    

    <!-- Charts Section -->
    {{-- <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
        <!-- Bar Chart -->
        <div class="scroll-reveal bg-white rounded-lg shadow-md p-6" data-sr-id="6" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Students per Department</h2>
            <div class="h-80">
                <canvas id="barChart" style="display: block; box-sizing: border-box; height: 320px; width: 556px;" width="695" height="400"></canvas>
            </div>
        </div>
        
        <!-- Line Chart -->
        <div class="scroll-reveal bg-white rounded-lg shadow-md p-6" data-sr-id="7" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Monthly Enrollment Trend</h2>
            <div class="h-80">
                <canvas id="lineChart" style="display: block; box-sizing: border-box; height: 320px; width: 556px;" width="695" height="400"></canvas>
            </div>
        </div>
    </div> --}}

    <!-- Recent Activity Section -->
    {{-- <div class="scroll-reveal bg-white rounded-lg shadow-md p-6 mb-8" data-sr-id="8" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-semibold text-gray-800">Recent Activities</h2>
            <a href="#" class="text-sm text-navy hover:underline">View All</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Activity</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">New student registration</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Admin</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">5 minutes ago</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Course update</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Professor Smith</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">2 hours ago</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Completed</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Grade submission</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">Professor Johnson</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">1 day ago</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">System maintenance</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">System</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">2 days ago</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">Scheduled</span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}

    <!-- Quick Actions Section -->
    {{-- <div class="scroll-reveal grid grid-cols-1 md:grid-cols-2 gap-6 mb-8" data-sr-id="9" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: all, opacity 1s ease-in-out 0.2s, transform 1s ease-in-out 0.2s;">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h2>
            <div class="grid grid-cols-2 gap-4">
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
        
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-lg font-semibold text-gray-800 mb-4">Notifications</h2>
            <div class="space-y-4">
                <div class="flex items-start p-3 bg-blue-50 rounded-lg">
                    <div class="flex-shrink-0 w-8 h-8 bg-blue-200 rounded-full flex items-center justify-center text-blue-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-gray-800">Staff meeting scheduled for tomorrow at 10:00 AM</p>
                        <p class="text-xs text-gray-500 mt-1">1 hour ago</p>
                    </div>
                </div>
                <div class="flex items-start p-3 bg-green-50 rounded-lg">
                    <div class="flex-shrink-0 w-8 h-8 bg-green-200 rounded-full flex items-center justify-center text-green-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-gray-800">End of semester reports are ready for review</p>
                        <p class="text-xs text-gray-500 mt-1">3 hours ago</p>
                    </div>
                </div>
                <div class="flex items-start p-3 bg-yellow-50 rounded-lg">
                    <div class="flex-shrink-0 w-8 h-8 bg-yellow-200 rounded-full flex items-center justify-center text-yellow-600">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm text-gray-800">System maintenance scheduled for this weekend</p>
                        <p class="text-xs text-gray-500 mt-1">1 day ago</p>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</main>
    
{{-- public function index()
    {

        // Example query to get data for each chart
        // Status pekerjaan alumni
        $pekerjaanStatus = [
            'employed' => Pekerjaan::where('employed', 'yes')->count(),
            'unemployed' => Pekerjaan::where('employed', 'no')->count(),
            'ever_employed' => Pekerjaan::where('ever_employed', 'yes')->count(),
            'never_employed' => Pekerjaan::where('ever_employed', 'no')->count(),
        ];

        // Jenis pekerjaan alumni yang bekerja
        $jenisPekerjaan = [
            'full_time' => Pekerjaan::where('job_status', 'full_time')->count(),
            'part_time' => Pekerjaan::where('job_status', 'part_time')->count(),
            'freelancer' => Pekerjaan::where('job_status', 'freelancer')->count(),
        ];

        // Lokasi pekerjaan alumni yang bekerja
        $lokasiPekerjaan = [
            'dalam_daerah' => Pekerjaan::where('job_location', 'dalam_daerah')->count(),
            'luar_daerah' => Pekerjaan::where('job_location', 'luar_daerah')->count(),
            'luar_negeri' => Pekerjaan::where('job_location', 'luar_negeri')->count(),
        ];

        $kelompokGaji = [
            '0-3jt' => Pekerjaan::where('monthly_salary', '<=', 3000000)->count(),
            '3-5jt' => Pekerjaan::where('monthly_salary', '>', 3000000)->where('monthly_salary', '<=', 5000000)->count(),
            '5-10jt' => Pekerjaan::where('monthly_salary', '>', 5000000)->where('monthly_salary', '<=', 10000000)->count(),
            '10jt+' => Pekerjaan::where('monthly_salary', '>', 10000000)->count(),
        ];

        // Alasan alumni tidak pernah bekerja
        $alasanTidakBekerja = [
            'no_opportunity' => Pekerjaan::where('never_employed_reason', 'no_opportunity')->count(),
            'study' => Pekerjaan::where('never_employed_reason', 'study')->count(),
            'family' => Pekerjaan::where('never_employed_reason', 'family')->count(),
            'health' => Pekerjaan::where('never_employed_reason', 'health')->count(),
            'other' => Pekerjaan::where('never_employed_reason', 'other')->count(),
        ];

        // Alumni yang sedang mencari kerja
        $sedangMencariKerja = [
            'yes' => Pekerjaan::where('never_employed_looking', 'yes')->count(),
            'no' => Pekerjaan::where('never_employed_looking', 'no')->count(),
        ];

        // Alumni yang mempertimbangkan berwirausaha
        $pertimbanganWirausaha = [
            'yes' => Pekerjaan::where('never_employed_business', 'yes')->count(),
            'no' => Pekerjaan::where('never_employed_business', 'no')->count(),
            'not_sure' => Pekerjaan::where('never_employed_business', 'not_sure')->count(),
        ];

        // Alumni yang memiliki usaha
        $memilikiUsaha = [
            'yes' => Pekerjaan::where('has_business', 'yes')->count(),
            'no' => Pekerjaan::where('has_business', 'no')->count(),
        ];

        // Alumni yang berminat melanjutkan studi
        $minatStudi = [
            'yes' => Pekerjaan::where('interest_return_school', 'yes')->count(),
            'no' => Pekerjaan::where('interest_return_school', 'no')->count(),
            'considering' => Pekerjaan::where('interest_return_school', 'considering')->count(),
        ];

        // Alumni yang berencana melanjutkan studi
        $rencanaStudi = [
            'yes' => Pekerjaan::where('plan_study', 'yes')->count(),
            'no' => Pekerjaan::where('plan_study', 'no')->count(),
            'maybe' => Pekerjaan::where('plan_study', 'maybe')->count(),
        ];

        $lanjutStudi = [
            'domestic' => lanjutStudi::where('study_location', 'domestic')->count(),
            'international' => lanjutStudi::where('study_location', 'international')->count(),
            'beasiswa' => lanjutStudi::where('study_scholarship', 'yes')->count(),
            'tanpa_beasiswa' => lanjutStudi::where('study_scholarship', 'no')->count(),
        ];

        $wirausaha = [
            'modal_pribadi' => Wirausaha::where('business_funding', 'modal_pribadi')->count(),
            'pinjaman' => Wirausaha::where('business_funding', 'pinjaman')->count(),
            'investor' => Wirausaha::where('business_funding', 'investor')->count(),
        ];

        // Pass the data to the view
        return view('admin.dashboard', compact(
            'pekerjaanStatus',
            'jenisPekerjaan',
            'kelompokGaji',
            'lokasiPekerjaan',
            'alasanTidakBekerja',
            'sedangMencariKerja',
            'pertimbanganWirausaha',
            'memilikiUsaha',
            'minatStudi',
            'rencanaStudi',
            'lanjutStudi',
            'wirausaha'
        ));

    } --}}



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
                    backgroundColor: ['#2563eb', '#f59e42', '#22c55e', '#a78bfa'],
                    borderColor: ['#1e40af', '#d97706', '#15803d', '#7c3aed'],
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
                    backgroundColor: ['#2563eb', '#f59e42', '#22c55e', '#a78bfa'],
                    borderColor: ['#1e40af', '#d97706', '#15803d', '#7c3aed'],
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
                    backgroundColor: ['#2563eb', '#f59e42', '#22c55e'],
                    borderColor: ['#1e40af', '#d97706', '#15803d'],
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
                    backgroundColor: ['#2563eb', '#a78bfa'],
                    borderColor: ['#1e40af', '#7c3aed'],
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
                    backgroundColor: ['#22c55e', '#2563eb'],
                    borderColor: ['#15803d', '#1e40af'],
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
                    backgroundColor: ['#f59e42', '#2563eb', '#fde047'],
                    borderColor: ['#d97706', '#1e40af', '#eab308'],
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
                    backgroundColor: ['#22c55e', '#fde047', '#2563eb'],
                    borderColor: ['#15803d', '#eab308', '#1e40af'],
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
                    backgroundColor: ['#f59e42', '#2563eb', '#22c55e', '#a78bfa', '#64748b'],
                    borderColor: ['#d97706', '#1e40af', '#15803d', '#7c3aed', '#334155'],
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
