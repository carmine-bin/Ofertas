<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Oferta</title>
</head>
<body>
    <h1>Detalles de la Oferta</h1>
    <a href="{{ route('ofertas.index') }}">Volver a la lista</a> | 
    <a href="{{ route('ofertas.edit', $oferta) }}">Editar esta oferta</a>
    <hr>

    <ul>
        <li><strong>ID:</strong> {{ $oferta->id }}</li>
        <li><strong>Título:</strong> {{ $oferta->titulo }}</li>
        <li><strong>Vigencia:</strong> {{ $oferta->vigencia }}</li>
        <li><strong>Tienda:</strong> {{ $oferta->tienda }}</li>
        <li><strong>Precio Original:</strong> ${{ $oferta->precio_original }}</li>
        <li><strong>Precio con Descuento:</strong> ${{ $oferta->precio_descuento }}</li>
        <li><strong>Creado el:</strong> {{ $oferta->created_at }}</li>
    </ul>
</body>
</html>