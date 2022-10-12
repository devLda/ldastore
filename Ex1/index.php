<link rel="stylesheet" href=".\css\style.css">
<link href=".\css\bootstrap.min.css" rel="stylesheet">
<link rel="text/javascript" src=".\js\jquery-3.6.1.min.js">
<div class="header">
  <div class="left">
      <input type="text" id="name" class="form" value="Họ tên: Lê Đức Anh" disabled>
      <input type="text" id="department" class="form" value="Khoa: Công nghệ thông tin" disabled>  
      <input type="text" id="class" class="form" value="Lớp: CNTT2" disabled>  
      <input type="text" id="session" class="form" value="Khóa: 60" disabled>
  </div>
  <div class="right">
    <form>
      <input type="search" class="search" placeholder="Tìm kiếm..."> 
      <img onClick="change('welcome')" class="imgheader" src=".\img\anhbia.jpg" alt="anhbia"> </input>
    </form>
  </div>
</div>

<div class="content">
      <h5>Chào mừng bạn đến với website tìm hiểu PHP</h5>
</div>

<div class="body">
  <div class="select" style="">
    <h3>Bài tập PHP</h3>
    <ul>
        <li><p onClick = "change('bai_1')" >Bài tập 1</p></li>
        <li><p onClick = "change('bai_2')" >Bài tập 2</p></li>
        <li><p onClick = "change('bai_3')" >Bài tập 3</p></li>
        <li><p onClick = "change('bai_4')" >Bài tập 4</p></li>
        <li><p onClick = "change('bai_5')" >Bài tập 5</p></li>
        <li><p onClick = "change('bai_6')" >Bài tập 6</p></li>
        <li><p onClick = "change('bai_7')" >Bài tập 7</p></li>
        <li><p onClick = "change('bai_8')" >Bài tập 8</p></li>
        <li><p onClick = "change('bai_9')" >Bài tập 9</p></li>
        <li><p onClick = "change('bai_10')" >Bài tập 10</p></li>
        <li><p onClick = "change('bai_11')" >Bài tập 11</p></li>
    </ul>
</div>

<div class="main">
      <iframe id="iframeMain" src=".\BaiTap\welcome.php" title="Bai tap"></iframe>
  </div>
</div>

<script>
    function change(x){
        let link = ".\\BaiTap\\"+ x + ".php";
        document.getElementById("iframeMain").src = link;
    }
</script>