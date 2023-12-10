<!DOCTYPE html>
<html>
    <head>
        <title>posizionamento navi</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    </head>
    <body>
        <script src="build.js"></script>
        <script>;
        buildGrid('colpo(this)');
        $.ajax({
            url: 'http://localhost/php_corso/BattagliaNavale/src/model/getIdGame.php',
            type: 'POST',
            success: function(response) {
                console.log(response);
                const url = 'http://localhost/php_corso/BattagliaNavale/src/View/prova.php?idGame=' + response + '&namePlayer='+<?php echo json_encode($_COOKIE['nome']); ?>;
                console.log(url);
                // copia questo url automaticamente nella clipboard quando si preme un bottone
                var link = document.createElement("button");
                link.setAttribute("type", "button");
                link.textContent = "copia url";
                link.addEventListener('click', function() {
                    navigator.clipboard.writeText(url);
                });
                document.body.appendChild(link);


            },
            error: function() {
                console.log('Si è verificato un errore');
            }
        });
        </script>


    </body>
</html>