<script>
	$(document).ready(function() {
			var colorOrig=$("#transmenu ul li").css('background-color');

		$("#transmenu ul li").hover(
			function() {
				//mouse over
				$(this).css('background', '#FFFFFF');
				$(this).children('a').css('color','#000000');
			}, function() {
				//mouse out
				$(this).css('background', colorOrig);
				$(this).children('a').css('color','#FFFFFF');
			}
		);
		
        
	});
</script>
<div id="transmenubackground">
	<div id="transmenu">
		<ul style="width: 100%">
				<!-- <li><a href="index.php?idp=1">HOME</a></li> -->
				<li><a href="index.php?idp=3">3D</a></li>
				<li><a href="index.php?idp=4">AUTOCAD</a></li>
				<li><a href="index.php?idp=5">PHOTOSHOP&ILUSTRATOR</a></li>
				<li class="last"><a href="index.php?idp=6">RESUME</a></li>
		</ul>
	</div>
</div>
