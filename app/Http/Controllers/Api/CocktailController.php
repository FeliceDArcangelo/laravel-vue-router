<?php

namespace App\Http\Controllers\Api;

use App\Models\Cocktail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CocktailController extends Controller
{
    public function index()
    {
        $cocktails = Cocktail::paginate(3);
        return response()->json($cocktails);
    }


    public function show(Cocktail $cocktail)
    {
        return response()->json([
            'success' => true,
            'results' => $cocktail,
        ]);
    }
}
