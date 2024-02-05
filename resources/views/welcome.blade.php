<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel dc comics</title>
    @vite('resources/js/app.js')
</head>

<body>
    <!--contenitore-->
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
        <div class="card p-1">
            <div class="p-1">
                {{$comic->title}}
            </div>
            <div class="d-flex justify-content-center my-3">
                <div class="img">
                    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                </div>
            </div>
            
            <ul class="py-2">
                <li>
                    <span class="pl-2">Prezzo: </span>{{$comic->price}}
                </li>
                <li>
                    <span class="pl-2">Data di uscita: </span>{{$comic->sale_date}}
                </li>
                <li>
                    <span class="pl-2">Serie: </span>{{$comic->series}}
                </li>
                <li>
                    <span class="pl-2">Genere: </span>{{$comic->type}}
                </li>
            </ul>
            <div class="d-flex">
                <!--show link-->
                <a class="me-4" href="{{route('comics.show', $comic->id)}}">visualizza</a>
                <!--/show link-->
                
                <!--edit link-->
                <a class="me-4" href="{{route('comics.edit', $comic->id)}}"> modifica</a>
                <!--/edit link-->

                <!--destroy-->
                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                    @csrf

                    <!--richiamiamo il metodo-->
                    @method('DELETE')
                    <input type="submit" value="Cancella">
                </form>
                <!--/destroy-->
            </div>

        </div>
        @endforeach  
        
    </div>
    <!--/contenitore-->

    <!-- contenitore bottone-->
    <div class="d-flex justify-content-center mb-2">

        <!--bottone-->
        <button class="primary-btn">
        <a href="{{route('comics.create')}}"> aggiungi comic</a>
        </button> 
        <!--/bottone-->
    </div>
    <!--/contenitore bottone-->
       
</body>

</html>