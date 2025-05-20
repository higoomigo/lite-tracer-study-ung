<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pendidikan;
use App\Models\Wirausaha;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard_user');
    }
    public function forms()
    {
        $userId = Auth::id();
        // $hasFilledForm = Pekerjaan::where('user_id', $userId)->exists()
        //     || Wirausaha::where('user_id', $userId)->exists()
        //     || Pendidikan::where('user_id', $userId)->exists();
        $hasFilledFormPekerjaan = Pekerjaan::where('user_id', $userId)->exists();

        // if ($hasFilledPekerjaanForm)
        // if (!$hasFilledForm) {
        //     $hasFilledForm = Wirausaha::where('user_id', $userId)->exists();
        // }
        // if (!$hasFilledForm) {
        //     $hasFilledForm = Pendidikan::where('user_id', $userId)->exists();
        // }

        //buat 3 variable untuk menampung data dari 3 tabel
        // $hasFilledFormPekerjaan = Pekerjaan::where('user_id', $userId)->exists();
        // $hasFilledFormWirausaha = Wirausaha::where('user_id', $userId)->exists();
        // $hasFilledFormPendidikan = Pendidikan::where('user_id', $userId)->exists();
        // $hasFilledForm = $hasFilledFormPekerjaan || $hasFilledFormWirausaha || $hasFilledFormPendidikan;
        $hasFilledForm = $hasFilledFormPekerjaan; 
        return view('user.forms', compact('hasFilledFormPekerjaan', 'hasFilledForm'));
    }
    public function transcript()
    {
        return view('user.transcript');
    }
}
