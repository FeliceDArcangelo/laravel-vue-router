<?php

namespace App\Http\Controllers\Api;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Cocktail;

class CategoryController extends Controller
{
    public function index(Request $request) {
        // $categories = Cocktail::groupBy('strCategory')->get();
        $categories = $request->query('category');

        $query = Cocktail::all();

        if ($categories) {
            $query = $query->where('strCategory', $categories);
        }

        $post = $query->paginate(3);

        return response()->json([
            'success' => true,
            'results' => $post,
        ]);
    }
}
