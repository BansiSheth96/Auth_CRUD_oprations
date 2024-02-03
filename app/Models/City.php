<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $fillable = ['cities_name','state_id'];

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
