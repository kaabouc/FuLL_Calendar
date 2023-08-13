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
                        color: '{{ $event->color }}',
                        icon: '{{ asset('storage/'.$event->categorie->icon)}}',
                    
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
                eventRender: function(info) {
                    if (info.event.extendedProps.icon) {
                        var iconElement = document.createElement('img');
                        iconElement.src = info.event.extendedProps.icon;
                        iconElement.classList.add('event-icon','miniature-icon');
                        iconElement.style.backgroundColor = info.event.color;
                        info.el.querySelector('.fc-title').prepend(iconElement);
                    }
                    
                    


                }
          
            
            // Ajoutez ici d'autres options de configuration du calendrier selon vos besoins
        });

        calendar.render();
    });
</script>
<style>
    /* Importez le style CSS de miniature-icon ici */
    .miniature-icon {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
            animation: spin 5s linear infinite;
         /* Supprimez la barre bleue de sélection */
        }

        /* Définissez l'animation "spin" */
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        .fc-event {
            outline: none;
            background-color: transparent;
            border-color: transparent;
            color: #000;
        }

</style>

@endsection

