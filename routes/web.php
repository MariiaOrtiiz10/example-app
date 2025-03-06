<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

//Se puede devolver página
Route::get('/', function () {
    return view('home',[
        'one'=> '1', //varaible llamada $1,
        'name' => 'Maria',
    ]);
});
Route::get('/jobs', function () {
    return view('jobs',[
        'jobs' => Job::allJobs()
       
    ]);
});
Route::get('/jobs/{ID}', function ($ID) {
      $job =  Job::findJobById($ID);    
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