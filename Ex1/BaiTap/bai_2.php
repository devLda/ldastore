<?php
    echo 'Bài 2: Tính và in tổng các số nguyên tố từ 1 đến 100: <br/><br/>';
    echo 'Các số nguyên tố từ 1 đến 100: <br/>';

    sangnt(1,100);

    function sangnt($dau, $cuoi){
        $check = array();
        $sum = 0;
        for($i = 2; $i <= $cuoi; $i++){
            $check[$i] = true;
        }

        for($i = 2; $i <= $cuoi; $i++){
            if ($check[$i] == true)
                for($j = 2*$i; $j <= $cuoi; $j += $i)
                {    
                    $check[$j] = false;
                }
        }

        for($i = 2;$i <= $cuoi; $i++){
            if ($check[$i] == true){
                $sum += $i;
                echo $i.'&nbsp;&nbsp;&nbsp;&nbsp;';
            }
        }

        echo '<br/>Tổng: '.$sum;
    }
?>