<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    //
    protected $table = 'portofolio';
    protected $fillable = [
        'nama',
        'foto',
        'keterangan',
        ];
}
