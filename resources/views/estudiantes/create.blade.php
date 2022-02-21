<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insertar</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style>
        h1{
            text-align: center;
            color: white
        }
        body{
            background: #3E484A;
        }
    </style>
</head> 
<body>
    <h1>{{$Titulo}}</h1><br>
    <div class="d-flex justify-content-center">
    <form action="../estudiantes" method="POST">
        @csrf
        <input class="form-control" type="text" name ="Nombre" placeholder="Nombre"><br>
        <input class="form-control" type="text" name ="Telefono" placeholder="Telefono"><br>
        <input class="form-control" type="text" name ="Direccion" placeholder="Direccion"><br>
        <input class="form-control" type="text" name ="Nota1" placeholder="Nota Actividad 1"><br>
        <input class="form-control" type="text" name ="Nota2" placeholder="Nota Actividad 2"><br>
        <input class="form-control" type="text" name ="Nota3" placeholder="Evaluacion"><br>
        <div class="input-group">
            <span class="input-group-text">Observaciónes</span>
            <textarea class="form-control" aria-label="With textarea" name="Observaciones"></textarea>
          </div><br>
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-success">Registrar</button>
        <div>
    </form>
    </div>
    <script src="../../js/js/bootstrap.bundle.min.js"></script>
</body>
</html>


