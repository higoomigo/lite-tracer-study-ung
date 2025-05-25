<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Wirausaha;
use Illuminate\Http\Request;

class WirausahaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.wirausaha.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'is_entrepreneur' => 'required',
            'business_type' => 'nullable|string',
            'business_name' => 'nullable|string',
            'business_start' => 'nullable|date',
            'business_reason' => 'nullable|string',
            'business_reason_other' => 'nullable|string',
            'business_funding' => 'nullable|string',
            'business_funding_other' => 'nullable|string',
            'business_progress' => 'nullable|string',
            'business_obstacle' => 'nullable|string',
            'business_obstacle_other' => 'nullable|string',
            'entrepreneur_training' => 'nullable|string',
            'entrepreneur_training_source' => 'nullable|string',
            'business_plan' => 'nullable|string',
            'business_plan_other' => 'nullable|string',
            'business_support' => 'nullable|string',
            'business_support_type' => 'nullable|string',
            'business_support_type_other' => 'nullable|string',
            'business_international' => 'nullable|string',
            'business_goal' => 'nullable|string',
            'business_goal_other' => 'nullable|string',
            'has_employee' => 'nullable|string',
            'employee_count' => 'nullable|integer',
            'business_tips' => 'nullable|string',
        ]);

        // Menyimpan data ke database
        $entrepreneur = Wirausaha::create([
            'is_entrepreneur' => $validatedData['is_entrepreneur'],
            'business_type' => $validatedData['business_type'] ?? null,
            'business_name' => $validatedData['business_name'] ?? null,
            'business_start' => $validatedData['business_start'] ?? null,
            'business_reason' => $validatedData['business_reason'] ?? null,
            'business_reason_other' => $validatedData['business_reason_other'] ?? null,
            'business_funding' => $validatedData['business_funding'] ?? null,
            'business_funding_other' => $validatedData['business_funding_other'] ?? null,
            'business_progress' => $validatedData['business_progress'] ?? null,
            'business_obstacle' => $validatedData['business_obstacle'] ?? null,
            'business_obstacle_other' => $validatedData['business_obstacle_other'] ?? null,
            'entrepreneur_training' => $validatedData['entrepreneur_training'] ?? null,
            'entrepreneur_training_source' => $validatedData['entrepreneur_training_source'] ?? null,
            'business_plan' => $validatedData['business_plan'] ?? null,
            'business_plan_other' => $validatedData['business_plan_other'] ?? null,
            'business_support' => $validatedData['business_support'] ?? null,
            'business_support_type' => $validatedData['business_support_type'] ?? null,
            'business_support_type_other' => $validatedData['business_support_type_other'] ?? null,
            'business_international' => $validatedData['business_international'] ?? null,
            'business_goal' => $validatedData['business_goal'] ?? null,
            'business_goal_other' => $validatedData['business_goal_other'] ?? null,
            'has_employee' => $validatedData['has_employee'] ?? false,
            'employee_count' => $validatedData['employee_count'] ?? null,
            'business_tips' => $validatedData['business_tips'] ?? null,
            'user_id' => Auth::id(), // Menyimpan ID user yang sedang login
        ]);
        try {
            // Simpan data ke database
            $entrepreneur->save();
        } catch (\Exception $e) {
            // Tangani kesalahan jika terjadi
            return redirect()->back()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }

        return redirect()->route('user.forms')->with('success', 'Data wirausaha berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Wirausaha $wirausaha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wirausaha $wirausaha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wirausaha $wirausaha)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wirausaha $wirausaha)
    {
        //
    }
}
