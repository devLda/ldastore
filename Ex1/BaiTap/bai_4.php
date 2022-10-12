<link href="..\css\bootstrap.min.css" rel="stylesheet" >
<form action="bai_4.php" method="post" class="border border-primary col-5 m-auto p-2">
    <div class="form-group">
        <label id="NhapX">Nhập x: </label> <input id="x" name="x" type="number" class="form-control"/>
    </div>
    <div class="form-group">
        <input id="nhap" name="btn" type="submit" value="Nhập" class="btn btn-primary"/> 
        <input onclick="change()" id="refresh" style="display:none;" name="btn" type="submit" value="Làm lại" class="btn btn-primary"/> 
    </div>
    <div class="form-group">
        <label id="alert">Nhập x = 0 thì chương trình sẽ dừng lại </label>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        $x = $_POST['x'];
        if($x == 0)
        echo '<p style="display:none;" id="program">Chương trình đã dừng lại</p>';
    }
    ?>
    
    <script>
        var x = document.getElementById('program').innerHTML
        document.getElementById('alert').innerHTML = x
        if(document.getElementById('alert').innerHTML == x){
            document.getElementById('refresh').style.display = 'inline-block';
            document.getElementById('x').style.display = "none";
            document.getElementById('nhap').style.display = "none";
            document.getElementById('NhapX').style.display = "none";
        }
        function change(){
            document.getElementById('x').style.display = "none";
            document.getElementById('nhap').style.display = "none";
            document.getElementById('NhapX').style.display = "block";
        }
    </script>