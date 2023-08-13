<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\family;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
         
        $familes = family::where('id',Auth::user()->famile_id)->get();
       
       // $cours = Cour::where('user_id',Auth::user()->id)->get();
      //  $cours = $filier->Cours();
        return view('famile.index', compact('familes', 'user'));
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
        $user = Auth::user();

        // Mettre à jour la colonne famile_id de l'utilisateur
        $user->famile_id = $famile->id;
        $user->update();

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
        $searchResults = [];
        $Allusers = User::all();
        
     
        return view('famile.detail', compact('family','users','Allusers','searchResults')); 
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
            $user->famile_id = null;
            $user->save();
        }

        return redirect()->route('family.show', $family->id);
    }
    public function userEvents($familyId, $userId)
    {
        // Récupérer la famille par son ID
        $family = family::findOrFail($familyId);

        // Récupérer l'utilisateur par son ID
        $user = User::findOrFail($userId);

        // Récupérer les événements associés à l'utilisateur de la famille
        $events = event::where('user_id', $user->id)->where('role',0)->get();

        return view('famile.events', compact('family', 'user', 'events'));
    }

    public function searchUser(Request $request, $familyId)
    {
        $family = family::findOrFail($familyId);
        $users = User::where('famile_id', $family->id)->get(); 
        $search = $request->input('search');

        // Rechercher les utilisateurs par email ou nom
        $searchResults = User::where('email', 'like', '%'.$search.'%')
            ->orWhere('name', 'like', '%'.$search.'%')
            ->get();

        return view('famile.detail', compact('family', 'users', 'searchResults'));
    }

    public function invitations($familyId)
    {
        $family = Family::findOrFail($familyId);

        // Récupérer les utilisateurs qui ont reçu une invitation à rejoindre la famille
        $pendingInvitations = User::where('famile_id', null)->whereNotNull('invitation_token')->get();

        return view('famile.invitations', compact('family', 'pendingInvitations'));
    }
    public function sendInvitation($familyId, $userId)
    {
        $family = family::findOrFail($familyId);

        // Vérifier si l'utilisateur existe et n'est pas déjà dans la famille
        $user = User::where('id', $userId)->where('famile_id', null)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'L\'utilisateur n\'existe pas ou est déjà membre d\'une autre famille.');
        }

        // Vérifier si l'utilisateur actuel est autorisé à envoyer une demande d'invitation
        // Vous pouvez implémenter ici une vérification plus approfondie en fonction des rôles ou d'autres critères
        if (auth()->user()->id !== $family->id) {
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à envoyer des demandes d\'invitation.');
        }

        // Générer un jeton d'invitation unique
       // $invitationToken = Str::random(64);
        $invitationToken = "test";

        // Mettre à jour l'utilisateur avec le jeton d'invitation
        $user->invitation_token = $invitationToken;
        $user->save();

        // Envoyer l'e-mail d'invitation (vous pouvez implémenter cette fonctionnalité avec Laravel Mail)

        return redirect()->back()->with('success', 'Demande d\'invitation envoyée avec succès.');
    }
    public function handleInvitation($familyId, $userId, $status)
    {
        $family = family::findOrFail($familyId);

        // Vérifier si l'utilisateur existe et a reçu une invitation
        $user = User::where('id', $userId)->whereNotNull('invitation_token')->first();

        if (!$user) {
            return redirect()->back()->with('error', 'L\'utilisateur n\'a pas reçu d\'invitation ou ne peut pas être invité.');
        }

        // Vérifier si l'utilisateur actuel est autorisé à gérer les invitations
        // Vous pouvez implémenter ici une vérification plus approfondie en fonction des rôles ou d'autres critères
        if (auth()->user()->id !== $family->id) {
            return redirect()->back()->with('error', 'Vous n\'êtes pas autorisé à gérer les invitations.');
        }

        if ($status === 'accept') {
            // Accepter la demande d'invitation
            $user->famile_id = $familyId;
            $user->invitation_token = null;
            $user->save();

            return redirect()->back()->with('success', 'Invitation acceptée avec succès.');
        } elseif ($status === 'reject') {
            // Refuser la demande d'invitation
            $user->invitation_token = null;
            $user->save();

            return redirect()->back()->with('success', 'Invitation refusée.');
        } else {
            return redirect()->back()->with('error', 'Statut d\'invitation invalide.');
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
