<?php

namespace App\Http\Controllers;

use App\Models\medecin;
use App\Models\patient;
use App\Models\User;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=User::latest()->get();
        return view('partials.user.user',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users=User::all();
        $patients=patient::all();
        $medecins=medecin::all();
        return view('partials.user.user',compact('users','patients','medecins'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'matricule'=>'required',
            'name'=>'required',
            'prenom'=>'required',
            'date_naissance'=>'required',
            'adresse'=>'required',
            'email'=>'required |email',
            'sexe'=>'required',
            'tel'=>'required',
            'profession'=>'required',
            'nationalite'=>'required',
            'type'=>'required',
            'password'=>'required',
        ]);
        try {
            //code...
            User::create($request->all());
            toastr()->success("Success", "utilisateur a belle bien ete ajouter ");
            return redirect("/user");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("eror", 'erreur a ete detecte');
            return redirect("/user");
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
            //code...
            User::find($id)->delete();
            toastr()->success("Success", "utilisateur a belle bien ete supprimer ");
            return redirect("/user");
        } catch (\Throwable $th) {
            //throw $th;
            toastr()->error("eror", 'erreur a ete detecte');
            return redirect("/user");
        }
    }
}
