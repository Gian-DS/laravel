<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Ruta 1</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            background: linear-gradient(to right, #f8cdd1, #91dcd0); /* Fondo degradado */
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
        }
        .ruta3{
            background-color: #91dcd0; 
            height: 50%;
            width: 50%;
            padding: 1em; 
            border-style: solid; 
            color: #000000;
            border-radius: 10%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            align-items: center;
            box-shadow: 5px 5px 5px 5px black;
        }
        h1 {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class='ruta3'>
        <h1>Sus numeros son los siguientes:<br> <?php echo $result?> <br></h1>
    </div>
</body>
</html>