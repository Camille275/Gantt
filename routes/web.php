<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GanttController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gantt', [GanttController::class, 'index'])->taskName('gantt.index');
//Route::get('/gantt/create', [GanttController::class, 'create'])->taskName('gantt.create');
//Route::post('/gantt', [GanttController::class, 'store'])->taskName('gantt.store');
//Route::get('/gantt/{gantt}/edit', [GanttController::class, 'edit'])->taskName('gantt.edit');
//Route::put('/gantt/{gantt}/update', [GanttController::class, 'update'])->taskName('gantt.update');
//Route::delete('/gantt/{gantt}/destroy', [GanttController::class, 'destroy'])->taskName('gantt.destroy');