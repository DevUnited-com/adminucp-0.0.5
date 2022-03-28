<?php

namespace App\Http\Controllers;

use App\Models\Characters;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = characters::all();
        return view('characters.index', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('characters.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $characters = new characters;
        $characters->accountID = $request->input('accountID');
        $characters->whitelisted = $request->input('whitelisted');
        $characters->adminRank = $request->input('adminRank');
        $characters->firstname = $request->input('firstname');
        $characters->lastname  = $request->input('lastname');
        $characters->money     = $request->input('money');
        $characters->gang      = $request->input('gang');
        $characters->gangrang  = $request->input('gangrang');
        $characters->faction   = $request->input('faction');
        $characters->test = $request->get('test');
        $characters->save();
        return redirect()->back()->with('status','characters Mitglied erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function show(Characters $characters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function edit(Characters $characters, $id)
    {
        $characters = Characters::find($id);
        return view('characters.edit', compact('characters'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characters $characters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Characters  $characters
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characters $characters, $id)
    {
        Characters::destroy($id);
        return redirect('characters')->with('status','Charakter wurde erfolgreich gelöscht.');
    }
}
