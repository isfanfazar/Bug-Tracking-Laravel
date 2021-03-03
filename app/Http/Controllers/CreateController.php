<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CreateModel;

class CreateController extends Controller
{
    public function __construct()
    {
        $this->CreateModel = new CreateModel();
    }

    public function index()
    {
        $data = [
            'create' => $this->CreateModel->allData(),
        ];
        return view('createBug', $data);
    }
}
