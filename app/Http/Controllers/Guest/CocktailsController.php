<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cocktail;

class CocktailsController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}
