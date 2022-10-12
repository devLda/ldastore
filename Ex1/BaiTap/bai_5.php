<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_5.php" method="post" class="border border-primary col-5 m-auto p-2" >
    <div class = "form-group">
        <label>Nhập x: </label> <input type="number" name="x" value="" class="form-control">
    </div>
    <div>
        <input id="Kiemtra" type="submit" name="btn" value="Kiểm tra" class = "btn btn-primary">   
        <label id='alert' style="display:block;"></label>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $a = $_POST['x'];
        $s = 0;
        for ($i=1; $i < $a; $i++) { 
            if ($a % $i == 0) {
                $s += $i;
            }
        }
        if ($s == $a) {
            echo  "<p style='display:none;' id='shh'>".$a." là số hoàn hảo</p>" ;
        }
        else {
            echo "<p style='display:none;' id='shh'>".$a." không là số hoàn hảo</p>";
        }
    }
?>

<script>
        var x = document.getElementById('shh').innerHTML
        document.getElementById('alert').innerHTML = x
    </script>