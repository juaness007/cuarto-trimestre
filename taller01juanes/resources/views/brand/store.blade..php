<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas comerciales</title>
</head>
<body>
    <form action="{{ route('brand.store')}}" method="POST">
        <label for="">Nombre de la marca</label>
        <input type="text" name="brand_name">
        <input type="submit" value="Enviar" name="Enviar">
    </form>    
</body>
</html>