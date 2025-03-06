<?php
namespace App\Models;//Para organizar el codigo
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Trabajo extends Model{
   use HasFactory;
   protected $table = "trabajos";
   protected $fillable = ['title','salary'] ;

}
?>