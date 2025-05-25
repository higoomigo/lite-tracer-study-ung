<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pekerjaan;
use App\Models\LanjutStudi;
use App\Models\Wirausaha;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Example query to get data for each chart
        // Status pekerjaan alumni
        $users = User::where('role', 'mahasiswa')->get();
        // Hitung berapa mahasiswa yang sudah mengisi form pekerjaan
        $pekerjaanCount = Pekerjaan::count();
        // Hitung berapa users yang sudah mengisi form wirausaha
        $wirausahaCount = Wirausaha::count();
        $lanjutStudiCount = LanjutStudi::count();

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
            'dalam_daerah' => Pekerjaan::where('job_location', 'Dalam Provinsi Gorontalo')->count(),
            'luar_daerah' => Pekerjaan::where('job_location', 'Luar Provinsi Gorontalo')->count(),
            'luar_negeri' => Pekerjaan::where('job_location', 'Luar Negeri')->count(),
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
            'modal_pribadi' => Wirausaha::where('business_funding', 'Pribadi')->count(),
            'pinjaman' => Wirausaha::where('business_funding', 'Pinjaman')->count(),
            'investor' => Wirausaha::where('business_funding', 'Investasi')->count(),
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
            'wirausaha',
            'users',
            'pekerjaanCount',
            'wirausahaCount',
            'lanjutStudiCount'
        ));
    }


    public function viewForm()
    {
        $pekerjaan = Pekerjaan::all();
        $lanjutStudi = LanjutStudi::all();
        $wirausaha = Wirausaha::all();
        return view('admin.forms', compact('pekerjaan', 'lanjutStudi', 'wirausaha'));
    }
}
