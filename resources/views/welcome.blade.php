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

    
    
    <div class="container mt-5"> 
        <a class="btn btn-danger" href="{{url('user/create')}}">Crear nuevo</a>
        <div class="table-responsive"> 
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nickname</th>
                <th scope="col">Nombres y apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Edad</th>
                <th scope="col">Fecha de nacimiento</th>
                <th scope="col">idioma</th>
                <th scope="col">pais</th>
                <th scope="col">estado</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($query as $item)
                
                <tr>
                    <th scope="row">1</th>
                    <th>{{$item->nombreUsuario}}</th>
                    <th>{{$item->nombreCompleto}}</th>
                    <th>{{$item->email}}</th>
                    <th>{{$item->Telefono}}</th>
                    <th>{{$item->edad}}</th>
                    <th>{{$item->fechaNacimiento}}</th>
                </tr>
                  
              @endforeach
            </tbody>
          </table>
        </div>
    </div>

</body>
</html>