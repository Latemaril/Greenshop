<?php

namespace App\Http\Controllers\Size;

use App\Http\Controllers\Controller;
use App\Models\Size;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Size $size)
    {
        return view('size.show', compact('size'));
    }
}
