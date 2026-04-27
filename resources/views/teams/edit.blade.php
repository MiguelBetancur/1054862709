<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body> 
    <div class="container text-center">
        <h1>Vista de Editar</h1>
        <form action="{{route('teams.update', $teams->id)}}" method="post">
            @csrf
            @method ('put')
            <div class="input-group mb-3">
                <label class="input-group-text" for="name">Nombre: </label>
                <input type="text" class="form-control" id="name" name="nombre" value="{{$teams->name}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="created_date">Fecha: </label>
                <input type="date" class="form-control" id="created_date" name="fecha_creada" value="{{$teams->date}}">
            </div>
            <div class="input-group mb-3">
                <label class="input-group-text" for="is_active">Está Activo: </label>
                <input type="radio" name="esta_activo" id="is_active value="{{$teams->is_active}}">SI
                <input type="radio" name="esta_activo" id="is_active value="{{$teams->is_active}}">NO
            </div>
            <button type="submit" class="btn btn-primary">Actualizar equipo</button>
        </form>
    </div>
</body>
</html>

