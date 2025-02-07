<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalQuantity = Product::sum('quantity');
        $mostExpensiveProduct = Product::orderBy('retail_price', 'desc')->first();
        $highestQuantityProduct = Product::orderBy('quantity', 'desc')->first();

        return view('dashboard', compact('totalQuantity', 'mostExpensiveProduct', 'highestQuantityProduct'));
    }
}
