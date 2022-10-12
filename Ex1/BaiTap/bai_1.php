<?php
    echo 'Bài 1: In các số lẻ, số chẵn từ 1 đến 50 <br/>';
    echo 'Các số lẻ từ 1 đến 50: <br/>';
    for($i = 1; $i < 50; $i++){
        if ($i % 2 != 0) 
        echo $i.'&nbsp;&nbsp;&nbsp;&nbsp;';
    }
    echo '<br/>Các số chẵn từ 1 đến 50:<br/>';
    for($i = 1; $i < 50; $i++){
        if ($i % 2 == 0) 
        echo $i.'&nbsp;&nbsp;&nbsp;&nbsp;';
    }
?>
