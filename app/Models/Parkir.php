<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parkir extends Model
{
    protected $fillable = [
        'plat_no', 'j_kend', 'image', 'biaya'
    ];

    protected $table = 'parkir';

    // public function allData(){
    //     return DB::table('parkir')->get();
    // }

    // public function detData($id){
    //     return DB::table('parkir')->where('id', $id)->first();
    // }

    // public function addData($data){
    //     DB::table('parkir')->insert($data);
    // }
}
