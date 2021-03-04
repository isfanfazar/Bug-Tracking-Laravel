<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ViewBugModel extends Model
{
   public function allData()
   {
      return DB::table('tbl_view')->get();
   }
}
