<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainType;

class TrainTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trainTypes = TrainType::all();

        return view('trainType.index', [
        'trainTypes' => $trainTypes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('trainType.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'trainType' => 'required',
        ]);
    
        $trainType = new TrainType;
        $trainType->type = $validated['trainType'];
        $trainType->save();
    
        return redirect()->route('trainTypes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trainTypes = TrainType::findOrFail($id);
        return view('trainType.show', [
            'trainType' => $trainTypes
        ]);   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $trainType = TrainType::find($id);
        $allTrainTypes = TrainType::all();
        return view('trainType.edit', ['trainType' => $trainType, 
        'allTrainTypes' => $allTrainTypes
    ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TrainType $trainType)
    {
        
        $trainType->type = $request->input('type');
        $trainType->save();

        return redirect('/trainTypes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trainType = TrainType::find($id);

        foreach ($trainType->trains as $train) {
            $train->delete();
        }

        $trainType->delete();
    
        return redirect('/trainTypes');
    }
}
