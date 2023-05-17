<?php

$a = [];
for($i=0;$i<1000000; $i++){
    $a[$i] = ["hello"];
}
echo "<p>".memory_get_usage(true)."</p>";
echo time();
?>