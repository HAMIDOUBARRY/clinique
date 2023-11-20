<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use App\Models\patient;
use App\Models\rendezvous;
use App\Models\service;
use Illuminate\Http\Request;

class rendezvouscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rendezvouses= rendezvous::all();
        $services= service::all();
        $patients= patient::all();
        $medecins= medecin::all();
        return view('partials.rendezvous.index', compact('rendezvouses','services','patients','medecins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        $rendezvouses= rendezvous::all();
        $services= service::all();
        $patients= patient::all();
        $medecins= medecin::all();
        return view('partials.rendezvous.create', compact('rendezvouses','services','patients','medecins'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'date'=>'required',
            'service_id'=>'required',
            'patient_id'=>'required',
            'medecin_id'=>'required',
        ]);
        
        try {
            //code...
            rendezvous::create($request->all());
            toastr()->success("Success", "RDV a été pris avec succès.");
            return redirect("/rendezvous");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("eror", 'erreur a ete detecte');
            return redirect("/rendezvous");
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
