<?php

namespace App\Http\Controllers;

use App\User;

class ExploreController extends Controller
{
    public function index()
    {
        return view('explore', [
            'users' => User::paginate(50),
        ]);
    } 
    
    // public function __invoke()
    // {
    //     return view('explore', [
    //         'users' => User::paginate(50),
    //     ]);
    // }
}