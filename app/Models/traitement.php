<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class traitement extends Model
{
    use HasFactory;
    
    protected $guarded=[];


    public function chirurgie():BelongsTo
    {
        return $this->belongsTo(chirurgie::class, "chirurgie_id", "id");
    }

    public function Examen_biologie():BelongsTo
    {
        return $this->belongsTo(Examen_Biologie::class, "examen_biologie_id", "id");
    }
     
    public function examen_radiologie():BelongsTo
    {
        return $this->belongsTo(examen_radiologie::class, "examen_radiologie_id", "id");
    }

    public function hospitalisation():BelongsTo
    {
        return $this->belongsTo(hospitalisation::class, "hospitalisation_id", "id");
    }

    public function hopital():BelongsTo
    {
        return $this->belongsTo(hopital::class, "hopital_id","id");
    }
}
