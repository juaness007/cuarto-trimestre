<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Marcas comerciales</title>
    <style>
        *{
            padding: 0;
            margin: 0;
        }
        body{
            display: flex;
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;    
            padding: 10px;
            background-color: lightblue;
        }
        form{
            align-content: center;
            font-family: cursive;
            gap: 5px;
            color: black;
            border: solid black;
            padding: 10px;
            background: white;
            border-radius: 20px;
        }
        input{
            font-family: cursive;
            background: rgb(106, 181, 206);
            border: none;
            border-radius: 10px;
            padding: 5px;
            color: white;
        }
    </style>
</head>
<body>
    <form action="{{ route('brand.store') }}" method="POST">
        @csrf
        <label for="">name</label>
        <input type="text" name="name">
        <input type="submit" value="enviar" name="enviar">
    </form>
</body>
</html>