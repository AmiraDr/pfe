<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintenance extends Model
{
  
    use HasFactory;

    public $timestamps = false;

    public function categorie()
    {
        return $this->belongsTo(\App\Models\Categorie::class);
    }
}
