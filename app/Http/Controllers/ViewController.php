<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewBugModel;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->ViewBugModel = new ViewBugModel();
    }

    public function index()
    {
        $data = [
            'view' => $this->ViewBugModel->allData(),
        ];
        return view('viewBugs', $data);
    }
}
