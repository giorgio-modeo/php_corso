<!DOCTYPE html>
<html>
    <head>
        <title>posizionamento navi</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <?php
    if(!isset($_COOKIE['nome'])) {
        header('Location: http://localhost/php_corso/BattagliaNavale/src/View/login.php');
    }
    ?>
    </head>
    <body>
        <script src="build.js"></script>
        <script>
        var url = new URL(window.location.href);
        var namePlayer =document.cookie.split('; ').find(row => row.startsWith('nome')).split('=')[1]
        var nameHost =  url.searchParams.get("namePlayer");
        console.log(nameHost);
        document.cookie = "host="+nameHost +"; path=/";
        
        buildGrid('colpo(this)');


        if (nameHost == namePlayer) {
            console.log("host");
        } else {
            document.getElementById("campo").style.pointerEvents = "none";
            console.log("player");
            $.ajax({
          url: 'http://localhost/php_corso/BattagliaNavale/src/model/setPlayer2.php',
          type: 'POST',
          success: function(response) {
            console.log(response);
          },
          error: function() {
            console.log('Si è verificato un errore');
          }
        });
            
        }



        </script>


    </body>
</html>