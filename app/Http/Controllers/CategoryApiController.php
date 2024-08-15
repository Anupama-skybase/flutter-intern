<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public function getCategories()
    {
        return Category::all();
    }

    public function getSubcategoriesByCategory($categoryId)
    {
        return Subcategory::where('category_id', $categoryId)->get();
    }
}
