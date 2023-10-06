<?php

$secret = "supersecret";
$pwd = $_POST["pwd"];
$file = $_FILES["file"];


if ($secret !== $_POST["pwd"]) {
    var_dump(http_response_code(401));
    printf("password is incorrect");
    exit;
}
$tmp_name= $file["tmp_name"];
move_uploaded_file($tmp_name,"./upload/" . $file["name"]);
printf("File uploaded successfully");