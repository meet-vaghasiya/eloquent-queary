<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;

class AllQuearyController extends Controller
{
    public function index()
    {
        $category = Category::select('id', 'title')->orderByDesc('title')->get();

        $tag = Tag::select('id', 'name')->get();

        dd($tag);
    }
}
