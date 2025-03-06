<?php
namespace App\Models;//Para organizar el codigo
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model; 

class Trabajo extends Model{
   use HasFactory;
   protected $table = "trabajos";
   protected $fillable = ['title','salary'] ;
   //Para acceder a la información del empleado desde Trabajo
   public function employer(){
      //Un trabajo pertenece a un empleado(belongsTo).
      // sin embargo al revés un empleado puede tener varios trabajos(belongsToMany).
      return $this->belongsTo(Employer::class);
   }
}
?>