<?php

namespace App\Http\Controllers;

use App\Models\family;
use App\Models\User;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familes = family::all();
       
       // $cours = Cour::where('user_id',Auth::user()->id)->get();
      //  $cours = $filier->Cours();
        return view('famile.index', compact('familes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('famile.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $famile = new family;
        $famile->Name_famile = $request->input('Name_famile');
        $famile->Adress_famile = $request->input('Adress_famile');
        $famile->Tell_fixe = $request->input('Tell_fixe');
        $famile->Email_famile = $request->input('Email_famile');
        
        if ($request->hasFile('Image_famile')) {
            $path = $request->Image_famile->store('fichiers','public');
            $famile->Image_famile=$path;
        }
        $famile->save();

        return redirect()->route('family.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $family = family::findOrFail($id);
        $users = User::where('famile_id', $family->id)->get();
        $Allusers = User::all();
        
     
        return view('famile.detail', compact('family','users','Allusers')); 
    }
    public function addUser(Request $request, $id)
    {
        $family = family::findOrFail($id);

        // Valider les données du formulaire
        $request->validate([
            'user_id' => 'required|exists:users,id',
        ]);

        // Ajouter l'utilisateur à la famille en mettant à jour son champ "family_id"
        $user = User::findOrFail($request->user_id);
        $user->famile_id = $family->id;
        $user->save();

        return redirect()->route('family.show', $family->id);
    }
    public function removeUser($familyId, $userId)
    {
        $family = family::findOrFail($familyId);

        // Trouver l'utilisateur dans la famille par son ID
        $user = User::findOrFail($userId);

        // Vérifier si l'utilisateur appartient réellement à la famille
        if ($user->famile_id === $family->id) {
            // Supprimer l'association de l'utilisateur avec la famille
            $user->famile_id = 0;
            $user->save();
        }

        return redirect()->route('family.show', $family->id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $famile = family::find($id);

        return view('famile.edit' , compact('famile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $famile = family::find($id);
        $famile->Name_famile = $request->input('Name_famile');
        $famile->Adress_famile = $request->input('Adress_famile');
        $famile->Tell_fixe = $request->input('Tell_fixe');
        $famile->Email_famile = $request->input('Email_famile');
        
        if ($request->hasFile('Image_famile')) {
            $path = $request->Image_famile->store('fichiers','public');
            $famile->Image_famile=$path;
        }
        $famile->update();

        return  redirect()->route('family.index')->with('success', 'user mise à jour avec succèss');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $famile = family::find($id);
        $famile->delete();
        return redirect()->back()->with('status','categorie Deleted Successfully');
    }
}
