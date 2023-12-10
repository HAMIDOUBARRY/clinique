<?php

namespace App\Http\Controllers;

use App\Models\hospitalisation;
use App\Models\medecin;
use App\Models\patient;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class HospitalisationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hospitalisations=hospitalisation::all();
        $patients=patient::all();
        $medecins=medecin::all();
        return view("partials.hospitalisation.index", compact("hospitalisations","medecins","patients"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $hospitalisations=hospitalisation::latest()->get();
        $patients=patient::all();
        $medecins=medecin::all();
        return view("partials.hospitalisation.create", compact("hospitalisations","medecins","patients"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                "date" => "required",
                "type_admission" => "required",
                "patient_id" => "required",
                "medecin_id" => "required",
                "date_sortie" => "required",
                "motif" => "required",
                "motif_sortie" => "required",
                "name_acc" => "required",
                "resultat_sortie" => "required",
                'date_deces' => 'nullable|date',
                'motif_deces' => 'nullable|string',
                "lien_parente" => "required",
            ]);
        
            hospitalisation::create($request->all());
        
            Toastr::success('L\'hospitalisation a été ajoutée avec succès!', 'Succès');
            return redirect('hospitalisation');
        } catch (\Exception $e) {
            Toastr::error('Une erreur s\'est produite lors de l\'ajout de l\'hospitalisation. Veuillez réessayer plus tard.', 'Erreur');
            return redirect()->back();
        } }

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
