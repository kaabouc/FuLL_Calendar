@extends('layouts.admin')
@section('content')


<div class="uper">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
    
    <table class="table table-striped">
        <table class="table table-striped">

            <thead>
                <tr>
                  <td>ID</td>
                  <td>Name    </td>
                  <td>email  </td>
                  <td>subject  </td>
                  <td colspan="2">opperation</td>
                </tr>
            </thead>
        
            <tbody>
      
    
          @foreach($contact as $item)
         
          <tr>
              <td>{{$item->id}}</td>
              <td>{{$item->Name}}</td>
              <td>{{$item->Email}}</td>
              <td>{{$item->Subject}}</td>
              <td><a href="{{ route('contact.show', $item->id)}}" class="btn btn-primary">voir</a></td>
           
            <td>
                <form   action="{{ route('contact.destroy', $item->id)}}"method="post">
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