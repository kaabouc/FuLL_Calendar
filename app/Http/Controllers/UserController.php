<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $users = User::where('role', '!=', 1)->get();
    return view('users.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usere = new   User;
        $usere->name = $request->input('name');
        $usere->email = $request->input('email');
        $usere->prenom = $request->input('prenom');
        $usere->nationalite = $request->input('nationalite');
        $usere->date_naissance = $request->input('date_naissance');
        $usere->sex = $request->input('sex');
           if ($request->hasFile('image_user')) {
            $path = $request->image_user->store('profile_pictures', 'public');
           $usere->image_user=$path;
        }
        $usere->CIN = $request->input('CIN');
        $usere->responsable = $request->input('responsable');
        $password = $request->input('password');
        $hashedPassword = Hash::make($password);
        $usere->password = $hashedPassword ; 
        $usere->save();
    
            return redirect()->route('event.index')->with('status','event updated Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show($id)
    {
        
        $usere = User::findOrFail($id);
    
     
        return view('users.detail', compact('usere'));
        
    }
    public function show_user()
    {
        
        $usere = Auth::user();

        // Passez les données de l'utilisateur à la vue
      

        // Vérifier si l'utilisateur est connecté
        if ($usere) {
            // Passez les données de l'utilisateur à la vue
            return view('users.detail', compact('usere'));
        } else {
            // Rediriger vers une autre page ou afficher un message d'erreur
            // si l'utilisateur n'est pas connecté
            return redirect()->route('login')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
      

        return view('users.edit' , compact('user'));
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
    $usere = User::find($id);
    $usere->name = $request->input('name');
    $usere->email = $request->input('email');
    $usere->prenom = $request->input('prenom');
    $usere->nationalite = $request->input('nationalite');
    $usere->date_naissance = $request->input('date_naissance');
    $usere->sex = $request->input('sex');
       if ($request->hasFile('image_user')) {
        $path = $request->image_user->store('profile_pictures', 'public');
       $usere->image_user=$path;
    }
    $usere->CIN = $request->input('CIN');
    $usere->responsable = $request->input('responsable');
    $password = $request->input('password');
    $hashedPassword = Hash::make($password);
    $usere->password = $hashedPassword ; 
    $usere->update();

        return redirect()->route('event.index')->with('status','event updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('status','user Deleted Successfully');
    }
}
