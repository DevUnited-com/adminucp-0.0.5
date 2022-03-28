<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vehicle = Vehicle::all();
        return view('fahrzeug.index', compact('Vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fahrzeug.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vehicle = new Vehicle;
        $Vehicle->name = $request->input('name');
        $Vehicle->email = $request->input('email');
        $Vehicle->level = $request->input('level');
        $Vehicle->bereich = $request->input('bereich');
        $Vehicle->save();
        return redirect()->back()->with('status','Vehicle Mitglied erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vehicle = Vehicle::find($id);
        return view('fahrzeug.edit', compact('Vehicle'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Vehicle = Vehicle::find($id);
        $Vehicle->charId = $request->input('charId');
        $Vehicle->model = $request->input('model');
        $Vehicle->numberPlate = $request->input('numberPlate');
        $Vehicle->update();
        return redirect()->back()->with('status','Fahrzeug wurde erfolgreich bearbeitet.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
