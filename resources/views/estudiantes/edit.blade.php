<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        h1{
            text-align: center;
            color: white
        }
        body{
            background: #3E484A;
        }
        label{
            color: white
        }
    </style>
</head> 
<body>
    <h1>{{$Titulo}}</h1><br>
    <div class="d-flex justify-content-center">
    <form action="{{URL::to("estudiantes/".$Estudiante->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name ="Nombre" value="{{$Estudiante->Nombre}}"><br>
        <label for="Telefono">Telefono</label>
        <input class="form-control" type="text" name ="Telefono" value="{{$Estudiante->Telefono}}"><br>
        <label for= "Direccion">Direccion</label>
        <input class="form-control" type="text" name ="Direccion" value="{{$Estudiante->Direccion}}"><br>
        <label for= "Direccion">Actividad 1</label>
        <input class="form-control" type="text" name ="Nota1" value="{{$Estudiante->Nota1}}"><br>
        <label for= "Direccion">Actividad 2</label>
        <input class="form-control" type="text" name ="Nota2" value="{{$Estudiante->Nota2}}"><br>
        <label for= "Direccion">Evaluacion</label>
        <input class="form-control" type="text" name ="Nota3" value="{{$Estudiante->Nota3}}"><br>
        <div class="input-group">
            <span class="input-group-text">Observaciónes</span>
            <textarea class="form-control"  aria-label="With textarea" name="Observaciones">{{$Estudiante->Observaciones}}</textarea>
        </div><br>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    </div>
    <script src="../../js/js/bootstrap.bundle.min.js"></script>
</body>
</html>
