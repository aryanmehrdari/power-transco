<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class City extends Model
{

    use HasFactory;
    protected $table="city";

    public function ad(): HasMany
    {
        return $this->hasMany(Ad::class);
    }


}
