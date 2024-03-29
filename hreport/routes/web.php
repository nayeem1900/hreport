<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\SubadminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\LogoController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\IbchkConrtoller;
use App\Http\Controllers\Backend\MotijheelController;
use App\Http\Controllers\Backend\EtenderController;
use App\Http\Controllers\Backend\CarrierController;
use App\Http\Controllers\Backend\BranchController;
use App\Http\Controllers\Backend\HospitalformController;
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

Route::get('/',[FrontendController::class,'index'])->name('index');
Route::get('/etender',[FrontendController::class,'etender'])->name('etender');
Route::get('/hospital-info',[FrontendController::class,'hospitalinfo'])->name('hospital-info');
Route::get('/career',[FrontendController::class,'career'])->name('career');
Route::get('/jakat',[FrontendController::class,'jakat'])->name('jakat');
Route::get('/contact',[FrontendController::class,'contact'])->name('contact');

Route::get('/foundation_committee',[FrontendController::class,'foundationcommittee'])->name('foundationcommittee');
Route::get('/at_glance',[FrontendController::class,'atglance'])->name('atglance');
Route::get('/executive_committee',[FrontendController::class,'executivecommittee'])->name('executivecommittee');
Route::get('/health_education_committee',[FrontendController::class,'healtheducationcommittee'])->name('healtheducationcommittee');
Route::get('/audit_committee',[FrontendController::class,'auditcommittee'])->name('auditcommittee');
Route::get('/hospital_committee',[FrontendController::class,'hospitalcommittee'])->name('hospitalcommittee');
Route::get('/community_hospital_board',[FrontendController::class,'communityhospitalboard'])->name('communityhospitalboard');
Route::get('/education_committee',[FrontendController::class,'educationcommittee'])->name('educationcommittee');
Route::get('/community_hospital_committee',[FrontendController::class,'communityhospitalcommittee'])->name('communityhospitalcommittee');
/*Route::get('ibchkdoctor/ajax/{ibchd_id}',[FrontendController::class,'getIbchDoctor'])->name('ajax-doctor');*/
//Bank_Hospital
Route::get('ibch',[FrontendController::class,'ibch'])->name('ibch');
Route::get('ibch-doctor',[FrontendController::class,'ibchDoctor'])->name('ibch.ent-doctor');
Route::get('ibch-cardiology',[FrontendController::class,'ibchCard'])->name('ibch.card-doctor');
Route::get('ibch-gyno',[FrontendController::class,'ibchGyno'])->name('ibch.gyno-doctor');
Route::get('ibch-uro',[FrontendController::class,'ibchUro'])->name('ibch.uro-doctor');
Route::get('ibchchild',[FrontendController::class,'childIbch'])->name('ibch.child-doctor');
Route::get('ibchdep',[FrontendController::class,'ibchDep'])->name('ibch.dep');
//Bank_Hospital Motijheel
Route::get('motijheel-hospital',[FrontendController::class,'motijheel'])->name('motijheel');


/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//admin-dashboard

Route::group(['prefix'=>'admin','middleware'=>['admin','auth','permission']],function () {

    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    //Role Management

    Route::resource('role',RoleController::class);
    Route::resource('permission',PermissionController::class);
    Route::resource('subadmin',SubadminController::class);


});


Route::group(['prefix'=>'logos','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[LogoController::class,'view'])->name('logos.view');
    Route::get('/add',[LogoController::class,'add'])->name('logos.add');
    Route::post('/store',[LogoController::class,'store'])->name('logos.store');
    Route::get('/edit/{id},',[LogoController::class,'edit'])->name('logos.edit');
    Route::post('/update/{id},',[LogoController::class,'update'])->name('logos.update');
    Route::post('/delete/{id},',[LogoController::class,'delete'])->name('logos.delete');



});
Route::group(['prefix'=>'sliders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[SliderController::class,'view'])->name('sliders.view');
    Route::get('/add',[SliderController::class,'add'])->name('sliders.add');
    Route::post('/store',[SliderController::class,'store'])->name('sliders.store');
    Route::get('/edit/{id},',[SliderController::class,'edit'])->name('sliders.edit');
    Route::post('/update/{id},',[SliderController::class,'update'])->name('sliders.update');
    Route::post('/delete/{id},',[SliderController::class,'delete'])->name('sliders.delete');



});
//Etender
Route::group(['prefix'=>'etenders','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[EtenderController::class,'view'])->name('etenders.view');
    Route::get('/add',[EtenderController::class,'add'])->name('etenders.add');
    Route::post('/store',[EtenderController::class,'store'])->name('etenders.store');
    Route::get('/edit/{id},',[EtenderController::class,'edit'])->name('etenders.edit');
    Route::post('/update/{id},',[EtenderController::class,'update'])->name('etenders.update');
    Route::post('/delete/{id},',[EtenderController::class,'delete'])->name('etenders.delete');
    Route::post('/download',[EtenderController::class,'download'])->name('etenders.download');

});

