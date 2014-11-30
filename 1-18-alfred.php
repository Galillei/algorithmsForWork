<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/30/14
 * Time: 3:57 PM
 * функция max которая возвращает наибольший из элементов, стоящих в позицоиях от i до i+n-1  в целочисленном массиве
 */
function maxi($i,$n)
{
    $array = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];

    if($n==1){
        return ($array[$i]);
    }else{
        $m1 = maxi($i, $n/2);
        $m2 = maxi($i+$n/2, $n/2 );
        if($m1<$m2)
        {
            return $m2;
        }
        return $m1;
    }
}
var_dump(maxi(2,8));
