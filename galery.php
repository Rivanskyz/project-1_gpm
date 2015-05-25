<?php
	include 'header.php';
?>
<?php
if(!empty($_GET)){
$no=$_GET['no'];
$q=mysql_query("select * from Galery where No='$no'");
$row=mysql_fetch_array($q);
	echo '
        <div class="galery1">
        	
			<div class="subtitle1">
            '.$row["Title"].'
            </div>
			<a href="galery.php">
			<img src="'.$row["Img1"].'" width="1200px"/></a>
			</a>		
			</div>
			<center><h2><a href="galery.php">Back</a></h2></center>
       </div>
	';
	
	
}else{
$q=mysql_query('select * from Galery');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="galery">
			<a href="galery.php?no='.$row["No"].'">
            <img src="'.$row["Img1"].'" width="590px"/></a>
			</a>
			<div class="subtitle1_1">
            '.$row["Title"].'
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