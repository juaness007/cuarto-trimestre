<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="calculadora.php" method='POST'>
        <input type="number" name='numero1' placeholder="Dato1">
        <input type="number" name='numero2' placeholder="Dato2">
        <select name="opciones" value="opciones">
            <option value="suma">suma</option>
            <option value="resta">resta</option>
            <option value="multiplicacion">multiplicacion</option>
            <option value="division">division</option>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>