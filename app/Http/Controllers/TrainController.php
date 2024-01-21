<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;
use App\Models\TrainType;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trains = Train::all();
        return view('index', ['trains' => $trains]);
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {
        $trainTypes = TrainType::all();
        return view('trains.create', ['trainTypes' => $trainTypes]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $train = new Train;
        $train->name = $request->name;
        $train->passengers = $request->passengers;
        $train->year = $request->year;
        $train->trainType = $request->trainType;
        $train->save();

        return redirect('/trains');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $train = Train::find($id);
        return view('trains.show', ['train' => $train]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $train = Train::find($id);
        return view('trains.edit', ['train' => $train]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $train = Train::find($id);
        $train->train_type_id = $request->train_type_id;
        $train->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $train = Train::find($id);
        $train->tickets()->delete(); // Eliminamos los tickets asociados
        $train->delete();
        return redirect('/trains');
    }
}
