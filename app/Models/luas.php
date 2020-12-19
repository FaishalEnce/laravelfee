<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class luas extends Model
{
    use HasFactory;
    
    protected $table ='luas';
    protected $fillable =['tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
