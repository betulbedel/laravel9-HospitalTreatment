<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Policlinic extends Model
{
    use HasFactory;
    //Many To One //
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function appointments() {

        return $this->hasMany(Appointment::class);
    }

}