//Hospital Forom Entry
Route::group(['prefix'=>'hospitalform','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[HospitalformController::class,'view'])->name('hospitalform.view');
    Route::get('/add',[HospitalformController::class,'add'])->name('hospitalform.add');
    Route::post('/store',[HospitalformController::class,'store'])->name('hospitalform.store');
    Route::get('/edit/{id},',[HospitalformController::class,'edit'])->name('hospitalformedit');
    Route::post('/update/{id},',[HospitalformController::class,'update'])->name('hospitalform.update');
    Route::post('/delete/{id},',[HospitalformController::class,'delete'])->name('hospitalform.delete');
    Route::post('/download',[HospitalformController::class,'download'])->name('hospitalform.download');

});
//Branch
Route::group(['prefix'=>'branches','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[BranchController::class,'view'])->name('branches.view');
    Route::get('/add',[BranchController::class,'add'])->name('branches.add');
    Route::post('/store',[BranchController::class,'store'])->name('branches.store');
    Route::get('/edit/{id},',[BranchController::class,'edit'])->name('branches.edit');
    Route::post('/update/{id},',[BranchController::class,'update'])->name('branches.update');
    Route::post('/delete/{id},',[BranchController::class,'delete'])->name('branches.delete');
    Route::post('/download',[BranchController::class,'download'])->name('branches.download');



});

//Carrier
Route::group(['prefix'=>'carriers','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[CarrierController::class,'view'])->name('carriers.view');
    Route::get('/add',[CarrierController::class,'add'])->name('carriers.add');
    Route::post('/store',[CarrierController::class,'store'])->name('carriers.store');
    Route::get('/edit/{id},',[CarrierController::class,'edit'])->name('carriers.edit');
    Route::post('/update/{id},',[CarrierController::class,'update'])->name('carriers.update');
    Route::post('/delete/{id},',[CarrierController::class,'delete'])->name('carriers.delete');
    Route::post('/download',[CarrierController::class,'download'])->name('carriers.download');



});

// IBCHK
Route::group(['prefix'=>'ibchkdep','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[IbchkConrtoller::class,'view'])->name('ibchk.dept.view');
    Route::get('/add',[IbchkConrtoller::class,'add'])->name('ibchk.dept.add');
    Route::post('/store',[IbchkConrtoller::class,'store'])->name('ibchk.dept.store');
    Route::get('/edit/{id}',[IbchkConrtoller::class,'edit'])->name('ibchk.dept.edit');
    Route::post('/update/{id}',[IbchkConrtoller::class,'update'])->name('ibchk.dept.update');
    Route::post('/delete/{id}',[IbchkConrtoller::class,'delete'])->name('ibchk.dept.delete');

    Route::get('/ibchkdoctor/view',[IbchkConrtoller::class,'ibchkdoctorview'])->name('ibchk.doctor.view');
    Route::get('/ibchkdoctor/add',[IbchkConrtoller::class,'ibchkdoctoradd'])->name('ibchk.doctor.add');
    Route::post('/ibchkdoctor/store',[IbchkConrtoller::class,'ibchkdoctorstore'])->name('ibchk.doctor.store');
    Route::get('/ibchkdoctor/edit/{id}',[IbchkConrtoller::class,'ibchkdoctoredit'])->name('ibchk.doctor.edit');
    Route::post('/ibchkdoctor/update/{id}',[IbchkConrtoller::class,'ibchkdoctorupdate'])->name('ibchk.doctor.update');
    Route::post('/ibchkdoctor/delete/{id}',[IbchkConrtoller::class,'ibchkdoctordelete'])->name('ibchk.doctor.delete');
    Route::get('ibchkdoctor/ajax/',[IbchkConrtoller::class,'getIbchDoctor'])->name('ajax-doctor');
});

/*<!!!!!-----Islami Bank Hospital Motijheel!!!!!!!!------>*/
Route::group(['prefix'=>'motijheeldep','middleware'=>['admin','auth','permission']],function () {

    Route::get('/view',[MotijheelController::class,'view'])->name('motijheel.dept.view');
    Route::get('/add',[MotijheelController::class,'add'])->name('motijheel.dept.add');
    Route::post('/store',[MotijheelController::class,'store'])->name('motijheel.dept.store');
    Route::get('/edit/{id}',[MotijheelController::class,'edit'])->name('motijheel.dept.edit');
    Route::post('/update/{id}',[MotijheelController::class,'update'])->name('motijheel.dept.update');
    Route::post('/delete/{id}',[MotijheelController::class,'delete'])->name('motijheel.dept.delete');


});




/*Route::group(['middleware'=>'admin','auth'],function () {
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');

    });

});*/

//User-Dashboard

/*Route::group(['middleware'=>'user','auth'],function () {
    Route::prefix('user')->group(function () {

        Route::get('/dashboard', 'UserController@index')->name('user.dashboard');

    });

});*/

Route::group(['prefix'=>'user','middleware'=>['user','auth']],function () {

  Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');
});
/*Route::group(['prefix'=>'user','middleware'=>['admin','auth','permission','user']],function () {

    Route::get('/dashboard',[UserController::class,'index'])->name('user.dashboard');

});*/