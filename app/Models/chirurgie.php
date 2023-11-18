<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class chirurgie extends Model
{
    use HasFactory;
     
    protected $guarded=[];
    
    public function chirurgies():HasMany
    {
        return $this->hasMany(chirurgie::class);
    }
}
