<?php

namespace App\Http\Controllers;

use App\Models\hopital;
use App\Models\service;
use App\Models\traitement;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Yoeunes\Toastr\Facades\Toastr;

class hopitalcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hopitals = hopital::latest()->get();
        $services = service::all();

        return view('partials.hopital.index', compact('hopitals', 'services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $hopitals = hopital::all();
        $services = service::all();

        return view('partials.hopital.create', compact('hopitals', 'services'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'nom' => 'required',
                'adresse' => 'required',
                'rue' => 'required',
                'service_id' => 'required',
                'email' => 'required|email',
                'telephone' => 'required|unique:hopitals',
            ]);

            hopital::create($request->all());
            toastr()->success("Success", "L'hôpital a été ajouté avec succès.");
            return redirect("/hopital");
        } catch (QueryException $e) {
            // Examinez le message d'erreur SQL pour des détails spécifiques
            $errorCode = $e->getCode();

            // Vérifiez le code d'erreur SQL pour déterminer le type d'erreur
            if ($errorCode == 23000) {
                // Code d'erreur pour une violation d'intégrité (contrainte d'unicité)
                $errorMessage = $e->getMessage();

                // Vérifiez le message d'erreur pour déterminer le type spécifique d'erreur
                if (stripos($errorMessage, 'email') !== false) {
                    toastr()->error("Erreur", "L'adresse e-mail doit être unique.");
                } elseif (stripos($errorMessage, 'telephone') !== false) {
                    toastr()->error("Erreur", "Le numéro de téléphone doit être unique.");
                } else {
                    // Gérer d'autres types d'erreurs si nécessaire
                    toastr()->error("Erreur", "Une erreur de contrainte d'unicité s'est produite. Détails : $errorMessage");
                }
                
            } else {
                // Gérer d'autres types d'erreurs SQL si nécessaire
                toastr()->error("Erreur", "Une erreur SQL s'est produite. Détails : " . $e->getMessage());
            }

            return redirect("/hopital");
        } catch (\Throwable $th) {
            // Gère toutes les autres exceptions
            toastr()->error("Erreur", "Une erreur s'est produite.");
            return redirect("/hopital");
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
            try {
        $hopital = Hopital::find($id);

        if ($hopital) {
            // Supprimer l'hôpital
            $hopital->delete();

            // Supprimer également les traitements associés à cet hôpital
            $hopital->traitements()->delete();

            Toastr::success('L\'hôpital a été supprimé avec succès.');
        } else {
            Toastr::error('L\'hôpital n\'a pas été trouvé.');
        }

        return redirect("/hopital");
    } catch (\Exception $e) {
        Toastr::error('Une erreur s\'est produite lors de la suppression de l\'hôpital. Veuillez réessayer.');
        return redirect()->back()->withInput();
    }

    }
}
