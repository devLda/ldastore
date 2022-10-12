<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_9.php" method="post" class="border border-primary col-5 m-auto p-2" >
<div class = "form-group">
        <label>Nhập số giây: </label> <input type="number" name="x" value="" class="form-control">
    </div>
    <div>
        <input id="Kiemtra" type="submit" name="btn" value="Tính" class = "btn btn-primary">   
        <label id='alert' style="display:block;"></label>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $s = $_POST['x'];
        $h = $m = 0;
        while ($s > 60) {
            if ($s >= 60) {
                $m = $s / 60;
                $m = (int)$m;
                $s = $s % 60;
                
            }
            if ($m >= 60) {
                $h = $m / 60;
                $h = (int)$h;
                $m = $m % 60;
            }
    }
    echo  "<p style='display:none;' id='gt'>".$h." : ".$m." : ".$s."</p>" ;
    }
?>

<script>
        var x = document.getElementById('gt').innerHTML
        document.getElementById('alert').innerHTML = x
    </script>