<?php
$numeri = [1,3,5,2,4,6];
$i = 0;

//                                                                  marge sort
function mergeSort(&$arr, $left, $right) {
    if ($left < $right) {
        $mid = floor(($left + $right) / 2);
        mergeSort($arr, $left, $mid);
        mergeSort($arr, $mid + 1, $right);
        merge($arr, $left, $mid, $right);
    }
}

function merge(&$arr, $left, $mid, $right) {
    $n1 = $mid - $left + 1;
    $n2 = $right - $mid;
    $L = array();
    $R = array();
    for ($i = 0; $i < $n1; $i++) {
        $L[$i] = $arr[$left + $i];
    }
    for ($j = 0; $j < $n2; $j++) {
        $R[$j] = $arr[$mid + 1 + $j];
    }
    $i = 0;
    $j = 0;
    $k = $left;
    while ($i < $n1 && $j < $n2) {
        if ($L[$i] <= $R[$j]) {
            $arr[$k] = $L[$i];
            $i++;
        } else {
            $arr[$k] = $R[$j];
            $j++;
        }
        $k++;
    }
    while ($i < $n1) {
        $arr[$k] = $L[$i];
        $i++;
        $k++;
    }
    while ($j < $n2) {
        $arr[$k] = $R[$j];
        $j++;
        $k++;
    }
}

//  ---------------------------------------------------------------- quicksort
function quickSort($array) {
    $length = count($array);
    if ($length <= 1) {
        return $array;
    }
    
    $pivot = $array[0];
    $left = $right = [];
    
    for ($i = 1; $i < $length; $i++) {
        if ($array[$i] < $pivot) {
            $left[] = $array[$i];
        } else {
            $right[] = $array[$i];
        }
    }
    
    return array_merge(quickSort($left), [$pivot], quickSort($right));
}

//  ---------------------------------------------------------------- heapsort
function heapsort(&$Array, $n) {
    for($i = (int)($n/2); $i >= 0; $i--) {
      heapify($Array, $n-1, $i);
    }
    for($i = $n - 1; $i >= 0; $i--) {
      $temp = $Array[$i];
      $Array[$i] = $Array[0];
      $Array[0] = $temp;
      heapify($Array, $i-1, 0);
    }
  }
  function heapify(&$Array, $n, $i) {
    $max = $i;
    $left = 2*$i + 1;
    $right = 2*$i + 2;
    if($left <= $n && $Array[$left] > $Array[$max]) {
      $max = $left;
    }
    if($right <= $n && $Array[$right] > $Array[$max]) {
      $max = $right;
    }
    if($max != $i) {
      $temp = $Array[$i];
      $Array[$i] = $Array[$max];
      $Array[$max] = $temp;
      heapify($Array, $n, $max); 
    }
  }



$array = [];
for ($i = 0; $i < 100000; $i++) {
    $array[] = rand(0, 1000); 
}
$n = count($array);
$start_time = microtime(true);
quickSort($array);
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";

$start_time = microtime(true);
mergeSort($array, 0, $n - 1);
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";

$start_time = microtime(true);
heapsort($array, $n );
$end_time = microtime(true);
$execution_time = ($end_time - $start_time) * 1000; // tempo di esecuzione in millisecondi
echo "\n".$execution_time."\n";



