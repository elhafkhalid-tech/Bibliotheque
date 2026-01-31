<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livre;
use App\Models\Category;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Redis;

class LivreController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $livres = Livre::with('category')->get();
        return view('livres.index',compact('livres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        $categories = Category::all();
        return view('livres.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'titre' => ['required','string','max:255'],
                'auteur' => ['required','string','max:255'],
                'category_id' => ['required','string','max:255']
            ]
        );
        
        Livre::create($validated);

        return Redirect()->route('livres.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $livre = Livre::findOrFail($id);
        return view('livres.show',compact('livre'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    
    public function edit(Livre $livre)
    {
        $categories = Category::all();
        return view('livres.edit',compact('livre','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request,Livre $livre){
         $validate = $request->validate(
            [
                'name' => ['required','string','max:255'],
                'auteur' => ['required','string','max:255'],
                'category_id' => ['required']
            ]
        );

        $livre->update($validate);

        return Redirect()->route('livres.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $livre = Livre::findOrFail($id);
        $livre->delete();
        return Redirect()->route('livres.index');
    }

}
