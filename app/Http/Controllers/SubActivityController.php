<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubActivityRequest;
use App\Http\Requests\UpdateSubActivityRequest;
use App\Models\SubActivity;

class SubActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(SubActivity::with('expenseItem')->get());
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
    public function store(StoreSubActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(SubActivity $subActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubActivity $subActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSubActivityRequest $request, SubActivity $subActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubActivity $subActivity)
    {
        //
    }
}
