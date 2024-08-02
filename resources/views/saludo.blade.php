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
            .saludo{
                background-color: #91dcd0; 
                height: 50%;
                width: 50%;
                padding: 0;
                margin: 0; 
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
        <div class='saludo'>
            <h1>Bienvenido estudiante del sena:<br> Tu nombre es: <?php echo $nombre?><br> Tu adso es: <?php echo $adso?><br>
            Tu cédula es: <?php echo $cedula?></h1>
        </div>
    </body>
    </html>