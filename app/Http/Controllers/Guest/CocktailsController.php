<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailsController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::all();
        $data = [
            'cocktails' => $cocktails
        ];
        return view('cocktails', $data);
    }
}
