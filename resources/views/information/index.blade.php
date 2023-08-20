
@extends('layouts.admin')

@section('content')

<form action="{{ route('information.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
   
    <div class="form-row">
        <div class="form-group col-md-6">
        <label for="inputEmail4">Address</label>
        <input type="text" required class="form-control" id="Adress" name="Address" value=" {{ $siteInformation->address }}">
        <input type="hidden" name="Id_information" value=" $siteInformation->telephone"> 
        </div>
        <div class="form-group col-md-6">
        <label for="inputPassword4">Email</label>
        <input type="text" class="form-control" id="date"  value=" {{ $siteInformation -> email }}" name="Email">
       
       </div> </div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="inputEmail4">Telephone </label>
        <input type="text" class="form-control" id="Telephone"  value=" {{ $siteInformation -> telephone }}" name="Telephone">
        </div>
        
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
        <label for="inputEmail4"> Description</label>
        <input type="text" class="form-control md-textarea" value="{{ $siteInformation -> description }}"  name="Description">
        </div>
      
    </div>
    
  
   
    <button type="submit" class="btn btn-primary" name="update">Modifier   </button>
    </form>

    @endsection