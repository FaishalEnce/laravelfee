<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produktifitas_perkebunan extends Model
{
    use HasFactory;

    protected $table ='produktivitas_perkebunan';
    protected $fillable =['tahun','kecamatan_id','tanaman_perkebunan_id','nilai'];
}
