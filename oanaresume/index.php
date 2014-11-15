<?php
$idp = $_GET['idp'];
if (empty($idp)) {
	$idp = 3;
}
?>
<html>
<head>
<link rel="stylesheet" href="css/header.css">
<?php
if($idp==1){
?>
<link rel="stylesheet" href="css/font-awesome.min.css">
<?php
}
?>
<style>
	body{
		padding:0;
		margin:0;
		background-image: url(backgroundcvoana.jpg);
		background-size: cover;
		filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='backgroundcvoana.jpg',sizingMethod='scale')
		background-color:#000000;
		background-position: 50% 50%;
		background-repeat: no-repeat no-repeat;
		text-align: center;
	}
	.container {
	  padding-top: 10px;
      margin: 0 auto
	 
    }
	
	#slides {
	  display: none
	}

	#slides .slidesjs-navigation {
	  margin-top:5px;
	}
	a.slidesjs-next,
	a.slidesjs-previous,
	a.slidesjs-play,
	a.slidesjs-stop {
	  background-image: url(img/btns-next-prev.png);
	  background-repeat: no-repeat;
	  display:block;
	  width:12px;
	  height:18px;
	  overflow: hidden;
	  text-indent: -9999px;
	  float: left;
	  margin-right:5px;
	}

	a.slidesjs-next {
	  margin-right:10px;
	  background-position: -12px 0;
	}

	a:hover.slidesjs-next {
	  background-position: -12px -18px;
	}

	a.slidesjs-previous {
	  background-position: 0 0;
	}

	a:hover.slidesjs-previous {
	  background-position: 0 -18px;
	}

	a.slidesjs-play {
	  width:15px;
	  background-position: -25px 0;
	}

	a:hover.slidesjs-play {
	  background-position: -25px -18px;
	}

	a.slidesjs-stop {
	  width:18px;
	  background-position: -41px 0;
	}

	a:hover.slidesjs-stop {
	  background-position: -41px -18px;
	}

	.slidesjs-pagination {
	  margin: 7px 0 0;
	  float: right;
	  list-style: none;
	}

	.slidesjs-pagination li {
	  float: left;
	  margin: 0 1px;
	}

	.slidesjs-pagination li a {
	  display: block;
	  width: 13px;
	  height: 0;
	  padding-top: 13px;
	  background-image: url(img/pagination.png);
	  background-position: 0 0;
	  float: left;
	  overflow: hidden;
	}

	.slidesjs-pagination li a.active,
	.slidesjs-pagination li a:hover.active {
	  background-position: 0 -13px
	}

	.slidesjs-pagination li a:hover {
	  background-position: 0 -26px
	}

	#slides a:link,
	#slides a:visited {
	  color: #333
	}

	#slides a:hover,
	#slides a:active {
	  color: #9e2020
	}

	.navbar {
	  overflow: hidden
	}

	#slides {
	  display: none
	}

	/* For tablets & smart phones */
	@media screen (max-width: 767px) {
	  body {
		padding-left: 20px;
		padding-right: 20px;
	  }
	  .container {
		width: auto
	  }
	}

	/* For smartphones */
	@media screen (max-width: 480px) {
	  .container {
		width: auto
	  }
	}

	/* For smaller displays like laptops */
	@media (min-width: 768px) and (max-width: 1200px) {
	  .container {
		width: 724px
	  }
	}
    @media (min-width: 1200px) and (max-width: 1280px) {
	  .container {
		width: 900px
	  }
	}
	/* For larger displays */
	@media (min-width: 1280px) {
	  .container {
		width: 1200px
	  }
	}
</style>


<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</head>
<body>

	<?php
		include("header.php");
	?>
	
	<?php
			if($idp==1){
   				include("home.php");
			}elseif($idp==3 or $idp==4 or $idp==5){
				include("work.php");
			}elseif($idp==6){
			    include("resume.php");
			}
	?>
	

</body>
</html>