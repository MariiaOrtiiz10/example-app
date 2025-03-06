<?php
namespace App\Models;//Para organizar el codigo
use Illuminate\Support\Arr;  
class Job1{
    public static function allJobs(){
        return  
        [
           [
               'ID'=> 1,
               'title' => 'Desarrollador de software',
               'salary'=> '41.000 € anuales',
           ],
           [
               'ID'=> 2,
               'title' => 'Abogado',
               'salary'=> '45.000 € anuales',
           ],
           [
               'ID'=> 3,
               'title' => 'Enfermero',
               'salary'=> '30.000 € anuales',
           ]
       ];
   
    }
    //Se usa self, ya que allJobs es un método estático.
    public static function findJobById(int $ID){
        $job =  Arr::first(self::allJobs(),fn($job) => $job['ID']==$ID);
        if($job){
            return $job;
        }
        abort(404);
    }

}

?>