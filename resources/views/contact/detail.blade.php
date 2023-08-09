@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1 class="mb-0">Message  de {{ $contacte->Name}}</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('assets/images/message icon.jpg') }}" alt="Image de profil" class="img-thumbnail">
                            </div>
                            <div class="col-md-8">
                                <p><strong>Nom de messagrie  :</strong> {{ $contacte->Name }}</p>
                                <p><strong>Email :</strong> {{ $contacte->Email }}</p>
                                <p><strong>suject  :</strong> {{ $contacte->Suject }}</p>
                                <p><strong>Message  :</strong> {{ $contacte->Message }}</p>
                                
                                <!-- Ajoutez d'autres informations de l'utilisateur ici -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
