<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PRINCIPAL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    
<div class="container mt-5 d-flex justify-content-center">


    <form method="POST" action="{{url('user')}}" style="width: 60%">
      @csrf
        <div class="form-group mt-2">
          <label for="exampleInputEmail1">Nickname</label>
          <input type="text" class="form-control" id="nickname" name="nickname">
        </div>
        <div class="form-group mt-2">
          <label for="exampleInputPassword1">Nombres y apellidos</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>

        <div class="form-group mt-2">
            <label for="exampleInputPassword1">Email</label>t
            <input type="email" class="form-control" id="email" name="email">
          </div> m

          <div class="form-group mt-2">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" class="form-control" id="telefono" name="telefono">
          </div>

          <div class="form-group mt-2">
            <label for="exampleInputPassword1">Edad</label>
            <input type="text" class="form-control" id="edad" name="edad">
          </div>

          <div class="form-group mt-2 mb-2">
            <label for="exampleInputPassword1">Fecha de nacimiento</label>
            <input type="date" class="form-control" id="fecha" name="fecha">
          </div>
          
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

    </div>

</body>
</html>