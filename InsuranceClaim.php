<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InsuranceClaim extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',        // Foreign key to users table
        'policy_number',     // Manually entered by the patient
        'insurance_agent_id',// Foreign key to insurance_agents table
        'claim_amount',      // Amount claimed
        'claim_reason',      // Reason for the claim
        'claim_status',      // Status of the claim
    ];

    // Relations with other models

    // Relation to the User (Patient)
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    // Relation to the Insurance Agent
    public function insuranceAgent()
    {
        return $this->belongsTo(InsuranceAgent::class, 'insurance_agent_id');
    }
}

