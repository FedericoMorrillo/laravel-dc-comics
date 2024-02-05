<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>modifica comic</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!--contenitore-->
   <div class="container">

    <!--form-->
        <form action="{{route('comics.update', $comic->id)}}" method="POST">
        <h1 class="text-center">edit comic</h1>    
        @csrf

        @method('PUT')
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="insert Title" name="title" value="{{$comic->title}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Price:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert price" name="price" value="{{$comic->price}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Description:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="insert description" name="description" value="{{$comic->description}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert Sale Date" name="sale_date" value="{{$comic->sale_date}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Series:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert series" name="series" value="{{$comic->series}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Type:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert type" name="type" value="{{$comic->type}}">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Thumb:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert name img" name="thumb" value="{{$comic->thumb}}">
          </div>
          <input type="submit">
    </form>
    <!--/form-->

   </div>
   <!--/contenitore-->
</body>
</html>