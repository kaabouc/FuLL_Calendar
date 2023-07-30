<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Votre titre</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link href="https://unpkg.com/@fullcalendar/core/main.css" rel="stylesheet">
    <link href="https://unpkg.com/@fullcalendar/daygrid/main.css" rel="stylesheet">
</head>
<body>

    <div id="calendar"></div>

    <script src="https://unpkg.com/@fullcalendar/core/main.js"></script>
    <script src="https://unpkg.com/@fullcalendar/daygrid/main.js"></script>
    <script src="https://unpkg.com/@fullcalendar/interaction/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'dayGrid', 'interaction' ],
                events: [
                    // Ajoutez ici les données de vos événements depuis la base de données
                    // Vous pouvez les récupérer via une requête AJAX ou directement dans le script si vous les avez déjà dans votre vue
                    {
                        title: 'Événement 1',
                        start: '2023-07-30',
                        end: '2023-07-31'
                    },
                    {
                        title: 'Événement 2',
                        start: '2023-08-01',
                        end: '2023-08-02'
                    }
                ],
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

</body>
</html>
