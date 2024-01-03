<!DOCTYPE html>
<html>
 <head>
 <title>Danh sách sản phẩm</title>
 <meta charset="UTF-8" />
  
 <link rel="stylesheet" type="text/css" href="css/index.css" />
 <link rel="stylesheet" type="text/css" href="css/style_common.css" />
 <link rel="stylesheet" type="text/css" href="css/style1.css" />
 </head>
 <body>
 
<div class="container"> 
 
<div class="main">
 <?php include ("dbconnect.php"); $rs = mysql_query("select * from sanpham"); while($row = mysql_fetch_array($rs)){ ?>
 
<div class="view view-first">
 <img src="images/<?php echo $row['hinhanh']; ?>" />
 
<div class="mask">
 
<h2><?php echo $row['tensanpham']; ?></h2>
 
 
 
<?php echo $row['mota']; ?>
 
 <a href="#" class="info">MUA HÀNG</a>
 </div>
 
 </div>
 
  
 <?php } ?> 
 </div>
 
 </div>
 
 </body>
</html>