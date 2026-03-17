<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Oferta</title>
</head>
<body>
    <h1>Editar Oferta: {{ $oferta->titulo }}</h1>
    <a href="{{ route('ofertas.index') }}">Volver a la lista</a>
    <hr>

    <form action="{{ route('ofertas.update', $oferta) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título: <input type="text" name="titulo" value="{{ $oferta->titulo }}" required></label><br><br>
        <label>Vigencia: <input type="date" name="vigencia" value="{{ $oferta->vigencia }}" required></label><br><br>
        <label>Tienda: <input type="text" name="tienda" value="{{ $oferta->tienda }}" required></label><br><br>
        <label>Precio Original: <input type="number" step="0.01" name="precio_original" value="{{ $oferta->precio_original }}" required></label><br><br>
        <label>Precio Descuento: <input type="number" step="0.01" name="precio_descuento" value="{{ $oferta->precio_descuento }}" required></label><br><br>
        <button type="submit">Actualizar Oferta</button>
    </form>
</body>
</html>