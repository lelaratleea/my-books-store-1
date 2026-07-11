<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Http\Controllers\ProductController;

class CategoryController extends Controller
{
    const array CATEGORIES = [
        'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
        'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
        'CT003' => ['code' => 'CT003', 'name' => 'Python'],
    ];

    public function list(): View
    {
        return view('categories.list', [
            'categories' => self::CATEGORIES,
        ]);
    }

    public function view(string $category): View
    {
        // กรองเอาเฉพาะ Product ที่มี catCode ตรงกับที่ถูกส่งมา
        $allProducts = ProductController::PRODUCTS;
        $filteredProducts = array_filter($allProducts, function($p) use ($category) {
            return $p['catCode'] === $category;
        });

        return view('categories.view', [
            'category' => self::CATEGORIES[$category],
            'products' => $filteredProducts,
        ]);
    }
}