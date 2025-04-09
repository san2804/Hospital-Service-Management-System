<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'doctor_name', // Include doctor_name in fillable
        'record_details',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
