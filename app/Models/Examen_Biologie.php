<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Examen_Biologie extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    
    public function examen_biologies():HasMany
    {
        return $this->hasMany(examen_biologie::class);
    }

}
