<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membre;
use Illuminate\Support\Facades\Redirect;

class MembreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $membres = Membre::all();
        return view('membres.index',compact('membres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('membres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'nom' => ['required','string','max:255'],
                'email' => ['required','string','max:255']
            ]
        );

        Membre::create($validated);

        return redirect()->route('membres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $membre = Membre::findOrFail($id);
        return view('membres.show',compact('membre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $membre = Membre::findOrFail($id);
        return view('membres.edit',compact('membre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $membre = Membre::findOrFail($id);
        $validated = $request->validate(
            [
               'nom' => ['required','string'],
               'email' => ['required','string']
            ]
        );

        $membre->update($validated);

        return redirect()->route('membres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $membre = Membre::findOrFail($id);
        $membre->delete();
        return Redirect()->route('membres.index');
    }
}
