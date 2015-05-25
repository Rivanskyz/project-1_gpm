<?php
	include 'header.php';
?>
   <!-- <div class="slider">
        <div class="container">
			<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/>
			<input type="radio" name="slide" class="radio-nav" id="nav-2"/>
			<input type="radio" name="slide" class="radio-nav" id="nav-3"/><ul class="slide">
			<li class="slide-1">
				<img src="img/slider/1.jpg"/>
				<div class="caption">Charcoal Briquettes</div>
			</li>
			<li class="slide-2">
				<img src="img/slider/2.jpg"/>
				<div class="caption">Wood Pellet</div>
			</li>
			<li class="slide-3">
				<img src="img/slider/3.jpg"/>
				<div class="caption">Sawdust Briquettes</div>
			</li>
			</ul><div class="nav-arrow nav-next">
				<label class="nav-1" for="nav-1">></label>
				<label class="nav-2" for="nav-2">></label>
				<label class="nav-3" for="nav-3">></label>
			</div>
			<div class="nav-arrow nav-prev">
				<label class="nav-1" for="nav-1"><</label>
				<label class="nav-2" for="nav-2"><</label>
				<label class="nav-3" for="nav-3"><</label>
			</div>
		</div>
    </div>-->
    
    <div class="main">
    	<div class="sidebar">
        	<div class="subtitle1_2">
            our products
            </div>

<?php
$q=mysql_query('select * from products order by rand() limit 3');
while($row=mysql_fetch_array($q)){
	echo '
        	<div class="tumbnail">
            	<div class="subtitle2_1">
                '.$row["Nama"].'
                </div>
                <a href="products.php?no='.$row["No_Products"].'"><img src="'.$row["Img"].'" /></a>
            </div>
			';
}
?>
        </div>

<?php
$q=mysql_query('select * from News limit 3');
while($row=mysql_fetch_array($q)){
	echo '
        <div class="content">
        	<div class="subtitle1">
            '.$row["Title"].'
            </div>
            
            <div class="desc">
            <p>'.$row["Post"].'</p>
            </div>
       </div>
	';
}
?>
    </div>
<?php
	include 'footer.php';
?>