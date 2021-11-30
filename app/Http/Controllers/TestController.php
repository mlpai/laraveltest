<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sorting()
    {
        # [100, 78, 33, 11, 5, 0] - Change direction of the array without using sort function.
        $arr  = [100, 78, 33, 11, 5, 0];

        $newArr = [];

        for($i = count($arr) -1 ; $i >= 0; $i--){
            array_push($newArr, $arr[$i]);
        }

        return $newArr; //Reverse of the $arr [0, 5, 11, 33, 78, 100];
    }

    public function ascSort()
    {
        $arr2  = [51, 5, 78, 88, 6, 33];

        $newArr = [];

        foreach($arr2 as $value){
            $val = min($arr2);
            array_push($newArr, $val);
            unset($arr2[array_search($val,$arr2)]);
        }

        return $newArr;

    }
}
