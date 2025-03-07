<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;

    //PARA ACCEDER A INFORMACIÓN DESDE TAG
    public function jobs(){
        //Una etiqueta puede terner varios trabajos
        return $this->belongsToMany(Trabajo::class, 'job_tag', 'tag_id', 'job_listing_id');
    }
}
