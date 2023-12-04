<!DOCTYPE html>
<html>
    <head>
        <title>posizionamento navi</title>
    </head>
    <body>
        <?php
        echo "<script>";
        $array = json_decode($_POST['navi']);
        for ($i = 0; $i < count($array); $i++) {
            for ($j = 0; $j < count($array[$i]); $j++) {
                echo(" document.getElementById({$array[$i][$j]}).style.backgroundColor = 'yellow'; ");
            }
        }
        echo "</script>";
        ?>
        <script src="build.js"></script>
        <script>buildGrid('colpo(this)');
            // document.getElementById($array[$i][$j]).style.backgroundColor = "blue";
            <?php 
            ?>
        </script>


    </body>
</html>