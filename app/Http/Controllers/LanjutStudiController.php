<?php

namespace App\Http\Controllers;

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
        //
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
