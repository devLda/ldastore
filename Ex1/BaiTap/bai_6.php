<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_6.php" method="post" class="border border-primary col-5 m-auto p-2" >
<div class = "form-group">
        <label>Nhập x: </label> <input type="number" name="x" value="" class="form-control">
    </div>
    <div>
        <input id="Kiemtra" type="submit" name="btn" value="Tính" class = "btn btn-primary">   
        <label id='alert' style="display:block;"></label>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $a = $_POST['x'];
        $s = 1;
        for ($i=1; $i <= $a; $i++) { 
            $s *= $i;
        }
        echo  "<p style='display:none;' id='gt'>".$a."! có giai thừa bằng ".$s."</p>" ;
    }
?>

<script>
        var x = document.getElementById('gt').innerHTML
        document.getElementById('alert').innerHTML = x
    </script>