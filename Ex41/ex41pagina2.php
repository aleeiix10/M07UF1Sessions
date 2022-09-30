<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <p>Nombre Enregistat</p>
    <?php
        session_start();
        $_SESSION['ocult'] = $_GET['ocult'];
    ?>
    <a href = "./ex41pagina3.php">Endevinar</a>
</body>
</html>