<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class service extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function medecins():HasMany
    {
        return $this->hasMany(medecin::class);
    }
    public function services():HasMany
    {
        return $this->hasMany(service::class);
    }
}
