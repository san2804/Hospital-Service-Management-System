<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceClaim;
use App\Models\InsuranceAgent;

class InsuranceClaimController extends Controller
{
    // Show form to create insurance claim
    public function create()
    {
        $insuranceAgents = InsuranceAgent::all();
        return view('insurance.claim', compact('insuranceAgents'));
    }

    // Store the insurance claim
    public function store(Request $request)
    {
        $request->validate([
            'policy_number' => 'required|string',
            'patient_id' => 'required|exists:users,id',
            'insurance_agent_id' => 'required|exists:insurance_agents,id',
            'claim_amount' => 'required|numeric',
            'claim_reason' => 'required|string|max:255',
        ]);

        InsuranceClaim::create([
            'policy_number' => $request->policy_number,
            'patient_id' => $request->patient_id,
            'insurance_agent_id' => $request->insurance_agent_id,
            'claim_amount' => $request->claim_amount,
            'claim_reason' => $request->claim_reason,
            'claim_status' => 'Pending',  // Default status
        ]);

        return redirect()->route('claim-insurance.create')->with('success', 'Insurance claim submitted successfully.');
    }

    // Show claims for the insurance agent to approve
    public function index()
    {
        $claims = InsuranceClaim::with('insuranceAgent')->get(); // Eager load insurance agents
        return view('insurance.index', compact('claims')); // Change to 'insurance.index'
    }

    // Method to approve a claim
    public function approve(InsuranceClaim $claim)
    {
        $claim->claim_status = 'Approved'; // Change claim status to Approved
        $claim->save(); // Save the change

        return redirect()->route('insurance-claims.index')->with('success', 'Claim approved successfully.');
    }
}

