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
<div class="container d-flex justify-content-center">
    <div>
        <div class="py-5">
            <strong class="pe-2">Titolo:</strong>{{$comic->title}}
        </div>
        <div>
            <strong class="pe-2">Descrizione:</strong>{{$comic->description}}
        </div> 
    </div>

</div>
</body>
</html>