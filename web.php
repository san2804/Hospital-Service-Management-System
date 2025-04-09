<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\MedicalRecordController;
use App\Http\Controllers\InsuranceClaimController;
use App\Http\Controllers\InsuranceAgentController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Display the form to schedule an appointment
Route::get('/appointments/create', [AppointmentController::class, 'create'])->name('appointments.create');

// Handle the form submission to store an appointment
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/viewappointments', [AppointmentController::class, 'viewAppointments'])->middleware('auth');

// Route to update appointment status
Route::put('/appointments/{id}/update-status', [AppointmentController::class, 'updateStatus'])->name('appointments.updateStatus')->middleware('auth');

Route::get('/patient/appointments', [AppointmentController::class, 'viewPatientAppointments'])->middleware('auth');


Route::get('/medical_records/create', [MedicalRecordController::class, 'create'])->middleware('auth')->name('medical_records.create');
Route::post('/medical_records', [MedicalRecordController::class, 'store'])->middleware('auth')->name('medical_records.store');
Route::get('/medical_records', [MedicalRecordController::class, 'index'])->middleware('auth')->name('medical_records.index');

Route::get('/insurance/create', [InsuranceClaimController::class, 'create'])->name('claim-insurance.create');
Route::post('/insurance/store', [InsuranceClaimController::class, 'store'])->name('claim-insurance.store');

Route::get('/insurance/claims', [InsuranceClaimController::class, 'index'])->name('insurance-claims.index');
Route::post('/insurance/claims/{claim}/approve', [InsuranceClaimController::class, 'approve'])->name('insurance-claims.approve');

// Route to show the form
Route::get('/doctor/records/form', [MedicalRecordController::class, 'showPatientRecordsForm'])->name('doctor.records.form');

// Route to handle the form submission
Route::post('/doctor/records', [MedicalRecordController::class, 'displayPatientRecords'])->name('doctor.records.display');

Route::put('/appointments/{id}/accept', [AppointmentController::class, 'accept'])->name('appointments.accept');


require __DIR__.'/auth.php';
