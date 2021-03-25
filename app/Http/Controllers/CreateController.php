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
            'view' => $this->CreateModel->allData(),
        ];
        return view('createbug', $data);
    }

    public function detail($id){
        $data = [
            'view' => $this->CreateModel->detailData($id),
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

        $this->CreateModel->addData($data);
        return redirect()->route('createbug')->with('message','Success to add bug');
    }

    public function edit($id){
        if(!$this->CreateModel->detailData($id)){
            abort(404);
        }
        
        $data = [
            'view' => $this->CreateModel->detailData($id),
        ];

        return view('editBug', $data);
    }

    public function update($id){
        Request()->validate([
            'judul' => 'required|min:10|max:100',
            'foto' => 'mimes:jpg,jpeg,bmp,png',
            'detail' => 'required',
            'versi' => 'required',
            'status' => 'required',
        ]);

        if(Request()->foto <> ""){
            //upload foto or update foto
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

            $this->CreateModel->editData($id, $data);            
        } else{
            //if you dont want to change the foto
            $data = [
                'judul' => Request()->judul,
                'detail' => Request()->detail,
                'versi' => Request()->versi,
                'status' => Request()->status,
            ];
            $this->CreateModel->editData($id, $data);  
        }
            return redirect()->route('createbug')->with('message','bug has been update');
    }

    public function delete($id){

        $view = $this->CreateModel->detailData($id);
        if($view->foto <> ""){
            unlink(public_path('foto') . '/' . $view->foto);
        }

        $this->CreateModel->deleteData($id);
        return redirect()->route('createbug')->with('message','bug has been delete');

        $this->CreateModel->deleteData($id);
        return redirect()->route('createbug')->with('message','bug has been delete');
    }
}
