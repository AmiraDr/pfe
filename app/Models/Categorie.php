<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

     public $timestamps = false;
     
    public function materiels()
    
    {
        return $this->hasMany('\App\Models/Materiel', 'categorie_id');
    }
}
