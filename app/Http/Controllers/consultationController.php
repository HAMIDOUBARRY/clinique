<?php

namespace App\Http\Controllers;

use App\Models\consultation;
use App\Models\medecin;
use App\Models\patient;
use App\Models\typeconsultation;
use Illuminate\Http\Request;

class consultationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $patients= patient::all();
        $medecins=medecin::all();
        $typeconsultations=typeconsultation::all();
        $consultations =consultation::latest()->get();
        return view('partials.consultation.index', compact('consultations','patients','medecins', 'typeconsultations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $patients= patient::all();
        $medecins=medecin::all();
        $typeconsultations=typeconsultation::all();
        $consultations =consultation::all();
        return view('partials.consultation.create', compact('consultations','patients','medecins', 'typeconsultations'));
   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'date'=>'date |required',
            'debut'=>'required',
            'fin'=>'required',
            'synthese'=>'required',
            'patient_id'=>'required',
            'medecin_id'=>'required',
            'typeconsultation_id'=>'required',
        ]);
        try {
            //code...
            consultation::create($request->all());
            toastr()->success("Success", "Consultation a été ajoute(é) avec succès.");
            return redirect("/consultation");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("error", 'erreur a ete detecte');
            return redirect("/consultation");
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
    public function edit($id)
    {
        $consultation = Consultation::find($id);
        $patients = Patient::all();
        $medecins = Medecin::all();
        $typeconsultations = TypeConsultation::all();
        return view('partials.consultation.edit', compact('consultation', 'patients', 'medecins', 'typeconsultations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'date' => 'date|required',
            'debut' => 'required',
            'fin' => 'required',
            'synthese' => 'required',
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'typeconsultation_id' => 'required',
        ]);
    
        try {
            Consultation::find($id)->update($request->all());
            toastr()->success("Success", "Consultation a été modifiée avec succès.");
            return redirect("/consultation");
        } catch (\Throwable $th) {
            toastr()->error("Erreur", 'Une erreur a été détectée.');
            return redirect("/consultation");
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        try {
            //code...
            consultation::find($id)->delete();
            toastr()->success("Success", "Consultation a été supprimée avec succès.");
            return redirect("/consultation");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("error", 'erreur a ete detecte');
            return redirect("/consultation");
        }
    }
}
