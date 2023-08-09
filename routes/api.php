<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CenterController;
use App\Http\Controllers\ExpenseItemController;
use App\Http\Controllers\FinancingController;
use App\Http\Controllers\MainActivityController;
use App\Http\Controllers\ReferenceCodeController;
use App\Http\Controllers\SubActivityController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('subactivity/index', [SubActivityController::class, 'index']);

Route::get('referencecode/index', [ReferenceCodeController::class, 'index']);

Route::get('category/index', [CategoryController::class, 'index']);

Route::get('financing/index', [FinancingController::class, 'index']);

Route::get('centre/index', [CenterController::class, 'index']);

Route::get('expenseitem/index', [ExpenseItemController::class, 'index']);


Route::get('referencecode/targetdataentry', [ReferenceCodeController::class, 'targetDataEntry']);

Route::get('mainactivity/index', [MainActivityController::class, 'index']);

Route::get('category/report/index', [CategoryController::class, 'summaryByCategory']);