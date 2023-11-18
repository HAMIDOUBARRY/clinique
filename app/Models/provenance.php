<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class provenance extends Model
{
    use HasFactory;
    public function patients()
    {
        return $this->hasMany(patient::class);
    }
}
