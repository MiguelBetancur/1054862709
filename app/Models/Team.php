<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Competition;
use Illuminate\Database\Eloquent\SoftDeletes;


class Team extends Model
{
    use HasFactory, SoftDeletes;

    public function competition(){
        return $this->belongsTo(Competition::class);
    }
}


