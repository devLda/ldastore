<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_7.php" method="post" class="border border-primary col-5 m-auto p-2" >
<div class = "form-group">
        <label>Nhập x: </label> <input type="number" name="x" value="" class="form-control">
    </div>
    <div>
        <input id="Kiemtra" type="submit" name="btn" value="Kiểm tra" class = "btn btn-primary">   
        <label id='alert' style="display:block;"></label>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {  
        $a = $_POST['x'];
        if ($a > 0) {
            $str = '';
            for ($i = 1; $i <= $a; $i++) { 
                if ($a % $i == 0) {
                    $str = $str.(string)$i."&nbsp;&nbsp;&nbsp;&nbsp;";
                }
            }
            echo  "<p style='display:none;' id='uoc'> Các ước số của số nguyên của ".$a." là:&nbsp;&nbsp;&nbsp;&nbsp;".$str." </p>" ;
        }
    }
?>

<script>
        var x = document.getElementById('uoc').innerHTML
        document.getElementById('alert').innerHTML = x
    </script>