<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CreateModel extends Model
{
    public function allData()
    {
       return DB::table('tbl_view')->get();
    }
    
    public function detailData($id)
    {
       return DB::table('tbl_view')->where('id', $id)->first();
    }

    public function addData($data)
    {
       DB::table('tbl_view')->insert($data);
    }
 
    public function editData($id, $data)
    {
       DB::table('tbl_view')->where('id', $id)->update($data);
    }

    public function deleteData($id)
    {
       DB::table('tbl_view')->where('id', $id)->delete();
    }

    public function deleteData($id)
    {
       DB::table('tbl_view')->where('id', $id)->delete();
    }
}
