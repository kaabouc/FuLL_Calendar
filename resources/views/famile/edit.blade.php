@extends('layouts.admin')

@section('content')

<style>
  .uper {
    margin-top: 40px;
  }
</style>

<div class="card uper">
  <div class="card-header">
    Modifier le event
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

            <form method="post" action="{{ route('family.update', $famile->id ) }}" id="schedule-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="">
                    <div class="form-group mb-2">
                        <label for="Name_famile" class="control-label">Name de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Name_famile" id="Name_famile" value="{{ $famile->Name_famile }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Tell_fixe" class="control-label">Telephone de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Tell_fixe" id="Tell_fixe" value="{{ $famile->Tell_fixe }}" required>
                    </div>
                   
                    <div class="form-group mb-2">
                        <label for="Email_famile" class="control-label">Email de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Email_famile" id="Email_famile" value="{{ $famile->Email_famile }}" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Adress_famile" class="control-label">Adress de family</label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Adress_famile" id="Adress_famile" value="{{ $famile->Adress_famile }}" required>
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="Image_famile" class="control-label">Image de family</label>
                        <input type="file" class="form-control form-control-sm rounded-0" name="Image_famile" id="Image_famile" value="{{ $famile->Image_famile }}" required>
                    </div>
                </form>
            
        <div class="card-footer" >
            <div class="text-center" >
                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-edit"></i> modifier</button>
                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
            </div>
        </div>
  </div>
</div>
@endsection