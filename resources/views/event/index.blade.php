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
          <td>title  </td>
          <td>start time  </td>
          <td>end time  </td>
          <td colspan="2">opperation</td>
        </tr>
    </thead>

    <tbody>
    
      <a href="{{ route('event.create')}}" class="btn btn-primary">Ajouter</a> 
    
      
  
        @foreach($event as $item)
       
        <tr>
            <td>{{$item->id}}</td>
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
