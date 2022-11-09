<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PasswordResets extends Authenticatable
{
    use HasFactory;
    protected $table="password_resets";
    protected $fillable=["id","email","token","created_at","updated_at"];
    public function user(): BelongsTo
    {
        $this->only([
            "id","name","email","password","remember_token","created_at","updated_at"
        ]);
        return $this->belongsTo(User::class);
    }
}
