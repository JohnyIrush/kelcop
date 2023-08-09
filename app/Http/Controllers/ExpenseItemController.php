<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExpenseItemRequest;
use App\Http\Requests\UpdateExpenseItemRequest;
use App\Models\ExpenseItem;
use App\Models\SubActivity;

class ExpenseItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $subActivities = SubActivity::with('expenseItem')->get();
     
         // Grouping the subActivities by Item
         $groupedSubActivities = $subActivities->groupBy('Item');
     
         // Calculate total by Budget field for each group
         $groupedSubActivitiesWithTotal = $groupedSubActivities->map(function ($group) {
             $totalBudget = $group->sum('Budget');
             return [
                 'item' => $group->first()->expenseItem, // Assuming 'expenseItem' relationship has the item name
                 'totalBudget' => $totalBudget,
                 'subActivities' => $group,
             ];
         });
     
         return response()->json($groupedSubActivitiesWithTotal);
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
    public function store(StoreExpenseItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseItem $expenseItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseItem $expenseItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateExpenseItemRequest $request, ExpenseItem $expenseItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseItem $expenseItem)
    {
        //
    }
}
