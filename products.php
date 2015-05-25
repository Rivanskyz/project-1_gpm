<?php
	include 'header.php';
?>
    <div class="main">
    	<div class="sidebar">
        	<div class="subtitle1_2">
            our products
            </div>

<?php
$q=mysql_query('select * from products');
while($row=mysql_fetch_array($q)){
	echo '
            	<div class="subtitle2_1">
                <a href="products.php?no='.$row["No_Products"].'">'.$row["Nama"].'</a>
                </div>
			';
}
?>
        </div>

<?php
if(!empty($_GET)){
$no=$_GET['no'];
$q=mysql_query("select * from Products where No_Products='$no'");
$row=mysql_fetch_array($q);
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Nama"].'
            </div>
            
            <div class="desc">
 					<img src="'.$row["Img1"].'" width="850px"/></a>
					
					'.$row["Desc"].'
			</div>
       </div>
	';
	
	
}else{
$q=mysql_query('select * from Products');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Nama"].'
            </div>
            
            <div class="desc">
 					<img src="'.$row["Img1"].'" width="850px"/></a>
					
					'.$row["Desc"].'
			</div>
       </div>
	';
	}
}
?>
    </div>
<?php
	include 'footer.php';
?>