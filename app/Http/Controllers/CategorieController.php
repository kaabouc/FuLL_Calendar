<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = categorie::all();
       
       // $cours = Cour::where('user_id',Auth::user()->id)->get();
      //  $cours = $filier->Cours();
        return view('categorie.index', compact('categorie'));
    }
     
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('cour.create');
     
        return view('categorie.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request )
    {
        $categorie = new categorie;
        $categorie->name = $request->input('name');
        $categorie->description_categorie = $request->input('description_categorie');
        
        if ($request->hasFile('icon')) {
            $path = $request->icon->store('fichiers','public');
            $categorie->icon=$path;
        }
        $categorie->save();

        return redirect()->route('categorie.index');
        // return redirect('/cours')->with('success', 'cour créer avec succèss');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categorie = categorie::findOrFail($id);
        $cat = categorie::where('name', 'like', '%'.$categorie->name.'%');
        
     
        return view('categorie.detail', compact('categorie','cat')); 
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $categorie = categorie::find($id);

        return view('categorie.edit' , compact('categorie'));
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
        $categorie = categorie::find($id);
        $categorie->name = $request->input('name');
        $categorie->description_categorie = $request->input('description_categorie');
        if ($request->hasFile('icon')) {
            $path = $request->icon->store('fichiers','public');
            $categorie->icon=$path;
        }
        $categorie->update();

        return redirect()->route('categorie.index')->with('status','categorie updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categorie = categorie::find($id);
        $categorie->delete();
        return redirect()->back()->with('status','categorie Deleted Successfully');
    }
}
