<?php

namespace App\Http\Controllers;

use App\Models\chambre;
use Illuminate\Http\Request;

class chambrecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $chambres=chambre::latest()->get();
        return view('partials.chambre.index' , compact('chambres'));
   
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $chambres=chambre::all();
        return view('partials.chambre.create', compact('chambres'));
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'no_chambre'=>'required',
            'type_chambre'=>'required',
            'prix_chambre'=>'required',
            'etage'=>'required',
        ]);
        try {
            //code...
            chambre::create($request->all());
            toastr()->success("Success", "chambre a été bien ajouté ");
            return redirect("/chambre");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error('Une erreur s\'est produite lors de l\'ajout du chambre. Veuillez réessayer.');
            return redirect("/chambre");
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
