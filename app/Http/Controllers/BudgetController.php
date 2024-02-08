<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'nom_budget' => 'required|string',
            'dated_budget' => 'required|date',
            'datef_budget' => 'required|date|after:dated_budget',
            'revenu_budget' => 'required|numeric|min:0',
            'depense_budget' => 'required|numeric|min:0',
            'montant_budget' => 'required|numeric|min:0',
        ]);

        // Create a new budget item using the validated data
        $budget = Budget::create($validatedData);
}

}
