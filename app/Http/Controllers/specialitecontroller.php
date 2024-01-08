<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use App\Models\specialite;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class specialitecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $specialites=specialite::latest()->get();
        return view("partials.specialite.index", compact("specialites"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $specialites=specialite::all();
        return view("partials.specialite.create", compact("specialites"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            "type_specialite"=>"required",
        ]);
        try {
            //code...
            specialite::create($request->all());
            toastr()->success("Success", "specialite a été ajouté avec succès.");
            return redirect("/specialite");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("Erreur", 'Une erreur s\'est produite lors de l\'ajout du patient. Veuillez réessayer.');
            return redirect("/specialite");
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
        //
        try {
            $specialite = specialite::find($id);
            if ($specialite) {
                $specialite->delete();
        
                // Supprimer également le medecin associé
                $medecin = medecin::find($specialite->medecin_id);
                if ($medecin) {
                    $medecin->delete();
                }
        
                Toastr::success('La specialite a été supprimé avec succès.');
            } else {
                Toastr::error('La specialite n\'a pas été trouvé.');
            }
        
            return redirect("/specialite");
        } catch (\Exception $e) {
            Toastr::error('Une erreur s\'est produite lors de la suppression du Specialite. Veuillez réessayer.');
            return redirect()->back()->withInput();
        }
    }
}
