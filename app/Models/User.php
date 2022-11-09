<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;

    protected $table="users";

    protected $fillable=[
        "id","name","email","sh_status","sh_token","sh_id","is_admin",
        "is_deleted","prf_path","Status","P_type","Proxy","IPs_path","password",
        "remember_token","created_at","updated_at"
    ];


    public function PasswordResets(): BelongsTo
    {
        return $this->belongsTo(PasswordResets::class);
    }

    public function Paired(): HasMany
    {
        return $this->hasMany(Paired::class);
    }


    public function isDeleted(): bool
    {
        return boolval($this['is_deleted']);
    }
    public function isAdmin(): bool
    {
        return boolval($this['is_admin']);
    }



}
