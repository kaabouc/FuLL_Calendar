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
          <td>Email </td>
          <td>date naissance   </td>
          <td>image  </td>
         
          @if ( auth()->user()->role == 1  ) 
          <td colspan="2">opperation</td>
         @endif
        </tr>
    </thead>

    <tbody>
      @if ( auth()->user()->role == 1  ) 
      <a href="{{ route('user.create')}}" class="btn btn-primary">Ajouter</a> 
     @endif
      
  
        @foreach($users as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->date_naissance}}</td>
            <td ><img style="width: 25px ; height: 26px; " src="{{ asset('storage/'.$item->image_user) }}" alt="Icône"></td>
            @if ( auth()->user()->role == 1  ) 
            <td><a href="{{ route('user.edit', $item->id)}}" class="btn btn-primary">Modifier</a></td>
            <td><a href="{{ route('user.show', $item->id)}}" class="btn btn-warring">voir</a></td>
            <td>
                <form   action="{{ route('user.destroy', $item->id)}}"method="post">
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
