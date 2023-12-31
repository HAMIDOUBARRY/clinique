<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class chambre extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function hospitalisations():BelongsToMany
    {
        return $this->belongsToMany(hospitalisation::class)->withPivot('date_attrib', 'date_liberation');
    }
}
