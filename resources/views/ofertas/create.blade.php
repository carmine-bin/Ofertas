<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Oferta</title>
</head>
<body>
    <h1>Agregar Nueva Oferta</h1>
    <a href="{{ route('ofertas.index') }}">Volver a la lista</a>
    <hr>

    <form action="{{ route('ofertas.store') }}" method="POST">
        @csrf
        <label>Título: <input type="text" name="titulo" required></label><br><br>
        <label>Vigencia: <input type="date" name="vigencia" required></label><br><br>
        <label>Tienda: <input type="text" name="tienda" required></label><br><br>
        <label>Precio Original: <input type="number" step="0.01" name="precio_original" required></label><br><br>
        <label>Precio Descuento: <input type="number" step="0.01" name="precio_descuento" required></label><br><br>
        <button type="submit">Guardar Oferta</button>
    </form>
</body>
</html>