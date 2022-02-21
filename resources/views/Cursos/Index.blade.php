<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;   
        }
    </style>
</head> 
<body>
    <h1>{{$Titulo}}</h1><br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Codigo</th>
                <th scope="col">Precio</th>
                <th scope="col">Accion</th>
              </tr>
        </thead>
        <tbody>
            @foreach ($datos as $d)
            <tr>
                <td>{{$d->id}}</td>
                <td>{{$d->Nombre}}</td>
                <td>{{$d->Codigo}}</td>
                <td>{{$d->Precio}}</td>
                <td>
                <form action="{{URL::to('Cursos/'.$d->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                    <a class="btn btn-outline-warning" href="{{URL::to('Cursos/'.$d->id.'/edit')}}" role="button">Editar</a>
                    <a class="btn btn-outline-success" href="#" role="button">Ver Diagrama</a>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">
        <a class="btn btn-success" href="{{URL::to('Cursos/create')}}" role="button">Agregar un Curso</a>
     </div>
      <script src="../../js/js/bootstrap.bundle.min.js"></script>
</body>
</html>