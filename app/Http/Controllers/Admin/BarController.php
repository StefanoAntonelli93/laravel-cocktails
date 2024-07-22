<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailRequest;
use App\Models\Cocktail;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdateCocktailRequest;
use Illuminate\Http\Request;



class BarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();

        return view('guest.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('guest.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {

        $data = $request->validated();



        $cocktail = new Cocktail();

        $cocktail->name = $data['name'];
        $cocktail->description = $data['description'];
        $cocktail->ingredients = $data['ingredients'];
        $cocktail->origin = $data['origin'];
        $cocktail->save();

        return redirect()->route('cocktails.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cocktail = Cocktail::find($id);

        return view('guest.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cocktail = Cocktail::findOrFail($id);
        return view('guest.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, $id)
    {
        $data = $request->validated();

        $cocktail = Cocktail::findOrFail($id);

        $cocktail->update($data);

        return redirect()->route('cocktails.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cocktails = Cocktail::findOrFail($id);
        $cocktails->delete();
        return redirect()->route('cocktails.index');
    }
}
