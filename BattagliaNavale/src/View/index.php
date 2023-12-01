<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        if(!isset($_SESSION['user'])){
            header('Location: login.html');
        }
        if($_SESSION['user']){
            header('Location: prova.php');
        }
    ?>
    <button><a href="login.html">login</a></button>
</body>
</html>