<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\tickets;
use App\Models\events;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RelController;

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
    return view('welcome');
});
// Route::get('/login', function () {
//     return view('admin.login');
// });
Route::get('/login', function () {
    return view('admin.login');
});
Route::get('/relatorio', [RelController::class, 'index']);

// -----------------------------------------------------------------------------------------------------------

Route::get('/entradas', [TicketsController::class, 'index']);
Route::get('/entradas/excluir-entrada/{id}', function ($id) {
    $ticket = Tickets::findOrFail($id);
    $ticket->delete();
    return redirect('/entradas');
});

// -----------------------------------------------------------------------------------------------------------

Route::get('/eventos', function () {
    return view('events.eventos');
});

Route::get('/eventos', [EventsController::class, 'index']);

Route::get('/eventos/registrar', [EventsController::class, 'create']);

Route::post('/eventos/registrar-evento', [EventsController::class, 'store']);

Route::get('/eventos/editar-evento/{id}', function ($id) {
    $event = Events::findOrFail($id);
    $usuarios = Users::all()->sortBy('name');
    return view('events.update', ['event' => $event], ['usuarios' => $usuarios]);
});
Route::put('/eventos/editar-evento/{id}', function (Request $req, $id) {
    $event = Events::findOrFail($id);
    $event->eventname = $req->events_eventname;
    $event->eventdescription = $req->events_eventdescription;
    $event->date = $req->events_date;
    $event->time = $req->events_time;
    $event->user_id = $req->events_user_id;
    $event->save();
    return redirect('/eventos');
});
Route::get('/eventos/excluir-evento/{id}', function ($id) {
    $event = Events::findOrFail($id);
    $event->delete();
    return redirect('/eventos');
});

// -----------------------------------------------------------------------------------------------------------

Route::get('/usuarios', [UsersController::class, 'index']);

Route::get('/usuarios/cadastrar', function () {
    return view('users.create');
});
Route::post('/usuarios/cadastrar-usuario', function (Request $req) {
    Users::create([
        'name' => $req->user_name,
        'email' => $req->user_email,
        'phone' => $req->user_phone,
        'cpf' => $req->user_cpf,
        'age' => $req->user_age
    ]);
    return redirect('/usuarios');
});
Route::get('/usuarios/atualizar-usuario/{id}', function ($id) {
    $user = Users::findOrFail($id);
    return view('users.update', ['user' => $user]);
});
Route::put('/usuarios/atualizar-usuario/{id}', function (Request $req, $id) {
    $user = Users::findOrFail($id);
    $user->name = $req->user_name;
    $user->email = $req->user_email;
    $user->phone = $req->user_phone;
    $user->cpf = $req->user_cpf;
    $user->age = $req->user_age;
    $user->save();
    return redirect('/usuarios');
});
Route::get('/usuarios/excluir-usuario/{id}', function ($id) {
    $user = Users::findOrFail($id);
    $user->delete();
    return redirect('/usuarios');
});