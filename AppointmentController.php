<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Appointment;
use App\Models\Appointments;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Show form for creating an appointment
    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('appointments.create', compact('doctors', 'patients'));
    }

    public function viewAppointments()
{
    // Get the authenticated user's doctor record
    $doctor = Auth::user()->doctor;

    // Retrieve appointments for this doctor
    $appointments = Appointment::where('doctor_id', $doctor->id)->get();

    return view('appointments.view', compact('appointments'));
}

public function updateStatus($id)
{
    $appointment = Appointment::find($id);
    if ($appointment && $appointment->status == 'Accepted') {
        $appointment->status = 'Completed'; // Change status to Completed
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment marked as completed successfully.');
    }

    return redirect()->back()->with('error', 'Appointment not found or already completed.');
}


public function accept($id)
{
    $appointment = Appointment::find($id);
    if ($appointment) {
        $appointment->status = 'Accepted'; // Change status to Accepted
        $appointment->save();

        return redirect()->back()->with('success', 'Appointment accepted successfully.');
    }

    return redirect()->back()->with('error', 'Appointment not found.');
}


public function viewPatientAppointments()
    {
        // Get the authenticated patient's record
        $patient = Auth::user()->patient;

        // Retrieve appointments for the logged-in patient
        $appointments = Appointment::where('patient_id', $patient->id)->get();

        return view('appointments.view-patient', compact('appointments'));
    }

    // Store the new appointment
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'doctor_id'  => 'required|exists:doctors,id',
            'appointment_date' => 'required|date',
        ]);

        // Store the appointment with default status 'pending'
        Appointment::create([
            'patient_id' => $request->input('patient_id'),
            'doctor_id'  => $request->input('doctor_id'),
            'appointment_date' => $request->input('appointment_date'),
            'status' => 'pending',  // Default status is 'pending'
        ]);

        return redirect()->route('appointments.create')->with('success', 'Appointment scheduled successfully!');
    }

    public function index() {
        $appointments = Appointment::with('doctor.user')->where('user_id', auth()->id())->get();
        return view('appointments.index', compact('appointments'));
    }
}
