<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class patient extends User
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

    public function rendezvouses():HasMany
    {
        return $this->hasMany(rendezvous::class);
    }

    public function hospitalisations():HasMany
    {
        return $this->hasMany(hospitalisation::class);
    }
       
    public function factures():HasMany
    {
        return $this->hasMany(facture::class);
    }

    public function provenance():BelongsTo
    {
           return $this->belongsTo(provenance::class, "provenance_id", "id");
     }
     public function user()
     {
        return $this->belongsTo(User::class);
     }

}
