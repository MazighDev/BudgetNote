<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use App\Models\Depense;
use App\Models\Revenu;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    
    public function show()
    {
        $Depenses = Depense::all();
        $Revenus = Revenu::all();
        $Budgets = Budget::all();
        $montants = $Revenus->pluck('montant_revenu');
        $totalrevenu = $montants->sum();
        $monts = $Depenses->pluck('montant_depense');
        $totaldepense = $monts->sum();
        return view('index', [
            'Depenses' => $Depenses,
            'Revenus' => $Revenus,
            'Budgets' => $Budgets,
            'totaldepense' => $totaldepense,
            'totalrevenu' => $totalrevenu,
        ]);
    }
}
