<?php   
    echo 'Bài 8: Khởi tạo mảng số nguyên gồm 10 phần tử.Đếm và in ra các phần tử có giá trị âm dương <br><br>';

    $firstEmpty = array(); 
    $secondEmpty = array();
    $thirdEmpty = array();    
    array_push($firstEmpty, 10,2,-5,8,4,-3,-2,1,6,-7);
    $duong = 0;
    $am = 0;
    foreach ($firstEmpty as $key => $value) {
        if ($value > 0) {
            $duong++;
            array_push($secondEmpty, $value);
        }
        elseif ($value < 0) {
            $am++;
            array_push($thirdEmpty, $value);
        }
    }
    echo "Có ", $duong, " số dương trong mảng là: "."<br>";
    foreach ($secondEmpty as $key => $value) {
        echo $value."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    echo "<br><br>Có ", $am, " số âm trong mảng là: "."<br>";
    foreach ($thirdEmpty as $key => $value) {
        echo $value."&nbsp;&nbsp;&nbsp;&nbsp;";
    }
?>