<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //One To Many
    public function policlinics() {
        return $this->hasMany(Policlinic::class);
    }
}
