<?php

use App\Models\Trabajo;
use Illuminate\Support\Facades\Route;


//Se puede devolver página
Route::get('/', function () {
     return view('home',[
        'one'=> '1', //varaible llamada $1,
        'name' => 'Maria',
     ]);
});
//SOBREECRAGA LA MEMORIA RAM CON MUCHAS CONSULTAS SELEECT * DORM .. WHERE ID = ...; segun los id de employer que haya una consulta
// Route::get('/jobs', function () {
//     $jobs = Trabajo::all();
//     return view('jobs',[
//         'jobs' => $jobs
//     ]);
// });

//Solo dos consultas.
//select * from job_listing
//slect * from employer where employers.id in (1,2,, ...ids)
Route::get('/jobs', function () {
    $jobs = Trabajo::with('employer')->get();
    return view('jobs',[
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($ID) {
      $job =  Trabajo::find($ID);   
      if (!$job) {
        abort(404); // Devuelve un error 404 si el trabajo no existe
    } 
      return view('job',['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
//Se puede devolver cadena
Route::get('/cadena', function () {
    return 'Esto es una cadena';
});

//Se puede devolver array --> Para construir una especie de API
Route::get('/array', function () {
    return ['1' => 'one'];
});