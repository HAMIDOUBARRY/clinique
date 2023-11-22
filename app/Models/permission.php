<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class permission extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class,"user_permission", "permission_id", "user_id");
    }
    public function roles():BelongsToMany
    {
        return $this->belongsToMany(role::class,"role_permission", "permission_id", "role_id");
    }
}
