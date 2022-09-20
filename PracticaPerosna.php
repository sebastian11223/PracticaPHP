<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>
    
    <?php
    $nom = "John";
    $cognoms = "Doe";
    $edat = 12;
    $dataNaixement = "12/3/2001";
    $telefon = 29458368;
    $adreçaPostal = "78072";
    $adreçaElectronica = "Prova@gmail.com";
    $treballa = True;
    $alçada = 180;
    ?>
    <form>  
        <h1>Descrivint a John Doe</h1>
        <h2>Les dades de John són</h2>
        <div>
            <ul>
            <li>Es diu: <?php echo $nom ?>  <?php echo $cognoms ?></li>
            <li>Té: <?php echo $edat ?></li>
            <li>Va néixer l'any <?php echo $dataNaixement ?></li>
            <li>El seu telèfon es: <?php echo $telefon ?></li>
            <li>Adreça postal: <?php echo $adreçaPostal ?></li>
            <li>El seu email es: <?php echo  $adreçaElectronica  ?></li>
            <li>Actualment <?php if ($treballa){
               echo "si";

            }else

            echo "no"; ?> treballa</li>
            <li>La seva alçada es: <?php echo $alçada ?>cm</li>
            </ul>
        </div>
    </form>
</body>
</html>