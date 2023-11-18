<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class hopital extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function traitements():HasMany
    {
        return $this->HasMany(traitement::class);
    }

    public function service():BelongsTo
    {
        return $this->belongsTo(service::class,'service_id','id');
    }
}
