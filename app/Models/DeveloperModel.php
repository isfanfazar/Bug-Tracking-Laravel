<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DeveloperModel extends Model
{
    public function allData()
    {
       return DB::table('tbl_developer')
            ->leftJoin('tbl_view','tbl_view.id', '=', 'tbl_developer.id_developer')->get();
    }
}
