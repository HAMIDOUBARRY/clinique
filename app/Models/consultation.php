<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class consultation extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function patient():BelongsTo
    {
        return $this->belongsTo(patient::class, "patient_id", "id");
    }
    public function medecin():BelongsTo
    {
        return $this->belongsTo(medecin::class, "medecin_id", "id");
    }
    public function typeconsultation():BelongsTo
    {
        return $this->belongsTo(typeconsultation::class, "typeconsultation_id", "id");
    }
}
