<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ad extends Model
{

    use HasFactory;

    protected $table="ad";

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function cat(): BelongsTo
    {
        return $this->belongsTo(Cats::class);
    }

    public function average(): BelongsTo
    {
        return $this->belongsTo(Average::class);
    }

    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }



}
