<?php

namespace App\Http\Controllers;

use App\Models\Jelly;
use Illuminate\Http\Request;

class JellyController extends Controller
{
    public function index()
    {
        $jellies = Jelly::all();
        return view('about', ['jellies' => $jellies, 'title'=>'About Me']);

      
    }
}
