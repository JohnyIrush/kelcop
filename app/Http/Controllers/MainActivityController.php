<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMainActivityRequest;
use App\Http\Requests\UpdateMainActivityRequest;
use App\Models\MainActivity;

class MainActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(MainActivity::with('subActivities','referenceCode', 'category', 'center', 'financing', 'referenceCodeUnits')->get());
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
    public function store(StoreMainActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(MainActivity $mainActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainActivity $mainActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMainActivityRequest $request, MainActivity $mainActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainActivity $mainActivity)
    {
        //
    }
}
