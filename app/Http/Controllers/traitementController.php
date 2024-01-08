<?php

namespace App\Http\Controllers;

use App\Models\hopital;
use App\Models\hospitalisation;
use App\Models\traitement;
use Illuminate\Http\Request;

class traitementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $traitement = traitement::latest()->get();
        $hopitals = hopital::all();
        $hospitalisations = hospitalisation::all();
        return view("partials.traitement.index", compact("traitement", "hopitals", "hospitalisations"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //
        $traitements = traitement::all();
        $hopitals = hopital::all();
        $hospitalisations = hospitalisation::all();
        return view("partials.traitement.create", compact("traitements", "hopitals", "hospitalisations"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'date' => 'required|date',
            'hopital_id' => 'required|exists:hopitals,id',
            'hospitalisation_id' => 'required|exists:hospitalisations,id',
            'type_examen' => 'required|in:examen_biologie,examen_radiologie,chirurgie',
            'prix' => 'required',
            // Ajoutez les règles de validation pour les autres champs
        ]);
        // Créez un nouveau traitement

        $traitements = Traitement::create($request->all());

        // Redirigez l'utilisateur ou faites toute autre action nécessaire
        return redirect("/traitement")->with('success', 'Traitement enregistré avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $traitement =traitement::find($id);
        $traitement->delete();
        return redirect()->route('traitement.index')->with("success", 'suppression effectuer');

    }
}
