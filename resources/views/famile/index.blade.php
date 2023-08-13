<!-- index.blade.php -->

@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="uper">
  @if ($user->responsable == 1 && $familes->isEmpty())
     <a href="{{ route('family.create')}}" class="btn btn-primary">Ajouter famile </a> 
     @endif
  
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
   
      
    
      
  
        @foreach($familes as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->Name_famile}}</td>
            <td>{{$item->Tell_fixe}}</td>
            <td>{{$item->Email_famile}}</td>

            <td><a href="{{ route('family.edit', $item->id)}}" class="btn btn-primary">Modifier</a></td>
           
            <td><a href="{{ route('family.show', $item->id)}}" class="btn btn-primary">voir</a></td>
            
        </tr>
       
     
        @endforeach
    </tbody>
  </table>
<div>
@endsection
