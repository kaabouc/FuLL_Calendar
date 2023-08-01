@extends('layouts.admin')
</style>
@section('content')
<div class="col-md-9" >
    <div id="calendar"></div>
</div>
<div class="col-md-3">
    <div class="cardt rounded-0 shadow">
        <div class="card-header bg-gradient bg-primary text-light">
            <h5 class="card-title">Event Form</h5>
        </div>
        <div class="card-body">
            <div class="container-fluid">
                <form action="{{ route('event.store') }}" method="post" id="schedule-form"  enctype="multipart/form-data" >
                    @csrf
                    <input type="hidden" name="id" value="">
                    <div class="form-group mb-2">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control form-control-sm rounded-0" name="title" id="title" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="control-label">Description</label>
                        <textarea rows="3" class="form-control form-control-sm rounded-0" name="description_event" id="description_event" required></textarea>
                    </div>
                   
                    <div class="form-group mb-2">
                        <label for="start_datetime" class="control-label">Start</label>
                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="start_datetime" id="start_datetime" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="end_datetime" class="control-label">End</label>
                        <input type="datetime-local" class="form-control form-control-sm rounded-0" name="end_datetime" id="end_datetime" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="categorie">Catégorie:</label>
                        <select name="categorie_id" required>
                            @foreach ($categories as $categorie)
                                <option value="{{ $categorie->id }}">{{ $categorie->name }}</option>
                            @endforeach
                        </select>
                         </div>
                    <div class="form-group mb-2">
                        <label for="description" class="control-label">role(pour toi)</label>
                        yess
                        <input type="checkbox" name="role" id="role" value="1" >  non <input type="checkbox" name="role" id="role" value="0" >
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
<?php 


?>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            plugins: [ 'dayGrid', 'interaction' ],
            events: [
                @foreach ($events as $event)
                    {
                        title: '{{ $event->title }}',
                        start: '{{ $event->start_datetime }}',
                        end: '{{ $event->end_datetime }}',
                        // Ajoutez d'autres propriétés des événements si nécessaire
                    },
                @endforeach
            ],
            editable: true,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,dayGridWeek,dayGridDay'
            },
            // Ajoutez ici d'autres options de configuration du calendrier selon vos besoins
        });

        calendar.render();
    });
</script>

@endsection

