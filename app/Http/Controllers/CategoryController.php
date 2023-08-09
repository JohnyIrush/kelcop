<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\MainActivity;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Category::all());
    }

    public function summaryByCategory()
    {
        $mainActivities = MainActivity::with('subActivities','referenceCode', 'category', 'center', 'financing', 'referenceCodeUnits')->get();
     
         // Calculate total by Budget field for each group
         $groupedMainActivitiesWithTotal = [
         ];

         $categories = [
            
         ];

         $donors = [];

         foreach ($mainActivities as $key => $mainActivity) {

            if (!array_key_exists($mainActivity->Cat, $categories)) {
                # code...
                $categories[$mainActivity->Cat] = [
                    'Donors' => [],
                    'Total' => 0
                ]; 
             }

            foreach ($mainActivity->subActivities as $key => $subactivity)
            {
                if (array_key_exists($mainActivity->Donor,  $categories[$mainActivity->Cat]['Donors'])) {
                    # code...
                    $categories[$mainActivity->Cat]['Donors'][$mainActivity->Donor]['Total'] += $subactivity->Budget;
                    $categories[$mainActivity->Cat]['Total'] += $subactivity->Budget;
                    
                 }
                 else if($mainActivity->Donor != ''){
                    $categories[$mainActivity->Cat]['Donors'][$mainActivity->Donor] =[
                        'Total' => 0,
                        'mainactivity' => []
                    ] ;
                    $categories[$mainActivity->Cat]['Donors'][$mainActivity->Donor]['Total'] += $subactivity->Budget;
                    $categories[$mainActivity->Cat]['Donors'][$mainActivity->Donor]['mainactivity'] = $mainActivity;
                    $categories[$mainActivity->Cat]['Total'] += $subactivity->Budget;
                     
                 }
            }

             //$summary['Donors'][$subactivity->Donor]['mainactivity'] = $mainactivity; 
//
             //if (array_key_exists($mainActivity->Cat, $groupedMainActivitiesWithTotal)) {
             //   # code...
             //   array_push($groupedMainActivitiesWithTotal[$mainActivity->Cat],$summary);
             //}
             //else if($mainActivity->Cat != ''){
             //   $groupedMainActivitiesWithTotal[$mainActivity->Cat] = [];
             //   array_push($groupedMainActivitiesWithTotal[$mainActivity->Cat],$summary);
             //}


             
         }
         
        //return response()->json($donors);
        return response()->json($categories);
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
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
