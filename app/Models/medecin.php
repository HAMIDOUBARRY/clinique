<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class medecin extends User
{
    use HasFactory;
    
    protected $guarded=[];

    public function consultations():HasMany
    {
        return $this->hasMany(consultation::class);
    }
    
    public function prescriptions():HasMany
    {
        return $this->hasMany(prescription::class);
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(service::class, "service_id", "id");
    }

    public function specialite():BelongsTo
    {
        return $this->belongsTo(specialite::class, "specialite_id", "id");
    }
}
