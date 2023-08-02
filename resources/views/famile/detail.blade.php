<!-- index.blade.php -->

@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">

  
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Name  </td>
          <td>Telephone  </td>
          <td>Email </td>
          <td colspan="2">opperation</td>
        </tr>
    </thead>

    <tbody>
    
      <a href="{{ route('family.create')}}" class="btn btn-primary">Ajouter</a> 
    
      
  
        @foreach($users as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->prenom}}</td>

            <td><a href="{{ route('family.removeUser', ['familyId' => $family->id, 'userId' => $item->id]) }}"
                onclick="event.preventDefault(); document.getElementById('remove-user-form-{{ $item->id }}').submit();"
             >
                 Supprimersupp</a>
            </td>
                 <form id="remove-user-form-{{ $item->id }}"
                    action="{{ route('family.removeUser', ['familyId' => $family->id, 'userId' => $item->id]) }}"
                    method="post"
                    style="display: none;"
                  >
            <td><a href="{{ route('family.edit', $item->id)}}" class="btn btn-primary">voir</a></td>
            
        </tr>
         
        @endforeach
    </tbody>
  </table>
    <form action="{{ route('family.addUser', $family->id) }}" method="post">
        @csrf
   
        <label for="user_id">Sélectionner un utilisateur :</label>
        <select name="user_id" id="user_id">
            @foreach($Allusers as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
            @endforeach
        </select>
        <button type="submit">Ajouter</button>
    </form>
<div>
@endsection
