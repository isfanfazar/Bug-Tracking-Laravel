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

    public function detail($id){
        $data = [
            'view' => $this->ViewBugModel->detailData($id),
        ];
        return view('detail', $data); 
    }

    public function add()
    {
        return view('addBug');
    }

    public function insert()
    {
        Request()->validate([
            'judul' => 'required|unique:tbl_view,judul|min:10|max:100',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png',
            'detail' => 'required',
            'versi' => 'required',
            'status' => 'required',
        ]);

        //upload foto
        $file = Request()->foto;
        $fileName = Request()->judul . '.' . $file->extension();
        $file->move(public_path('foto'), $fileName);

        $data = [
            'judul' => Request()->judul,
            'foto' => $fileName,
            'detail' => Request()->detail,
            'versi' => Request()->versi,
            'status' => Request()->status,
        ];

        $this->ViewBugModel->addData($data);
        return redirect()->route('viewbugs')->with('message','Success to add bug');
    }
}
