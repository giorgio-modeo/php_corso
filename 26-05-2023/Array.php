<?php
$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
printf("First day of the week: %s \n", $week[0]);
$foo = [12, 34.2, M_PI, 'Alberto' ];
printf("Last item: %s \n", $foo[3]);
$foo = array(12, 34.2, M_PI, 'Alberto' );
printf("Second element: %.2f \n", $foo[1]);

$foo = ['a', 'b', 'c'];
$foo[3] = 'd'; // ['a', 'b', 'c', 'd']

$foo = ['a', 'b', 'c'];
$foo[] = 'd'; // ['a', 'b', 'c', 'd']

$foo = ['a', [ 'b', 'c' ], 'd'];
printf("%s, %s\n", $foo[0], $foo[1][1]); // a, c

$matrix = [
    [ 5, 7, 9 ],
    [ 4, 3, 8 ],
    [ 7, 5, 6 ]
    ];
    printf ("Elemento [0,0] = %d \n", $matrix[0][0]); // 5
    printf ("Elemento [1,1] = %d \n", $matrix[1][1]); // 3
    printf ("Elemento [2,2] = %d \n", $matrix[2][2]); // 6

$matrix3x2= [
    [1,2,3],
    [4,5,6]
];
$matrix3x2= [
    [$matrix3x2[0][0],$matrix3x2[1][0]],
    [$matrix3x2[0][1],$matrix3x2[1][1]],
    [$matrix3x2[0][2],$matrix3x2[1][2]]
];

var_dump($matrix3x2);


$matrix = [
    [ 5, 7, 9 ],
    [ 4, 3, 8 ],
    [ 7, 5, 6 ]
    ];
print_r($matrix);

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
printf("Giorni della settimana: %d\n", count($week));
printf("Corrente : %d, %s\n", key($week), current($week));
next($week);
printf("Successivo: %d, %s\n", key($week), current($week));
prev($week);
printf("Precedente: %d, %s\n", key($week), current($week));
end($week);
printf("Ultimo : %d, %s\n", key($week), current($week));
reset($week);
printf("Primo : %d, %s\n", key($week), current($week));

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
array_splice($week, 1, 1);
print_r($week);

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
unset($week[1]);
print_r($week);

$week = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];
var_dump($week);

$name = 'Alberto' ;
echo $name[0]; // A
echo $name[1]; // l
echo $name[2]; // b
echo $name[7]; // Error: offset
$name = 'Alberto' ;
echo $name[-1]; // o
echo $name[-2]; // t
echo $name[-3]; // r
echo $name[-7]; // A
echo $name[-8]; // Error: offset

$italianDay = [
    'Mon' => 'Lunedì',
    'Tue' => 'Martedì',
    'Wed' => 'Mercoledì',
    'Thu' => 'Giovedì',
    'Fri' => 'Venerdì',
    'Sat' => 'Sabato',
    'Sun' => 'Domenica'
    ];
printf("Monday è %s in italiano\n", $italianDay['Mon']);
printf("Today is %s in Italian\n", $italianDay[date('D')]);

