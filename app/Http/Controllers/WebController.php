<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;
use App\Models\Item;

class WebController extends Controller
{
    public function index()
    {
        $productTypes = ProductType::all();
        $items = Item::all();

        return view(
            'website.index', [
            'productTypes' => $productTypes,
            'items' => $items
            ]
        );
    }

}
