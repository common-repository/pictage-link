<style>

<?php
//import the variables set in config.php
include('config.php');
?>

.piclinks:hover { 

	text-decoration: none; 
	color: #<?php echo $hovercolor ?> ;
	background:transparent;
	font-family: <?php echo $fontstyle ?>;
	line-height: <?php echo $lineheight ?>;
	font-size: <?php echo $fontsize ?>pt;
		
}

.piclinks { 

	font-weight: <?php echo $fontweight ?>; 
	text-decoration: none; 
	color: #<?php echo $linkcolor ?> ;
	font-family: <?php echo $fontstyle ?>;
	line-height: <?php echo $lineheight ?>;
	font-size: <?php echo $fontsize ?>pt;
	
	
}

</style>
