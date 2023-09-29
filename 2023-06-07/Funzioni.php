<?php

function hello(string $name)
{
printf("Hello %s" , $name);
}

hello('Alberto' ); // prints 'Hello Alberto'
function hi(string $name): string
{
return sprintf("Hello %s" , $name);
}
echo hi("\nAlberto" ); // prints 'Hello Alberto'

echo date("\nH:m:s");




