<?php

namespace App\Http\Controllers;

use App\Models\family;
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
        $categorie = family::findOrFail($id);
        $cat = family::where('Name_famile', 'like', '%'.$categorie->Name_famile.'%');
        
     
        return view('famile.detail', compact('categorie','cat')); 
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
