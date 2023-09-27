<!-- view.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Lista de Productos</title>
</head>

<body>
    <h1>Lista de Productos</h1>
    <ul>
        @foreach ($products as $product)
            <li> {{ $product->id }} : {{ $product->name }} </li>
        @endforeach
    </ul>

    <h2>Agregar Nuevo Producto</h2>
    <form action="/add-product" method="POST">
        @csrf
        <input name="product" placeholder="Nombre del producto" type="text" />
        <input type="submit" value="Agregar" />
    </form>
</body>

</html>
