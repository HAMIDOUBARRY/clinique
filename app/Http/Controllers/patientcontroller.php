<?php

namespace App\Http\Controllers;

use App\Models\patient;
use App\Models\provenance;
use App\Models\User;
use Illuminate\Http\Request;

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

        $patients= patient::all();
        $users= User::all();
        $provenances= provenance::all();

        return view('partials.patient.create', compact('patients','provenances','users'));    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
           'tel_prevenir'=>'required',
            'situation_familiale'=>'required',
            'provenance_id'=>'required',
            'nom_mere'=>'required',
            'nom_pere'=>'required',
            'code_assurance'=>'nullable',
            'assurance_medicale'=>'nullable ',
           'matricule'=>'required',
           'name'=>'required',
           'prenom'=>'required',
        ]);
       
        try {
            //code...
            patient::create($request->all());
            toastr()->success("Success", "patient a belle bien ete ajouter ");
            return redirect("/patient");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("eror", 'erreur a ete detecte');
            return redirect("/patient");
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
