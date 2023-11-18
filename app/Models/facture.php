<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class facture extends Model
{
    use HasFactory;
     
    protected $guarded=[];

    public function patient():BelongsTo
    {
        return $this->belongsTo(patient::class, "patient_id", "id");
    }
    public function user():BelongsTo
    {
        return $this->belongsTo(user::class, "user_id", "id");
    }
}
