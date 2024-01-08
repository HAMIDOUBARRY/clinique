<?php

namespace App\Http\Controllers;

use App\Models\consultation;
use App\Models\medecin;
use App\Models\service;
use App\Models\specialite;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yoeunes\Toastr\Facades\Toastr;

class medecincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medecins=medecin::all();
        $users=User::all();
        $services=service::all();
        $specialites=specialite::all();
        return view("partials.medecin.index", compact("medecins","users","services","specialites"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $medecins=medecin::all();
        $users=User::all();
        $services=service::all();
        $specialites=specialite::all();
        return view("partials.medecin.create", compact("medecins","users","services","specialites"));
    }

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
            $medecins=medecin::create([
                'user_id'=>$users->id,
                'service_id' => $request->service_id,
                'specialite_id' => $request->specialite_id,
               ]);
        
            // Utilisez Toastr pour le message de succès
            Toastr::success('medecin(e) a été ajouté(e) avec succès.');
            return redirect("/medecin");
        } catch (\Exception $e) {
            // Utilisez Toastr pour le message d'erreur
            Toastr::error('Une erreur s\'est produite lors de l\'ajout du medecin(e). Veuillez réessayer.');
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
    public function destroy($id)
{
    $medecin = Medecin::find($id);

    if ($medecin) {
        $consultation = Consultation::find($medecin->consultation_id);
        $user = User::find($medecin->user_id);

        // Supprimer le medecin
        $medecin->delete();

        // Supprimer la consultation
        if ($consultation) {
            $consultation->delete();
        }

        // Supprimer l'utilisateur associé
        if ($user) {
            $user->delete();
        }

        Toastr::success('Le médecin a été supprimé avec succès.');
    } else {
        Toastr::error('Le médecin n\'a pas été trouvé.');
    }

    return Redirect::to("/medecin");
}
}
