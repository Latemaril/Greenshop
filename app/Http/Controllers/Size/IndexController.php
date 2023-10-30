<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $sizes = \App\Models\Size::all();
        return view('size.index', compact('sizes'));
    }
}
