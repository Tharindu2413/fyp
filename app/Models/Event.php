<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function evnthsptl()
    {
        return $this->belongsTo(Hospital::class, 'hospital_id', 'id');
    }
}
