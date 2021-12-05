<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public const USER_ROLE_ID = 1;
    public const ADMIN_ROLE_ID = 2;

    protected $table = 'roles';

    protected $fillable = [
        'role',
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany {
        return $this->belongsToMany(User::class)->using(UserRole::class);
    }
}
