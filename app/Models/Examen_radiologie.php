<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Examen_radiologie extends Model
{
    use HasFactory;
    
    protected $guarded=[];
    
    public function Examen_radiologies():HasMany
    {
        return $this->hasMany(Examen_radiologie::class);
    }
}
