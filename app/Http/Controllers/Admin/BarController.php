<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use App\Http\Requests\StorePostRequest;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $data = $request->all();


        $new_cocktail = new Cocktail();

        $new_cocktail->name = $data['name'];
        $new_cocktail->description = $data['description'];
        $new_cocktail->ingredient = $data['ingredient'];
        $new_cocktail->origin = $data['origin'];
        $new_cocktail->save();

        return redirect()->route('guest.index', $new_cocktail->id);
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
    public function update(Request $request, string $id)
    {
        // $data = $request->validated();
        $data = $request->all();

        $cocktail = Cocktail::findOrFail($id);


        $cocktail->name = $data['name'];
        $cocktail->description = $data['description'];
        $cocktail->ingredient = $data['ingredient'];
        $cocktail->origin = $data['origin'];
        $cocktail->save();

        return redirect()->route('guest.index', $cocktail->id);
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
