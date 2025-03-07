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
      return $this->belongsTo(Employer::class);
   }
   public function tags(){
       // Muchos trabajos pueden pertenecer a muchas etiquetas (belongsToMany)
        // Especificamos el nombre de la tabla intermedia como 'job_tag'
      return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
   }
   //En este código, el segundo argumento de belongsToMany es el nombre de la tabla intermedia (job_tag), y los siguientes argumentos son las claves foráneas que se utilizan en la tabla intermedia (job_listing_id y tag_id).
}
?>