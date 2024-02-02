<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Product\Entities\Brand;
use App\Http\Controllers\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Category;

class GeneralController extends Controller
{
    public function getCategory()
    {
        $items = Category::get();
        return response()->json([
            'status' => 'success',
            'items' => $items
        ]);
    }

    public function getBrand()
    {
        $items = Brand::get();
        return response()->json([
            'status' => 'success',
            'items' => $items
        ]);
    }

    public function getProducts()
    {
        $items = Product::query()
        ->when(request()->has('search'), function ($query) {
            $search = request()->input('search');
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('description', 'like', '%' . $search . '%');
        })
        ->when(request()->has('category'), function ($query) {
            $category = request()->input('category');
            $query->where('category_id', $category);
        })
        ->get()
        ->toArray();

        return response()->json([
            'status' => 'success',
            'items' => $items
        ]);
    }
}
