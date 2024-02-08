<?php

namespace App\Http\Controllers;

use App\Models\Revenu;
use Illuminate\Http\Request;
// use Illuminate\Validation\Rule;

class RevenuController extends Controller
{
    public function store(Request $request) {
        $formFields2 = $request->validate([
            'type_revenu' => ['required', 'min:3'],
            'montant_revenu' => ['required'],
            'date_revenu' => ['required', 'date'],
            'description_revenu' => 'required|min:6'
        ]);
        // create new revenu
        $revenu = Revenu::create($formFields2);
        return redirect('/revenu');
    }
    public function show(){
        $Revenus =Revenu::all();
        return view('revenu',['Revenus'=>$Revenus]);
    }
    public function destroy($id)
{
    Revenu::destroy($id);
    return redirect('/revenu');
}

public function edit($id){
    $Revenus =Revenu::all();
    $Revenuselect = Revenu::find($id);
    return view('dbviews.editrevenu', ['Revenuselect' => $Revenuselect,'Revenus'=>$Revenus]);
}
public function update(Request $request, $id)
{
    $revenue = Revenu::findOrFail($id);
    $revenue->type_revenu = $request->input('type_revenu');
    $revenue->montant_revenu = $request->input('montant_revenu');
    $revenue->date_revenu = $request->input('date_revenu');
    $revenue->description_revenu = $request->input('description_revenu');
    $revenue->save();

    return redirect('/revenu')->with('success', 'Revenue updated successfully');
}



}

