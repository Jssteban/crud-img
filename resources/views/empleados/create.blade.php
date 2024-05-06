<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hola desde create</title>
</head>
<body>
    <form action="{{url('/empleado')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <br><br>
        <label for="nombre">Nombre</label>
        <br>
        <input type="text" name="nombre">
        <br><br>
        <label for="apellido_paterno">apellido paterno</label>
        <br>
        <input type="text" name="apellido_paterno">
        <br><br>
        <label for="apellido_materno">apellido materno</label>
        <br>
        <input type="text" name="apellido_materno">
        <br><br>
        <label for="correo">correo</label>
        <br>
        <input type="text" name="correo">
        <br><br>
        <label for="foto">foto de perfil</label>
        <br>
        <input type="file" name="foto">
        <br><br>
        <input type="submit" value="guardar datos">
    </form>
    
    
</body>
</html>