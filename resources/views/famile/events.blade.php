@extends('layouts.admin')
</style>
@section('content')
<div class="col-md-4" >
    <div class="card" style="width: 18rem;">
        <img src="{{ asset('storage/'.$family->Image_famile) }}" class="card-img-top" alt="..." alt="Icône">
       
        <div class="card-body">
          <p class="card-text"> <h2>Famille : {{ $family->Name_famile}}</h2> de email :  {{ $family->Email_famile}} <br>
        
            <h2>user : {{ $user->name}}</h2> prenom : {{ $user->prenom}} <br> de genre : {{ $user->sex}}
        </p>
        </div>
      </div>
    
    
  
</div>


<div class="col-md-8" >
    <div id="calendar"></div>
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

