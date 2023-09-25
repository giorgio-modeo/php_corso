<?php
$file = fopen("dati.csv" , "r");
$mediaFile = fopen("media.csv" , "w");
echo $mediaFile;
while(($data = fgetcsv($file)) !== false) {
    $media = array_sum($data)/count($data);
    fwrite($mediaFile, number_format($media,4).PHP_EOL);
}
fclose($file);
fclose($mediaFile);