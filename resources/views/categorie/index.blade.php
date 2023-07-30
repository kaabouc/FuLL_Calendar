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
          <td>description </td>
          <td>icon </td>
          <td colspan="2">opperation</td>
        </tr>
    </thead>

    <tbody>
    
      <a href="{{ route('categorie.create')}}" class="btn btn-primary">Ajouter</a> 
    
      
  
        @foreach($categorie as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->description_categorie}}</td>
            <td ><img style="width: 25px ; height: 26px; " src="{{ asset('storage/'.$item->icon) }}" alt="Icône"></td>

            <td><a href="{{ route('categorie.edit', $item->id)}}" class="btn btn-primary">Modifier</a></td>
           
            <td>
                <form   action="{{ route('categorie.destroy', $item->id)}}"method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Supprimer</button>
                </form>
            </td>
        </tr>
       
     
        @endforeach
    </tbody>
  </table>
<div>
@endsection
