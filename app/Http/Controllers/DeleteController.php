<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function index()
    {
        return view('deleteBug');
    }
}
