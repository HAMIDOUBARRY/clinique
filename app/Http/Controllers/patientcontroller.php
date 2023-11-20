<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\provenance;
use App\Models\User;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class patientcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients= patient::all();
        $provenances= provenance::all();
        $users= User::all();


        return view('partials.patient.index', compact('patients','provenances','users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $patients= patient::with('user')->get();
        $users= User::all();
        $provenances= provenance::all();

        return view('partials.patient.create', compact('patients','provenances','users'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        try {
            // Votre code pour créer l'utilisateur et le patient
            $users=User::create([
                "name" => $request->name,
                "prenom" => $request->prenom,
                "matricule" => $request->matricule,
                "date_naissance" => $request->date_naissance,
                "adresse" => $request->adresse,
                "sexe" => $request->sexe,
                "nationalite" => $request->nationalite,
                "profession" => $request->profession,
                "tel" => $request->tel,
                "email" => $request->email,
                "password" => $request->password,
                "type" => $request->type,
    
            ]);        
            $patients=patient::create([
                'user_id'=>$users->id,
                'tel_prevenir' => $request->tel_prevenir,
                'situation_familiale' => $request->situation_familiale,
                'provenance_id' => $request->provenance_id,
                'nom_mere' => $request->nom_mere,
                'nom_pere' => $request->nom_pere,
                ]);
        
            // Utilisez Toastr pour le message de succès
            Toastr::success('patient a été ajouté avec succès.');
            return redirect("/patient");
        } catch (\Exception $e) {
            // Utilisez Toastr pour le message d'erreur
            Toastr::error('Une erreur s\'est produite lors de l\'ajout du patient. Veuillez réessayer.');
            return redirect()->back()->withInput();
        }
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
