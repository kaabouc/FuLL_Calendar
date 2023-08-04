@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">Profil de {{ $usere->prenom}}</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('storage/'.$usere->image_user) }}" alt="Image de profil" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <p><strong>Nom d'utilisateur :</strong> {{ $usere->name }}</p>
                                <p><strong>Email :</strong> {{ $usere->email }}</p>
                                <p><strong>Nom :</strong> {{ $usere->name }}</p>
                                <p><strong>Prénom :</strong> {{ $usere->prenom }}</p>
                                <p><strong>Genre :</strong> {{ $usere->sex }}</p>
                                <p><strong>Date de naissance :</strong> {{ $usere->date_naissance }}</p>
                                <!-- Ajoutez d'autres informations de l'utilisateur ici -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
