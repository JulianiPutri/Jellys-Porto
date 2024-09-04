<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class JellyController extends Controller
{
    public function index()
    {
        $jellies = [
            [
                'name' => 'Juliani Putri',
                'date_of_birth' => Carbon::parse('2002-07-11')->format('Y-m-d'),
                'profile' => 'https://res.cloudinary.com/djfokefsy/image/upload/v1725418915/profile.jpg',
            ],
        ];
        return view('about', ['jellies' => $jellies, 'title' => 'About Me']);
    }
}
