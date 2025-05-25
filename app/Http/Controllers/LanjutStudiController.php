<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\LanjutStudi;
use Illuminate\Http\Request;

class LanjutStudiController extends Controller
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
        
        return view('forms.pendidikan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the incoming request data
        // dd($request->all());
        $validatedData = $request->validate([
            'plan_study' => 'nullable|string',
            'study_location' => 'nullable|string',
            'study_financed_by' => 'nullable|string',
            'study_financed_by_other' => 'nullable|string',
            'study_scholarship' => 'nullable|string',
            'scholarship_type' => 'nullable|string',
            'scholarship_type_other' => 'nullable|string',
            'university_name' => 'nullable|string',
            'study_program' => 'nullable|string',
            'study_start_date' => 'nullable|date',
        ]);
        // The commented code below is for migrations, not needed in the controller.
        // Remove or ignore it. The controller should not contain schema definitions.
        // Create a new LanjutStudi record
        $lanjutStudi = LanjutStudi::create([
            'user_id' => Auth::id(), // Assuming you're storing data for logged-in users
            'plan_study' => $validatedData['plan_study'] ?? 'Belum melanjutkan studi',
            'study_location' => $validatedData['study_location'] ?? 'Belum melanjutkan studi',
            'study_financed_by' => $validatedData['study_financed_by'] ?? null,
            'study_financed_by_other' => $validatedData['study_financed_by_other'] ?? 'sudah memilih',
            'study_scholarship' => $validatedData['study_scholarship'] ?? 'Belum melanjutkan studi',
            'scholarship_type' => $validatedData['scholarship_type'] ?? 'Belum melanjutkan studi',
            'scholarship_type_other' => $validatedData['scholarship_type_other'] ?? 'Belum melanjutkan studi',
            'university_name' => $validatedData['university_name'] ?? 'Belum melanjutkan studi',
            'study_program' => $validatedData['study_program'] ?? 'Belum melanjutkan studi',
            'study_start_date' => $validatedData['study_start_date'] ?? null,
        ]);
        try {
            // Save the data to the database
            $lanjutStudi->save();
        } catch (\Exception $e) {
            // Handle any errors that may occur during the save operation
            return redirect()->back()->with('error', 'Failed to save data: ' . $e->getMessage());
        }
        return redirect()->route('user.forms')->with('success', 'Data tracing pendidikan berhasil disimpan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(LanjutStudi $lanjutStudi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LanjutStudi $lanjutStudi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LanjutStudi $lanjutStudi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LanjutStudi $lanjutStudi)
    {
        //
    }
}
