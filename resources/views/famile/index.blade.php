<!-- index.blade.php -->

@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
  @if (($user->responsable == 1 && $familes->isEmpty()) || Auth::user()->role==1)
     <a href="{{ route('family.create')}}" class="btn btn-primary">Ajouter famile </a> 
     @endif
  
  <table class="table table-striped">

    <thead>
        <tr>
          <td>ID</td>
          <td>Name  </td>
          <td>Telephone  </td>
          <td>Email </td>
          <td colspan="3">opperation</td>
        </tr>
    </thead>

    <tbody>
   
      
    
      
  
        @foreach($familes as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Name_famile}}</td>
            <td>{{$item->Tell_fixe}}</td>
            <td>{{$item->Email_famile}}</td>
            @if ( auth()->user()->responsable == 1   || Auth::user()->role==1 )
            <td><a href="{{ route('family.edit', $item->id)}}" class="btn btn-info">Modifier</a></td>
           @endif
            <td><a href="{{ route('family.show', $item->id)}}" class="btn btn-warning">voir</a></td>
            @if ( auth()->user()->role == 1  ) 
           
            <td>
                <form   action="{{ route('family.destroy', $item->id)}}"method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
            @endif
        </tr>
       
     
        @endforeach
    </tbody>
  </table>
<div>
@endsection
