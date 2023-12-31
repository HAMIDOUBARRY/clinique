<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class role extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function users():BelongsToMany
    {
        return $this->belongsToMany(User::class,"user_role", "role_id", "user_id");
    }
    public function permissions():BelongsToMany
    {
        return $this->belongsToMany(permission::class,"role_permission", "role_id", "permission_id");
    }
}
