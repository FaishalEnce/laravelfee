<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produksi extends Model
{
    use HasFactory;

    protected $table ='produksi';
    protected $fillable =['tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
