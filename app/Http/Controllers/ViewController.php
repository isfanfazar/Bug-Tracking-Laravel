<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ViewBugModel;

class ViewController extends Controller
{
    public function __construct()
    {
        $this->ViewBugModel = new ViewBugModel();
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'view' => $this->ViewBugModel->allData(),
        ];
        return view('viewBugs', $data);
    }

    public function detail($id){
        $data = [
            'view' => $this->ViewBugModel->detailData($id),
        ];
        return view('detail', $data); 
    }
}
