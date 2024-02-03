<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!--contenitore-->
<div class="container d-flex justify-content-center"> <!--utilizzo per centrare la card-->
    
    <div> <!--utilizzo per non affiancare i dati-->

        <!--titolo-->
        <h1>comic: {{$comic->id}}</h1>
        <!--/titolo-->

            <!--card-->
        <div class="card-show">

            <!--titolo-->
            <div class="pb-3">
                <strong class="pe-2">Titolo:</strong>{{$comic->title}}
            </div>
            <!--/titolo-->

            <!--descrizione-->
            <div class="py-3">
                <strong class="pe-2">Descrizione:</strong>{{$comic->description}}
            </div> 
            <!--/descrizione-->
            
        </div>
        <!--/card-->

    </div>
</div>
    <!--/contenitore-->
</body>
</html>