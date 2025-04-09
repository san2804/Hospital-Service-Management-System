<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InsuranceClaim;

class InsuranceAgentController extends Controller
{
    // Show all insurance claims for the insurance agent
    public function index()
    {
        $claims = InsuranceClaim::where('insurance_agent_id', auth()->user()->id)->get();
        return view('insurance_agent.claims', compact('claims'));
    }

    // Update the status of an insurance claim
    public function updateStatus(Request $request, $id)
    {
        $claim = InsuranceClaim::findOrFail($id);
        $claim->status = $request->status;  // Update the status from the form
        $claim->save();

        return redirect()->route('insurance-agent.claims')->with('success', 'Claim status updated successfully.');
    }
}

