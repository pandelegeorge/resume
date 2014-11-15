<?php
$i = 0;
$normalimage=array();
$folder = "img/firstpage/";
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
<div class="container">
	<div id="slides">
		<?php
			foreach ( $normalimage as $value ) {
		?>
				<img src="<?php echo $folder; ?>image<?php echo $value; ?>.jpg">
		<?php
			}
		?>
	</div>
<div>
<script src="js/jquery.slides.min.js"></script>
<script>
$(function() {
  $('#slides').slidesjs({
	width: 600,
	height: 500,
	play: {
		  active: true,
			// [boolean] Generate the play and stop buttons.
			// You cannot use your own buttons. Sorry.
		  effect: "fade",
			// [string] Can be either "slide" or "fade".
		  interval: 3000,
			// [number] Time spent on each slide in milliseconds.
		  auto: true,
			// [boolean] Start playing the slideshow on load.
		  swap: true,
			// [boolean] show/hide stop and play buttons
		  pauseOnHover: true,
			// [boolean] pause a playing slideshow on hover
		  restartDelay: 2500
			// [number] restart delay on inactive slideshow
	}
  });
});
</script>