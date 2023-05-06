<?php

use App\Http\Controllers\AdminPrescription;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\StaffController;
use App\Models\Department;
use App\Models\Period;
use App\Models\Staff;
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
Route::get('/',[HomeController::class,'list']);
Route::get('doctor/{id}',[HomeController::class,'doctorlist']);
Route::get('appointment/{id}',[HomeController::class,'createappointment']);
Route::post('appointment/store',[HomeController::class,'storeappointment']);
Route::get('periodByDate', [HomeController::class, 'periodByDate'])->name('periodByDate');


Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::get('mypatient',[DoctorController::class,'mypatient']);
Route::get('appointment',[AppointmentController::class,'list']);
Route::get('adminpatient',[PatientController::class,'list']);
Route::get('AdminPrescription',[AdminPrescription::class,'list']);
Route::get('viewprescription/{id}',[AdminPrescription::class,'viewprescription']);

Route::group(['prefix' => 'prescription'],function() {
    Route::get('/',[PrescriptionController::class,'listprescription']);
    Route::get('createPrescription/{id}',[PrescriptionController::class,'createPrescription']);
    Route::post('storePrescription',[PrescriptionController::class,'storePrescription']);

});



Route::group(['prefix' => 'department'],function() {
    Route::get('/',[DepartmentController::class,'list']);
    Route::get('create',[DepartmentController::class,'create']);
    Route::post('store',[DepartmentController::class,'store']);
    Route::get('delete/{id}',[DepartmentController::class,'delete']);
    Route::get('update/{id}',[DepartmentController::class,'update']);
    Route::post('edit/{id}',[DepartmentController::class,'edit']);
});
Route::group(['prefix'=>'shift'],function(){
    Route::get('/',[ShiftController::class,'list']);
    Route::get('create',[ShiftController::class,'create']);
    Route::post('store',[ShiftController::class,'store']);
    Route::get('delete/{id}',[ShiftController::class,'delete']);
    Route::get('update/{id}',[ShiftController::class,'update']);
    Route::post('edit/{id}',[ShiftController::class,'edit']);

});
Route::group(['prefix'=>'period'],function(){
    Route::get('/',[PeriodController::class,'list']);
    Route::get('create',[PeriodController::class,'create']);
    Route::post('store',[PeriodController::class,'store']);
    Route::get('delete/{id}',[PeriodController::class,'delete']);
    Route::get('update/{id}',[PeriodController::class,'update']);
    Route::post('edit/{id}',[PeriodController::class,'edit']);
});
Route::group(['prefix'=>'staff'],function(){

    Route::get('/',[StaffController::class,'list']);
    Route::get('create',[StaffController::class,'create']);
    Route::post('store',[StaffController::class,'store']);
    Route::get('delete/{id}',[StaffController::class,'delete']);
    Route::get('update/{id}',[StaffController::class,'update']);
    Route::post('edit/{id}',[StaffController::class,'edit']);
});
