<?php

namespace App\Http\Controllers;

use App\Models\MedicalRecord;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MedicalRecordController extends Controller
{
    // Show the form to create a new medical record
    public function create()
    {
        return view('medical_records.create'); // Return the view for creating a medical record
    }

    // Store the new medical record
    public function store(Request $request)
{
    $request->validate([
        'patient_id' => 'required|exists:patients,id',
        'record_details' => 'required|string',
    ]);

    // Get the authenticated user's name
    $doctorName = Auth::user()->name;

    // Create the medical record
    MedicalRecord::create([
        'patient_id' => $request->patient_id,
        'doctor_name' => $doctorName, // Store the doctor's name
        'record_details' => $request->record_details,
    ]);

    // Redirect with success message
    return redirect()->route('medical_records.create')->with('success', 'Medical record stored successfully!');
}

public function index()
{
    // Get the authenticated user
    $patient = Auth::user();

    // Fetch medical records where the patient_id matches the logged-in user's ID
    $medicalRecords = MedicalRecord::where('patient_id', $patient->id)->get();

    // Return the view and pass the filtered medical records to it
    return view('medical_records.index', compact('medicalRecords'));
}

public function showPatientRecordsForm()
{
    return view('medical_records.show_form'); // Return a view for inputting Patient ID
}

public function displayPatientRecords(Request $request)
{
    $request->validate([
        'patient_id' => 'required|exists:patients,id',
    ]);

    $patientId = $request->input('patient_id');

    // Fetch all medical records related to the patient
    $records = MedicalRecord::where('patient_id', $patientId)->get();

    // Return the view with records
    return view('medical_records.display', compact('records', 'patientId'));
}


}
