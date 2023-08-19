@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
  <div class="d-flex justify-content-between">
    <h2>Liste des utilisateurs de la famille</h2>
    <a href="{{ route('family.create')}}" class="btn btn-primary">Ajouter un utilisateur</a>
  </div>

  <table class="table table-striped mt-3">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Opérations</th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $item)
      <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->prenom }}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telephone }}</td>
        <td>
          @if($item->id !== auth()->user()->id)
          @if ( auth()->user()->responsable == 1 || Auth::user()->role==1)
            <a href="{{ route('family.removeUser', ['familyId' => $family->id, 'userId' => $item->id]) }}"
              onclick="event.preventDefault(); document.getElementById('remove-user-form-{{ $item->id }}').submit();"
              class="btn btn-danger btn-sm">Supprimer</a>
          @endif
            <form id="remove-user-form-{{ $item->id }}"
              action="{{ route('family.removeUser', ['familyId' => $family->id, 'userId' => $item->id]) }}"
              method="post"
              style="display: none;">
              @csrf
            </form>
            <a href="{{ route('family.users.events', ['familyId' => $family->id, 'userId' => $item->id]) }}"
              class="btn btn-warning btn-sm">Voir les événements</a>
          @endif
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @if ( auth()->user()->responsable == 1 || Auth::user()->role==1)
  <div class="mt-3">
    <h2>Ajouter un utilisateur à la famille</h2>
    <form action="{{ route('family.addUser', $family->id) }}" method="post" class="form-inline">
      @csrf
      <div class="form-group">
        <label for="user_id" class="mr-2">Sélectionner un utilisateur :</label>
        <select name="user_id" id="user_id" class="form-control mr-2">
          @foreach($Allusers as $user)
          <option value="{{ $user->id }}">{{ $user->name }}</option>
          @endforeach
        </select>
      </div>
      <button type="submit" class="btn btn-success">Ajouter</button>
    </form>
  </div>
  @endif
</div>

@endsection
