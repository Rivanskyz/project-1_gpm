<?php
	include 'header.php';
?>
    <div class="main">
    	<div class="sidebar">
        	<div class="subtitle1_2">
            our products
            </div>

<?php
$q=mysql_query('select * from products order by rand() limit 5');
while($row=mysql_fetch_array($q)){
	echo '
        	<div class="tumbnail">
            	<div class="subtitle2_1">
                '.$row["Nama"].'
                </div>
                <a href="#"><img src="'.$row["Img"].'" /></a>
            </div>
			';
}
?>
        </div>

<?php
$q=mysql_query('select * from Contact');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Title"].'
            </div>
            
            <div class="desc">
            	<div class="contact">
					<a href="'.$row["Link"].'"><img src="'.$row["Logo"].'"/></a>
					<div class="uname">
						'.$row["Desc"].'
					</div>
				</div>
            </div>
       </div>
	';
}
?>
    </div>
<?php
	include 'footer.php';
?>