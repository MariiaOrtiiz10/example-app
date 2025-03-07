<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    public function jobs(){
        //un empleado puede tener varios trabajos(hasMany).
        return $this->hasMany(Trabajo::class);
     }
}
