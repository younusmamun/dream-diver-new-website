<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectsinglepageController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\TickethistoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified','role:admin'])->name('admin.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/adminlte', function () {
    return view('adminlte');
});

Route::group(['middleware' => ['auth', 'verified', 'role:admin']], function () {
    Route::get('/home_service_index', [HomeServiceController::class, 'index'])->name('home_service_index');
    Route::get('/home_service_create', [HomeServiceController::class, 'create'])->name('home_service_create');
    Route::post('/home_service_store', [HomeServiceController::class, 'store'])->name('home_service_store');
    Route::get('/home_service_edit/{id}', [HomeServiceController::class, 'edit'])->name('home_service_edit');
    Route::put('/home_service_update/{id}', [HomeServiceController::class, 'update'])->name('home_service_update');
    Route::put('/home_service_destroy/{id}', [HomeServiceController::class, 'destroy'])->name('home_service_destroy');

    Route::resource('projectsingle', ProjectsinglepageController::class);
    Route::get('/projectsingle_edit/{id}', [ProjectsinglepageController::class, 'edit'])->name('projectsingle_edit');
    Route::put('/projectsingle_update/{id}', [ProjectsinglepageController::class, 'update'])->name('projectsingle_update');
    Route::put('/projectsingle_destroy/{id}', [ProjectsinglepageController::class, 'destroy'])->name('projectsingle_destroy');


    Route::resource('projects', ProjectController::class);


    Route::resource('faqs', FaqController::class);

    // Route::resource('tickets', TicketController::class);
    // Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');

});

Route::resource('tickets', TicketController::class);
Route::post('/tickethistory_store', [TickethistoryController::class, 'store'])->name('tickethistory_store');




// Route::resource('projects', ProjectController::class);
// Route::resource('projectsingle', ProjectsinglepageController::class);
// Route::get('/projectsingle_edit/{id}', [ProjectsinglepageController::class, 'edit'])->name('projectsingle_edit');
// Route::get('/projectsingle_update/{id}', [ProjectsinglepageController::class, 'update'])->name('projectsingle_update');
// Route::put('/projectsingle_destroy/{id}', [ProjectsinglepageController::class, 'destroy'])->name('projectsingle_destroy');

// Route::resource('faqs', FaqController::class);



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
