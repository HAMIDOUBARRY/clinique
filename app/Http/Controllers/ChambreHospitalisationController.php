<?php

namespace App\Http\Controllers;

use App\Models\chambre;
use App\Models\hospitalisation;
use Illuminate\Http\Request;

class ChambreHospitalisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $chambres = Chambre::all();
        $hospitalisations = Hospitalisation::all();

        return view('partials.chambre_hosp.index', compact('chambres', 'hospitalisations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $chambres = chambre::all();
        $hospitalisations = hospitalisation::all();

        return view('partials.chambre_hosp.create', compact('chambres', 'hospitalisations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $chambre = Chambre::find($request->input('chambre_id'));
        $hospitalisation = Hospitalisation::find($request->input('hospitalisation_id'));

        $chambre->hospitalisations()->attach($hospitalisation, [
            'date_attrib' => $request->input('date_attrib'),
            'date_liberation' => $request->input('date_liberation'),
        ]);

        return redirect('chambrehospitalisation')->with('success', 'Relation ajoutée avec succès');
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
    public function edit($chambreId, $hospitalisationId)
    {
        $chambre = Chambre::findOrFail($chambreId);
        $hospitalisation = Hospitalisation::findOrFail($hospitalisationId);

        // Assurez-vous que la relation many-to-many est correctement chargée
        $chambre->load('hospitalisations');

        // Récupérez les données de la table pivot
        $pivotData = $chambre->hospitalisations->find($hospitalisationId)->pivot;

        return view('partials.chambre_hosp.edit', compact('chambre', 'hospitalisation', 'pivotData'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $chambreId, $hospitalisationId)
    {
        $request->validate([
            'chambre_id' => 'required',
            'hospitalisation_id' => 'required',
            'date_attrib' => 'required|date',
            'date_liberation' => 'required|date',
        ]);

        $chambre = Chambre::findOrFail($request->input('chambre_id'));
        $hospitalisation = Hospitalisation::findOrFail($request->input('hospitalisation_id'));

        $chambre->hospitalisations()->updateExistingPivot($hospitalisation->id, [
            'date_attrib' => $request->input('date_attrib'),
            'date_liberation' => $request->input('date_liberation'),
        ]);

        return redirect('chambrehospitalisation')->with('success', 'Relation modifiée avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hospitalisation = Hospitalisation::findOrFail($id);

        $hospitalisation->chambres()->detach();

        return redirect('chambrehospitalisation')->with('success', 'Relation supprimée avec succès');
    }
}
