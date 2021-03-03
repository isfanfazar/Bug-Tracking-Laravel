<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class CreateModel extends Model
{
   public function allData()
   {
      return [
           [
               'judul'=>'Aplikasi force close',
               'detail'=>'buka aplikasi dan akan force close setelah 3 detik',
               'versi'=>'0.1',
               'level'=>'high'
           ],
           [
                'judul'=>'Loading lama',
                'detail'=>'buka aplikasi dan akan loading selama 1 menit',
                'versi'=>'0.2',
                'level'=>'medium'
            ],
            [
                'judul'=>'ganti font',
                'detail'=>'ganti font ke calibri',
                'versi'=>'0.3',
                'level'=>'low'
            ]
           ];
   }
}
