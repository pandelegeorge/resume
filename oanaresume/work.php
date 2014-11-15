<script src="lightbox/js/jquery-1.7.2.min.js"></script>
<script src="lightbox/js/lightbox.js"></script>
<link href="lightbox/css/lightbox.css" rel="stylesheet" />
<style>
	#workcenter {
		margin: 0 auto;
		display: table;
		width:960px;
		/* Fallback for web browsers that doesn't support RGBa */
		background-color: rgb(0, 0, 0); 
		/* For IE 5.5 - 7*/
		*zoom: 1;
		filter:progid:DXImageTransform.Microsoft.gradient(gradientType=0,startColorstr=#99000000,endColorstr=#99000000);
		-ms-filter:"progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000)";
		background: transparent;
		/* RGBa with 0.6 opacity */ 
		background-color: rgba(0,0,0,0.6);
		
	}
    #workcenter:not([dummy]) {
    /* IE9 only */
    filter: progid:DXImageTransform.Microsoft.gradient(enabled='false');
	}


</style>
<?php
$i=0;
$normalimage=array();
if($idp==3){
	$folder = "img/threedmax/";
}elseif($idp==4){
	$folder = "img/autocad/";	
}elseif($idp==5){
    $folder = "img/photoshop/";		
}
if ($handle = opendir($folder)) {
    while (false !== ($file = readdir($handle)))
    {
        if (($file != ".") && ($file != ".."))
        {
             if(preg_match("#^image(.*)\.jpg#", $file,$match)){
             	$normalimage[$i]=$match[1];
				$i = $i + 1;
			 }
         }
    }
    closedir($handle);
}
sort($normalimage,SORT_NUMERIC);
?>
<br /><br />
<div id="workcenter">
<table cellpadding="20" cellspacing="0">
<?php
	$i=1;
	foreach ( $normalimage as $value ) {
		if($i%3 == 1){
		   echo "<tr>";
		}
?>
		
		<td><a href="<?php echo $folder; ?>big_image<?php echo $value; ?>.jpg" rel="lightbox[roadtrip]"><img  border="0" src="<?php echo $folder; ?>image<?php echo $value; ?>.jpg" alt="" /></a></td>
<?php
	$i=$i+1;
	}
?>
</table>
</div>