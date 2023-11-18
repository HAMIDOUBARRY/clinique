<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class hospitalisation extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function patient():BelongsTo
    {
        return $this->belongsTo(patient::class, "patient_id", "id");
    }

    public function traitements():HasMany
    {
        return $this->hasMany(traitement::class);
    }

    public function chambres():BelongsToMany
    {
        return $this->belongsToMany(chambre::class, "chambre_hospitalisation", "hospitalisation_id", "chambre_id");
    }
}
