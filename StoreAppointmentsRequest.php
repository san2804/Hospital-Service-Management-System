<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'patient_id' => ['required', 'exists:patients,id'], // Ensure patient exists
            'doctor_id' => ['required', 'exists:doctors,id'],   // Ensure doctor exists
            'appointment_date' => ['required', 'date'],         // Validate appointment date
            'status' => ['required', 'string', 'in:scheduled,canceled,completed'], // Validate status

        ];
    }
}
