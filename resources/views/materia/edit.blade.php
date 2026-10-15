<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Editar Materia</h1>
    <a href="{{ route('materia.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <form action="{{ route('materia.update', $materia->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nombre de la Materia:</label>
            <input type="text" name="nombre" class="form-control" value="{{ $materia->nombre }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Créditos:</label>
            <input type="number" name="creditos" class="form-control" value="{{ $materia->creditos }}" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Profesor:</label>
            <input type="text" name="profesor" class="form-control" value="{{ $materia->profesor }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar Materia</button>
    </form>
</body>
</html>