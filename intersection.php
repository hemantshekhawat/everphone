<?php
/**
 * Created by PhpStorm.
 * User: hemant.singh
 * Date: 11/05/19
 * Time: 23:05
 */

$arr1 = [1 => true, 3 => true, 5 => true];
$arr2 = [2, 3, 4, 5];

$result = [];
//for ($i = 0; $i < count($arr1); $i++) {
    for ($j = 0; $j < count($arr2); $j++) {
        if(array_key_exists($arr2[$j],$arr1)){
            array_push($result, $arr2[$j]);
        }
//        if ($arr1[$i] == $arr2[$j]) {
//            array_push($result, $arr1[$i]);
//        }
    }
//}




print_r($result);