<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Materia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h1>Detalles de la Materia</h1>
    <a href="{{ route('materia.index') }}" class="btn btn-secondary mb-3">Volver</a>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nombre: {{ $materia->nombre }}</h5>
            <p class="card-text"><strong>Créditos:</strong> {{ $materia->creditos }}</p>
            <p class="card-text"><strong>Profesor:</strong> {{ $materia->profesor }}</p>
        </div>
    </div>
</body>
</html>