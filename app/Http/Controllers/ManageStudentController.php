<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ManageStudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::where('role', 'mahasiswa');

        // Filter berdasarkan angkatan jika ada
        if ($request->filled('graduate_year')) {
            $query->where('graduate_year', $request->graduate_year);
        }

        $students = $query->get();

        // Untuk dropdown angkatan, ambil semua tahun unik dari database mahasiswa
        $years = User::where('role', 'mahasiswa')->distinct()->pluck('graduate_year')->sort()->values();

        return view('students.students', compact('students', 'years'));
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = User::findOrFail($id);
        return view('students.profile', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
