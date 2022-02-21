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
    <form action="{{URL::to("Cursos/".$Curso->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="Nombre">Nombre</label>
        <input class="form-control" type="text" name ="Nombre" value="{{$Curso->Nombre}}"><br>
        <label for="Telefono">Codigo</label>
        <input class="form-control" type="text" name ="Codigo" value="{{$Curso->Codigo}}"><br>
        <label for= "Direccion">Precio</label>
        <input class="form-control" type="text" name ="Precio" value="{{$Curso->Precio}}"><br>
        <label for= "Direccion">id Curso</label>
        <input class="form-control" type="text" name ="id_E" value="{{$Curso->id_E}}"><br>
      
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
    </div>
    <script src="../../js/js/bootstrap.bundle.min.js"></script>
</body>
</html>