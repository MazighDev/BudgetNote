<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Revenu;
use App\Models\Depense;
use Illuminate\Http\Request;

class testController extends Controller
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
        ]);
    
        // Calculate the montant_budget field
        $validatedData['montant_budget'] = $validatedData['revenu_budget'] - $validatedData['depense_budget'];
    
        // Create a new budget item using the validated data
        $budget = Budget::create($validatedData);
        return redirect('/budget');
    }
    public function show()
    {
        $Budgets = Budget::all();
        $Revenus = Revenu::all();
        $montants = $Revenus->pluck('montant_revenu');
        $totalrevenu = $montants->sum();
            
        $Depense = Depense::all();
        $monts = $Depense->pluck('montant_depense');
        $totaldepense = $monts->sum();
        
        return view('Budget', [
            'Budgets' => $Budgets,
            'totalrevenu' => $totalrevenu,
            'totaldepense' => $totaldepense,
        ]);
    }
    
      // delete a depense
      public function destroy($id)
      {
          Budget::destroy($id);
          return redirect('/budget');
      }

}
