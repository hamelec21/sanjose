<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

/*
|--------------------------------------------------------------------------
| Rutas del panel Administrativo
|--------------------------------------------------------------------------
*/


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    //carga de arvivos
Route::get('/panel/normativas/show-archivo',\App\Http\Livewire\Panel\Normativas\ShowArchivo::class)->name('show-archivo');
Route::get('/panel/normativas/crear-archivo',\App\Http\Livewire\Panel\Normativas\CrearArchivo::class)->name('crear-archivo');
Route::get('/panel/normativas/editar-archivo/{id}',\App\Http\Livewire\Panel\Normativas\EditarArchivo::class)->name('editar-archivo');
 //mostrar todas las noticias
Route::get('/panel/noticia/show-noticia',\App\Http\Livewire\Panel\Noticia\ShowNoticia::class)->name('show-noticia');
//crear
Route::get('/panel/noticia/crear-noticia',\App\Http\Livewire\Panel\Noticia\CrearNoticia::class)->name('crear-noticia');
//editar noticia
Route::get('/panel/noticia/editar-noticia/{new}',\App\Http\Livewire\Panel\Noticia\EditarNoticia::class)->name('editar-noticia');

//mostrar comunicados
Route::get('/panel/comunicado/show-comunicado',\App\Http\Livewire\Panel\Comunicado\ShowComunicado::class)->name('show-comunicado');
//crer comunicado
Route::get('/panel/comunicado/crear-comunicado',\App\Http\Livewire\Panel\Comunicado\CrearComunicado::class)->name('crear-comunicado');
//editar comunicado
Route::get('/panel/noticia/editar-comunicado/{comunico}',\App\Http\Livewire\Panel\Comunicado\EditarComunicado::class)->name('editar-comunicado');

});
/*
|--------------------------------------------------------------------------
| Rutas Publicas
|--------------------------------------------------------------------------
*/

Route::get('/colegio', function () {
    return view('colegio');
});

//rutas de noticias
Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/front/show-noticias',\App\Http\Livewire\Front\ShowNoticias::class)->name('show-noticias');

Route::get('/front/show-articulo-noticia/{id}',\App\Http\Livewire\Front\ShowArticuloNoticia::class)->name('show-articulo-noticia');

//rutas de academias

Route::get('/teatro', function () {
    return view('teatro');
});

Route::get('/musica', function () {
    return view('musica');
});

Route::get('/folclore', function () {
    return view('folclore');
});

Route::get('/danza', function () {
    return view('danza');
});


Route::get('/gimnasia_ritmica', function () {
    return view('gimnasia_ritmica');
});

Route::get('/futsal', function () {
    return view('futsal');
});

Route::get('/futbol', function () {
    return view('futbol');
});

Route::get('/volleybol', function () {
    return view('volleybol');
});

//rutas de Comunidad

Route::get('/utp', function () {
    return view('utp');
});

Route::get('/convivencia_escolar', function () {
    return view('convivencia_escolar');
});

Route::get('/inspectoria', function () {
    return view('inspectoria');
});

Route::get('/inclusion', function () {
    return view('inclusion');
});

Route::get('/pastoral', function () {
    return view('pastoral');
});

//rutas de departamentos

Route::get('/lenguaje', function () {
    return view('lenguaje');
});

Route::get('/matematicas', function () {
    return view('matematicas');
});

Route::get('/ciencias_naturales', function () {
    return view('ciencias_naturales');
});

Route::get('/historia_y_geografia', function () {
    return view('historia_y_geografia');
});

Route::get('/artes_y_tecnologia', function () {
    return view('artes_y_tecnologia');
});

Route::get('/educacion_fisica', function () {
    return view('educacion_fisica');
});


//rutas de Talleres

Route::get('/taller_matematicas', function () {
    return view('taller_matematicas');
});

Route::get('/taller_deportes', function () {
    return view('taller_deportes');
});

Route::get('/taller_ingles', function () {
    return view('taller_ingles');
});

//rutas del centro de alumnos

Route::get('/centro_de_alumnos', function () {
    return view('centro_de_alumnos');
});

Route::get('/actividad', function () {
    return view('actividad');
});


//rutas personal establecimiento

Route::get('/equipo_de_gestion', function () {
    return view('equipo_de_gestion');
});

Route::get('/profesores', function () {
    return view('profesores');
});

Route::get('/asistentes_profesionales', function () {
    return view('asistentes_profesionales');
});

Route::get('/asistentes_de_aulas', function () {
    return view('asistentes_de_aulas');
});

Route::get('/inspectores', function () {
    return view('inspectores');
});

Route::get('/personal_administrativo', function () {
    return view('personal_administrativo');
});

Route::get('/educadora_de_parvulo', function () {
    return view('educadora_de_parvulo');
});

Route::get('/personal_de_servicio', function () {
    return view('personal_de_servicio');
});

//rutas centro descargas de normativas  y utiles escolares

Route::get('/normativas', function () {
    return view('normativas');
});




