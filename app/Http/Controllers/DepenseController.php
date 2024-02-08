<?php

namespace App\Http\Controllers;

use App\Models\Depense;
use Illuminate\Http\Request;

class DepenseController extends Controller
{
    //store depense to db
    public function store(Request $request)
    {
        $formfield3 = $request->validate([
            'type_depense' => ['required'],
            'montant_depense' => ['required'],
            'date_depense' => ['required', 'date'],
            'description_depense' => 'required|min:6'
        ]);
        //add depense to db
        Depense::create($formfield3);
        return redirect('/depense');
    }
    // display all the depenses
    public function show()
    {
        $Depenses = Depense::all();
        return view('depense', ['Depenses' => $Depenses]);
    }
    // delete a depense
    public function destroy($id)
    {
        Depense::destroy($id);
        return redirect('/depense');
    }
    // return Depnses and Depenses variables to editdepense interface
    public function edit($id)
    {
        $Depenses = Depense::all();
        $Depenseselect = Depense::find($id);
        return view('dbviews.editdepense', ['Depenseselect' => $Depenseselect, 'Depenses' => $Depenses]);
    }
    //updating a depense
    public function update(Request $request, $id)
    {
        $depense = Depense::findOrFail($id);
        $depense->type_depense = $request->input('type_depense');
        $depense->montant_depense=$request->input('montant_depense');
        $depense->date_depense=$request->input('date_depense');
        $depense->description_depense=$request->input('description_depense');
        $depense->save();
        return redirect('/depense');

    }
}
