<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_3.php" method="post" class="border border-primary col-5 m-auto p-2">
    <div class="form-group">
        <label>Nhập x: </label> <input name="x" type="number" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Nhập n: </label> <input name="n" type="number" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Biểu thức : </label> <img style="width:100%;height:60px;" src="..\img\bt3.png" alt="bt3">
    </div>
    <div class="form-group">
        <label>Kết quả: </label> <input id="kq" type="text"class="form-control" readonly/>
    </div>
    <div class="form-group">
        <input name="btn" type="submit" value="Tính" class="btn btn-primary"/> 
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $x = $_POST['x'];
        $n = $_POST['n'];
        $sum = 0.0;
        $p = 1;
        for($i = 1; $i<=$n; $i++){
            $p *= $i;
            $sum += (pow($x,$i)*1.0)/$p;
        }
        echo '<p style="display:none;" id="sum">'.$sum.'</p>';
    }
    ?>
    
    <script>
        var x = document.getElementById('sum').innerHTML
        document.getElementById('kq').value = x
    </script>