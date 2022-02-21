<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Notas</title>
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
                <th scope="col">Nombre</th>
                <th scope="col">Actividad 1</th>
                <th scope="col">Actividad 2</th>
                <th scope="col">Evaluacion</th>
              </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$Estudiante->Nombre}}</td>
                <td>{{$Estudiante->Nota1}}</td>
                <td>{{$Estudiante->Nota2}}</td>
                <td>{{$Estudiante->Nota3}}</td>
            </tr>
        </tbody>
      </table>

      <div class="input-group">
        <span class="input-group-text">Observaciónes</span>
        <textarea class="form-control" aria-label="With textarea">{{$Estudiante->Observaciones}}</textarea>
      </div><br>
      <div class="d-flex justify-content-center">
      <a class="btn btn-success" href="{{URL::to('estudiantes')}}" role="button">OK</a>
      </div>
</body>