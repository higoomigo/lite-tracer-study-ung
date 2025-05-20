<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('forms.pekerjaan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'employed' => 'required|string',
            'industry' => 'nullable|string',
            'job_status' => 'nullable|string',
            'monthly_salary' => 'nullable|numeric',
            'job_location' => 'nullable|string',
            'waiting_time' => 'nullable|numeric',
            'job_choice_factor' => 'nullable|string',
            'ever_employed' => 'nullable|string',
            'last_job_title' => 'nullable|string',
            'last_company' => 'nullable|string',
            'reason_left' => 'nullable|string',
            'current_activity' => 'nullable|string',
            'never_employed_reason' => 'nullable|string',
            'never_employed_looking' => 'nullable|string',
            'never_employed_business' => 'nullable|string',
            'desired_industry' => 'nullable|string',
            'plan_study' => 'nullable|string',
            'has_business' => 'nullable|string',
            'business_name' => 'nullable|string',
            'interest_return_school' => 'nullable|string',
        ]);
        dd($validatedData);
        // Store the data in the tracer_studies table
        $tracerStudy = Pekerjaan::create([
            'employed' => $validatedData['employed'],
            'industry' => $validatedData['industry'] ?? null,
            'job_status' => $validatedData['job_status'] ?? null,
            'monthly_salary' => $validatedData['monthly_salary'] ?? null,
            'job_location' => $validatedData['job_location'] ?? null,
            'waiting_time' => $validatedData['waiting_time'] ?? null,
            'job_choice_factor' => $validatedData['job_choice_factor'] ?? null,
            'ever_employed' => $validatedData['ever_employed'] ?? 'no',
            'last_job_title' => $validatedData['last_job_title'] ?? null,
            'last_company' => $validatedData['last_company'] ?? null,
            'reason_left' => $validatedData['reason_left'] ?? null,
            'current_activity' => $validatedData['current_activity'] ?? null,
            'never_employed_reason' => $validatedData['never_employed_reason'] ?? null,
            'never_employed_looking' => $validatedData['never_employed_looking'] ?? null,
            'never_employed_business' => $validatedData['never_employed_business'] ?? null,
            'desired_industry' => $validatedData['desired_industry'] ?? null,
            'plan_study' => $validatedData['plan_study'] ?? null,
            'has_business' => $validatedData['has_business'] ?? null,
            'business_name' => $validatedData['business_name'] ?? null,
            'interest_return_school' => $validatedData['interest_return_school'] ?? null,
            'user_id' => Auth::id(), // User ID for the logged-in user
        ]);

        // Return success message and redirect
        return redirect()->route('user.dashboard')->with('success', 'Your form has been successfully submitted!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pekerjaan $pekerjaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pekerjaan $pekerjaan)
    {
        //
    }
}
