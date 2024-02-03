<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <!--contenitore-->
   <div class="container">

    <!--form-->
        <form action="{{route('comics.store')}}" method="POST">
        <h1 class="text-center">Create new comic</h1>    
        @csrf
        <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Title:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="insert Title" name="title">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Price:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert price" name="price">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Description:</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="insert description" name="description">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Sale Date:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert Sale Date" name="sale_date">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Series:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert series" name="series">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Type:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert type" name="type">
          </div>
          <div class="mb-3">
            <label for="formGroupExampleInput2" class="form-label">Thumb:</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="insert name img" name="thumb">
          </div>
          <input type="submit">
    </form>
    <!--/form-->

   </div>
   <!--/contenitore-->
</body>
</html>