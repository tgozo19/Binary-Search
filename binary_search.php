<?php

    function binary_search($list, $n){
        $low = 0;
        $high = count($list) - 1;
        $mid = 0;

        while ($low <= $high) {
            $mid = floor(($high + $low) / 2);

            if ($list[$mid] < $n) {
                $low = $mid + 1;
            }elseif ($list[$mid] > $n) {
                $high = $mid - 1;
            }else{
                return $mid;
            }
        }

        return -1;
    }

    $list1 = [12, 24, 32, 39, 45, 50, 54];
    $n = 45;

    $result = binary_search($list1, $n);

    if ($result != -1){
        print("Element Found");
    }else{
        print("Element not Found");
    }


?>