@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le categorie
  </div>

  <div class="card-body">

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif

      <form method="post" action="{{ route('categorie.update', $categorie->id ) }}"  enctype="multipart/form-data">
         @csrf
          @method('PUT')
          <div class="form-group">
              <label for="Name_cour">Name  :</label>
              <input type="text" class="form-control" name="name"  value="{{ $categorie->name}}"/>
          </div>
          <div class="form-group">
              <label for="">description ustilisateur  </label>
              <input type="text" class="form-control" name="description_categorie"  value="{{ $categorie->description_categorie}}"/>
          </div>
          <div class="form-group">
              <label for="Name_brache">fonction de  user :</label>
              <input type="file" class="form-control" name="icon" value="{{ $categorie->icon}}"/>
          </div>
          
          
          <button type="submit" class="btn btn-primary">Modifier</button>
          <a class="btn btn-primary" href="{{ route('categorie.index')}}">canel</a>
      </form>
  </div>
</div>
@endsection