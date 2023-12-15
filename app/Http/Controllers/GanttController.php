<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gantt;

class GanttController extends Controller
{
    public function index(){
        //$gantts = Gantt::all();
        //return view('gantts.index', ['gantts' => $gantts]);
        return view('gantt.index');
        
    }

    public function create(){
        return view('gantts.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'taskName' => 'required',
            'taskDescription' => 'nullable',
            'startDate' => 'required',
            'endDate' => 'required',
            'duration' => 'required|numeric',
            'percentComplete' => 'required|numeric',
            'assignedPerson' => 'required'
            
        ]);

        $newGantt = Gantt::create($data);

        return redirect(route('gantt.index'));

    }

    public function edit(Gantt $gantt){
        return view('gantt.edit', ['gantt' => $gantt]);
    }

    public function update(Gantt $gantt, Request $request){
        $data = $request->validate([
            'taskName' => 'required',
            'taskDescription' => 'nullable',
            'startDate' => 'required',
            'endDate' => 'required',
            'duration' => 'required|numeric',
            'percentComplete' => 'required|numeric',
            'assignedPerson' => 'required'
        ]);

        $gantt->update($data);

        return redirect(route('gantt.index'))->with('success', 'Gantt Updated Succesffully');

    }

    public function destroy(Gantt $gantt){
        $gantt->delete();
        return redirect(route('gantt.index'))->with('success', 'Gantt deleted Succesffully');
    }
}
