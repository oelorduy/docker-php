<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Evaluativa 2</title>
    <style>
        h1 {
            text-align: center; 
            color:rgb(17, 1, 244); 
        }
        img {
            display: block;
            margin: 20px auto;
        }

        p {
            text-align: center;
            text-indent: 30px; 
            margin-top: 10px;
        }

        .imagenes-container {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-top: 20px;
        }

        .imagenes-container img {
            width: 150px; 
            height: auto; 
        }


    </style>

</head>
<body>
    <h1><?php echo "Hola, Mundo desde docker" ?></h1>

    <p class="subtitulo">Actividad evaluativa 2</p>

    <img src="UTB.png" alt="UTB" width="300">

    <p>Ever Bravo Vergara</p>
    <p>German Vargas Rodríguez </p>
    <p>Orlando Lorduy Ruiz</p>

    <div class="imagenes-container">
        <img src="github.png" alt="github">
        <img src="jenkins.png" alt="jenkins">
        <img src="docker.png" alt="docker">
        <img src="kubernetes.png" alt="kubernetes">
        <img src="terraform.png" alt="terraform">
    </div>

</body>
</html>