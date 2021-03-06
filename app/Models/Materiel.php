<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    public function categorie()
    {
        return $this->belongsTo(\App\Models\Categorie::class, 'materiel_id'); 
    }
}
