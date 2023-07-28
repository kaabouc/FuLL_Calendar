@extends('layouts.admin')
@section('content')

<div class="card-body">
    <div class="container-fluid">
        <form action="{{ route('categorie.store') }}" method="post" id="schedule-form"  enctype="multipart/form-data" >
            @csrf
            <input type="hidden" name="id" value="">
            <div class="form-group mb-2">
                <label for="title" class="control-label">name</label>
                <input type="text" class="form-control form-control-sm rounded-0" name="name" id="name" required>
            </div>
            <div class="form-group mb-2">
                <label for="description" class="control-label">Description</label>
                <textarea rows="3" class="form-control form-control-sm rounded-0" name="description_categorie" id="description_categorie" required></textarea>
            </div>
            <div class="form-group mb-2">
                <label for="start_datetime" class="control-label">icon</label>
                <input type="file" class="form-control form-control-sm rounded-0" name="icon" id="icon" required>
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

@endsection