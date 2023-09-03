<?php

namespace App\Http\Controllers;

use App\Models\information_site;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $siteInformation = information_site::first();

        if (!$siteInformation) {
            $siteInformation = new information_site();
            $siteInformation->telephone = '060000000';
            $siteInformation->address = 'maroc , marrakech , ru 19';
            $siteInformation->email = 'admin_page@fullcalendar.com';
            $siteInformation->description = 'Family Calendar est un calendrier interactif partagé conçu pour les familles. Organisez facilement vos emplois du temps, partagez des événements et restez synchronisés en un seul 
            endroit pratique. Simplifiez la coordination familiale pour des moments inoubliables ensemble.';
            $siteInformation->save();
        }

       return view('information.index', compact('siteInformation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function update(Request $request,$id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_information(Request $request)
    {
        $siteInformation = information_site::first();

    $siteInformation->update([
        'telephone' => $request->input('Telephone'),
        'address' => $request->input('Address'),
        'email' => $request->input('Email'),
        'description' => $request->input('Description'),
       
    ]);
    return redirect()->route('information.index')->with('success', 'Informations mises à jour avec succès!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
