<?php

namespace App\Http\Controllers;

use App\Models\Whitelist;
use Illuminate\Http\Request;

class WhitelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whitelist = whitelist::all();
        return view('whitelist.index', compact('whitelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('whitelist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $whitelist = new whitelist;
        $whitelist->quest1 = $request->input('quest1');
        $whitelist->quest2 = $request->input('quest2');
        $whitelist->quest3 = $request->input('quest3');
        $whitelist->quest4 = $request->input('quest4');
        $whitelist->quest5  = $request->input('quest5');
        $whitelist->quest6    = $request->input('quest6');
        $whitelist->quest7     = $request->input('quest7');
        $whitelist->quest8  = $request->input('quest8');
        $whitelist->quest9   = $request->input('quest9');
        $whitelist->quest10 = $request->get('quest10');
        $whitelist->save();
        return redirect()->back()->with('status','Whitelist Fragen erfolgreich hinzugefügt.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Whitelist  $whitelist
     * @return \Illuminate\Http\Response
     */
    public function show(Whitelist $whitelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Whitelist  $whitelist
     * @return \Illuminate\Http\Response
     */
    public function edit(Whitelist $whitelist, $id)
    {
        $whitelist = whitelist::find($id);
        return view('whitelist.edit', compact('whitelist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Whitelist  $whitelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Whitelist $whitelist, $id)
    {
        $whitelist = whitelist::find($id);
        $whitelist->quest1 = $request->input('quest1');
        $whitelist->quest2 = $request->input('quest2');
        $whitelist->quest3 = $request->input('quest3');
        $whitelist->quest4 = $request->input('quest4');
        $whitelist->quest5 = $request->input('quest5');
        $whitelist->quest6 = $request->input('quest6');
        $whitelist->quest7 = $request->input('quest7');
        $whitelist->quest8 = $request->input('quest8');
        $whitelist->quest9 = $request->input('quest9');
        $whitelist->quest10 = $request->input('quest10');
        $whitelist->update();
        return redirect()->back()->with('status','Whitelist Fragen worden erfolgreich bearbeitet.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Whitelist  $whitelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Whitelist $whitelist)
    {
        //
    }
}
