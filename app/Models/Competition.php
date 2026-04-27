<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Team;
use Illuminate\Database\Eloquent\Country;
use Illuminate\Database\Eloquent\SoftDeletes;

class Competition extends Model
{
    use HasFactory, SoftDeletes;

    public function teams(){
        return $this->hasMany(Team::class);
    }

    public function country(){
        return $this->belongsTo(Country::class);
    }
}


