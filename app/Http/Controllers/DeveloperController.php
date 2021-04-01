<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeveloperModel;

class DeveloperController extends Controller
{
    public function __construct(){
        $this->DeveloperModel = new DeveloperModel();
    }

    public function index(){
        $data = [
            'developer' => $this->DeveloperModel->allData(),
        ];
        return view('developer', $data);
    }
}
