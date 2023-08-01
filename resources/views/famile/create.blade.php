@extends('layouts.admin')
@section('content')

<div class="col-md-6">
    <div class="cardt rounded-0 shadow">
        <div class="card-header bg-gradient bg-primary text-light">
            <h5 class="card-title">family  Form</h5>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('family.store') }}" method="post" id="schedule-form"  enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="form-group mb-2">
                        <label for="Name_famile" class="control-label">Name de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Name_famile" id="Name_famile" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Tell_fixe" class="control-label">Telephone de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Tell_fixe" id="Tell_fixe" required>
                    </div>
                   
                    <div class="form-group mb-2">
                        <label for="Email_famile" class="control-label">Email de famile </label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Email_famile" id="Email_famile" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="Adress_famile" class="control-label">Adress de family</label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="Adress_famile" id="Adress_famile" required>
                    </div>
                    
                    <div class="form-group mb-2">
                        <label for="Image_famile" class="control-label">Image de family</label>
                        <input type="file" class="form-control form-control-sm rounded-0" name="Image_famile" id="Image_famile" required>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-footer">
            <div class="text-center">
                <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Save</button>
                <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
            </div>
        </div>
    </div>
</div>
@endsection