<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReferenceCodeRequest;
use App\Http\Requests\UpdateReferenceCodeRequest;
use App\Models\ReferenceCode;

class ReferenceCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(ReferenceCode::all());
    }

    function targetDataEntry() 
    {
        return response()->json(ReferenceCode::with('mainActivities','referenceCodeUnits')->get());
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
    public function store(StoreReferenceCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ReferenceCode $referenceCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ReferenceCode $referenceCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReferenceCodeRequest $request, ReferenceCode $referenceCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ReferenceCode $referenceCode)
    {
        //
    }
}
