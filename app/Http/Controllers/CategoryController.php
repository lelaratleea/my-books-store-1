<?php

namespace App\Http\Controllers;

class CategoryController extends Controller
{
    const CATEGORIES = [
        'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
        'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
        'CT003' => ['code' => 'CT003', 'name' => 'Python'],
    ];

    public function list()
    {
        return view('categories.list', [
            'categories' => self::CATEGORIES
        ]);
    }

    public function view($code)
    {
        return view('categories.view', [
            'category' => self::CATEGORIES[$code]
        ]);
    }
}
