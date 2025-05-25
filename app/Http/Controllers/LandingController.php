<?php

namespace App\Http\Controllers;
use App\Models\Pekerjaan;
use App\Models\LanjutStudi;
use App\Models\Wirausaha;
use App\Models\User;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        // Sebaran lokasi kerja semua lulusan
        $sebaranLokasiKerja = Pekerjaan::where('employed', 'yes')
            ->whereHas('user')
            ->selectRaw('job_location, COUNT(*) as total')
            ->groupBy('job_location')
            ->pluck('total', 'job_location');

        // Jalur karir semua lulusan (pekerjaan, lanjut studi, wirausaha)
        $totalLulusan = User::count();
        $totalPekerjaan = Pekerjaan::distinct('user_id')->count('user_id');
        $totalLanjutStudi = LanjutStudi::distinct('user_id')->count('user_id');
        $totalWirausaha = Wirausaha::distinct('user_id')->count('user_id');

        $jalurKarir = [
            'pekerjaan' => $totalPekerjaan,
            'lanjut_studi' => $totalLanjutStudi,
            'wirausaha' => $totalWirausaha,
        ];

        // Persentase terserap pekerjaan, lanjut studi, dan wirausaha dari total lulusan
        $persentaseKarir = [
            'pekerjaan' => $totalLulusan ? round(($totalPekerjaan / $totalLulusan) * 100, 2) : 0,
            'lanjut_studi' => $totalLulusan ? round(($totalLanjutStudi / $totalLulusan) * 100, 2) : 0,
            'wirausaha' => $totalLulusan ? round(($totalWirausaha / $totalLulusan) * 100, 2) : 0,
        ];

        // Rata-rata waktu tunggu kerja (dalam bulan)
        $rataRataWaktuKerja = Pekerjaan::avg('waiting_time');
        return view('welcome', compact('sebaranLokasiKerja', 'jalurKarir', 'rataRataWaktuKerja','persentaseKarir','totalLulusan', 'totalPekerjaan', 'totalLanjutStudi', 'totalWirausaha'));
    }

    public function getStatistics(Request $request)
    {
    // Get the selected year from the request (default to 2023)
    $year = $request->input('year', '2023');

    // Filter pekerjaan by graduate_year (2023 or 2024)
    // Pekerjaan statistics
    $pekerjaanStats = [
        'job_location' => Pekerjaan::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('job_location, COUNT(*) as total')
            ->groupBy('job_location')
            ->pluck('total', 'job_location'),

        'job_status' => Pekerjaan::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('job_status, COUNT(*) as total')
            ->groupBy('job_status')
            ->pluck('total', 'job_status'),

        'waiting_time_avg' => Pekerjaan::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->avg('waiting_time'),

        'monthly_salary_avg' => Pekerjaan::whereHas('user', function($query) use ($year) {
            $query->where('graduate_year', $year);
            })
            ->avg('monthly_salary'),

        // Ambil jumlah per kelompok gaji (misal: <2jt, 2-4jt, 4-6jt, >6jt)
        'monthly_salary_groups' => Pekerjaan::whereHas('user', function($query) use ($year) {
            $query->where('graduate_year', $year);
            })
            ->selectRaw("
            SUM(CASE WHEN monthly_salary < 5000000 THEN 1 ELSE 0 END) as less_5jt,
            SUM(CASE WHEN monthly_salary >= 5000000 AND monthly_salary < 8000000 THEN 1 ELSE 0 END) as between_5_8jt,
            SUM(CASE WHEN monthly_salary >= 8000000 AND monthly_salary < 10000000 THEN 1 ELSE 0 END) as between_8_10jt,
            SUM(CASE WHEN monthly_salary >= 10000000 THEN 1 ELSE 0 END) as more_10jt
            ")
            ->first(),
    ];

    // Lanjut Studi statistics
    $lanjutStudiStats = [
        'study_location' => LanjutStudi::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('study_location, COUNT(*) as total')
            ->groupBy('study_location')
            ->pluck('total', 'study_location'),

        'study_financed_by' => LanjutStudi::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('study_financed_by, COUNT(*) as total')
            ->groupBy('study_financed_by')
            ->pluck('total', 'study_financed_by'),

        'study_scholarship' => LanjutStudi::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('study_scholarship, COUNT(*) as total')
            ->groupBy('study_scholarship')
            ->pluck('total', 'study_scholarship'),
    ];

    // Wirausaha statistics
    $wirausahaStats = [
        'business_type' => Wirausaha::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('business_type, COUNT(*) as total')
            ->groupBy('business_type')
            ->pluck('total', 'business_type'),

        'business_funding' => Wirausaha::whereHas('user', function($query) use ($year) {
                $query->where('graduate_year', $year);
            })
            ->selectRaw('business_funding, COUNT(*) as total')
            ->groupBy('business_funding')
            ->pluck('total', 'business_funding'),
    ];

    // Total graduates
    $totalLulusan = User::where('graduate_year', $year)->count();

    // Percentage for each category
    $totalPekerjaan = Pekerjaan::whereHas('user', function($query) use ($year) {
        $query->where('graduate_year', $year)->where('employed', 'yes');
    })->count();

    $totalLanjutStudi = LanjutStudi::whereHas('user', function($query) use ($year) {
        $query->where('graduate_year', $year)->where('plan_study', 'yes');
    })->count();

    $totalWirausaha = Wirausaha::whereHas('user', function($query) use ($year) {
        $query->where('graduate_year', $year)->where('is_entrepreneur', '1');
    })->count();

    // Ambil user_id yang sudah mengisi salah satu form
    $userIdsPekerjaan = Pekerjaan::whereHas('user', function($query) use ($year) {
            $query->where('graduate_year', $year);
        })
        ->where('employed', 'yes')
        ->pluck('user_id')
        ->toArray();

    $userIdsLanjutStudi = LanjutStudi::whereHas('user', function($query) use ($year) {
            $query->where('graduate_year', $year);
        })
        ->where('plan_study', 'yes')
        ->pluck('user_id')
        ->toArray();

    $userIdsWirausaha = Wirausaha::whereHas('user', function($query) use ($year) {
            $query->where('graduate_year', $year);
        })
        ->where('is_entrepreneur', '1')
        ->pluck('user_id')
        ->toArray();

    // Gabungkan semua user_id yang sudah mengisi form
    $userIdsMengisiForm = array_unique(array_merge($userIdsPekerjaan, $userIdsLanjutStudi, $userIdsWirausaha));

    // Ambil seluruh user_id lulusan tahun tersebut
    $allUserIds = User::where('graduate_year', $year)->pluck('id')->toArray();

    // Hitung user yang belum mengisi form
    $userIdsBelumMengisiForm = array_diff($allUserIds, $userIdsMengisiForm);
    $totalMengisiForm = count($userIdsBelumMengisiForm);

    $totalLulusanPercentages = [
        'pekerjaan' => $totalLulusan ? round(($totalPekerjaan / $totalLulusan) * 100, 2) : 0,
        'lanjut_studi' => $totalLulusan ? round(($totalLanjutStudi / $totalLulusan) * 100, 2) : 0,
        'wirausaha' => $totalLulusan ? round(($totalWirausaha / $totalLulusan) * 100, 2) : 0,
    ];

    // Returning data to the view as JSON for AJAX response
        // Ambil seluruh variabel yang di atas
        return [
            'year' => $year,
            'pekerjaanStats' => $pekerjaanStats,
            'lanjutStudiStats' => $lanjutStudiStats,
            'wirausahaStats' => $wirausahaStats,
            'totalLulusan' => $totalLulusan,
            'totalPekerjaan' => $totalPekerjaan,
            'totalLanjutStudi' => $totalLanjutStudi,
            'totalWirausaha' => $totalWirausaha,
            'totalLulusanPercentages' => $totalLulusanPercentages,
            'totalMengisiForm' => $totalMengisiForm,
        ];
    }
    


    public function detailStatistik(Request $request)
{
    

    // Pass data to the view
    return view('detail_statistik');
}
}
