<?php

use App\Http\Controllers\Admin\AdminSetController;
use App\Http\Controllers\Admin\AdminVistorsController;
use App\Http\Controllers\Admin\AgentController as AdminAgentController;
use App\Http\Controllers\Admin\ManagerController as AdminManagerController;
use App\Http\Controllers\Agent\AgentSetController;
use App\Http\Controllers\Agent\VistorsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Manager\AgentController;
use App\Http\Controllers\Manager\ManagerSetController;
use App\Http\Controllers\Manager\VistorsController as ManagerVistorsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\Frontend\ExporterController;
use App\Http\Controllers\Frontend\ImporterController;


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

/*------------------------------------------
--------------------------------------------
All Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('hash',function() {
    return bcrypt('12345678');
});

//Route::get('/', function () {
//
//    return view('auth.login');
//});

Route::get('/', [FrontEndController::class,'index'])->name('frontend.home');
Route::get('/extract', [FrontEndController::class,'extract'])->name('frontend.extract');
Route::get('/export', [FrontEndController::class,'export'])->name('frontend.export');
Route::get('/import', [FrontEndController::class,'import'])->name('frontend.import');
Route::get('/shippingCompany', [FrontEndController::class,'shippingCompany'])->name('frontend.shipping.company');
Route::get('/insuranceCompany', [FrontEndController::class,'insuranceCompany'])->name('frontend.insurance.company');


// Form Submission.............
#exporter From
Route::post('exporter/store',[ExporterController::class,'store'])->name('exporter.store');
Route::post('importer/store',[ImporterController::class,'store'])->name('importer.store');

// Form Submission.............


Route::get('admin/auth/login', function () {
    return view('auth.login');
})->middleware('guest');


Auth::routes();


/*------------------------------------------
--------------------------------------------
All admin Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth'])->group(function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');

        /* manager control moduls*/
        Route::get('Manager/index', [AdminManagerController::class, 'index'])->name('admin.manager.index');
        Route::get('Manager/add', [AdminManagerController::class, 'create'])->name('admin.manager.create');
        Route::post('Manager/store', [AdminManagerController::class, 'store'])->name('admin.manager.store');
        Route::get('Manager/{id}/stop', [AdminManagerController::class, 'stopManager'])->name('admin.manager.delete');
        Route::get('Manager/{id}/active', [AdminManagerController::class, 'activeManager'])->name('admin.manager.active');
        Route::get('Manager/delete/{id}', [AdminManagerController::class, 'destory'])->name('admin.manager.destory');

        /* agent control moduls*/
        Route::get('agent/index', [AdminAgentController::class, 'index'])->name('admin.agent.index');
        Route::get('agent/add', [AdminAgentController::class, 'create'])->name('admin.agent.create');
        Route::post('agent/store', [AdminAgentController::class, 'store'])->name('admin.agent.store');
        Route::get('agent/{id}/stop', [AdminAgentController::class, 'stopAgent'])->name('admin.agent.delete');
        Route::get('agent/{id}/active', [AdminAgentController::class, 'activeAgent'])->name('admin.agent.active');
        Route::get('agent/delete/{id}', [AdminAgentController::class, 'destory'])->name('admin.agent.destory');

        /* vistiros */
        Route::get('visitors/{type}', [AdminVistorsController::class, 'index'])->name('admin.vistor.index');
        Route::get('visitors/destory/{id}', [AdminVistorsController::class, 'destory'])->name('admin.vistor.destory');
        Route::get('visitors/export/{type}', [AdminVistorsController::class, 'exportExcel'])->name('admin.vistor.export');
        Route::post('visitors/deleteAll', [AdminVistorsController::class, 'destoryAll'])->name('admin.vistors.destoryAll');

        /* setting control */
        Route::get('setting/profile', [AdminSetController::class, 'profile'])->name('admin.profile.index');
        Route::post('setting/profile/update', [AdminSetController::class, 'profileupdate'])->name('admin.profile.update');
    });
});

/*------------------------------------------
--------------------------------------------
All Agent Users Routes List
--------------------------------------------
--------------------------------------------*/



Route::middleware(['auth:agent', 'user-role'])->group(function () {
    Route::get('Agent/dashboard', [HomeController::class, 'agentHome'])->name('Agent.dashboard');
    Route::get('visitors', [VistorsController::class, 'index'])->name('vistor.index');

    Route::get('visitors/create', [VistorsController::class, 'create'])->name('vistor.create');


    Route::post('visitors/store', [VistorsController::class, 'store'])->name('vistor.store');
    /* setting control */
    Route::get('setting/profile', [AgentSetController::class, 'profile'])->name('profile.index');
    Route::post('setting/profile/update', [AgentSetController::class, 'profileupdate'])->name('profile.update');
});

/*------------------------------------------
--------------------------------------------
All manager Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::middleware(['auth:manager', 'user-role'])->group(function () {
    Route::group(['prefix' => 'manager'], function () {
        Route::get('dashboard', [HomeController::class, 'managerHome'])->name('manager.dashboard');
        /* agent control moduls */
        Route::get('agent/index', [AgentController::class, 'index'])->name('manager.agent.index');
        Route::get('agent/add', [AgentController::class, 'create'])->name('manager.agent.create');
        Route::post('agent/store', [AgentController::class, 'store'])->name('manager.agent.store');

        /* vistiros */
        Route::get('visitors/{type}', [ManagerVistorsController::class, 'index'])->name('manager.vistor.index');
        Route::get('visitors/export/{type}', [ManagerVistorsController::class, 'exportExcel'])->name('manager.vistor.export');
        Route::get('visitors/destory/{id}', [ManagerVistorsController::class, 'destory'])->name('manager.vistor.destory');
        Route::post('visitors/deleteAll', [ManagerVistorsController::class, 'deleteAll'])->name('manager.vistor.deleteAll');


        /* myvistiros */
        Route::get('myvisitor/create', [ManagerVistorsController::class, 'create'])->name('manager.myvisitor.create');
        Route::post('myvisitor/store', [ManagerVistorsController::class, 'store'])->name('manager.myvisitor.store');

        /* setting control */
        Route::get('setting/profile', [ManagerSetController::class, 'profile'])->name('manager.profile.index');
        Route::post('setting/profile/update', [ManagerSetController::class, 'profileupdate'])->name('manager.profile.update');
    });
});
