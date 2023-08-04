@extends('layouts.admin')

@section('content')
    <h1>Famille : {{ $family->name }}</h1>

    <h2>Invitations en attente :</h2>
    <ul>
        @foreach($pendingInvitations as $invitation)
            <li>
                {{ $invitation->name }} ({{ $invitation->email }})
                <a href="{{ route('family.handleInvitation', ['familyId' => $family->id, 'userId' => $invitation->id, 'status' => 'accept']) }}">Accepter</a>
                <a href="{{ route('family.handleInvitation', ['familyId' => $family->id, 'userId' => $invitation->id, 'status' => 'reject']) }}">Refuser</a>
            </li>
        @endforeach
    </ul>
@endsection
