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
          @if (auth()->user()->role == 1 )
          <td>name</td>
          @endif
          <td>title  </td>
          <td>start time  </td>
          <td>end time  </td>
          <td colspan="2">opperation</td>
        </tr>
    </thead>

    <tbody>
      @if (auth()->user()->role != 1 )
      <a href="{{ route('event.create')}}" class="btn btn-primary">Ajouter</a> 
      @endif
      
  
        @foreach($event as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            @if (auth()->user()->role == 1 )
            <td ><a href="{{ route('user.show', $item->user->id)}}" style="color: none">{{$item->user->name}}</a></td>
            @endif
            
            <td>{{$item->title}}</td>
            <td>{{$item->start_datetime}}</td>
            <td>{{$item->end_datetime}}</td>
           
            <td><a href="{{ route('event.edit', $item->id)}}" class="btn btn-primary">Modifier</a></td>
           
            <td>
                <form   action="{{ route('event.destroy', $item->id)}}"method="post">
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
