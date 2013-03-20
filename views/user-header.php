<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Script-Type" content="text/javascript" />

	<!--====================
		STYLESHEETS
	=====================-->
	<link rel="stylesheet" type="text/css" href="public/css/reset.css" media="screen" /> <!-- Reset Styles-->
	<link rel="stylesheet" type="text/css" href="public/css/style.css" media="screen" /> <!-- Main Styles-->
	<link href="public/css/skitter.styles.css" rel="stylesheet" type="text/css" media="all" /> <!-- Skitter Slider Styles-->
	<link href="public/css/colorbox.css" rel="stylesheet" type="text/css" media="screen" /> <!-- Lightbox Image Zoom Styles -->
	
	<!--====================
		JAVASCRIPTS
	=====================-->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script> <!-- JQuery Library -->
	<script type="text/javascript" src="public/js/jquery.easing.1.3.js"></script> <!-- Easing effects -->
	<script src="public/js/jquery.animate-colors-min.js" type="text/javascript"></script> <!-- Animate Slider dots -->
	<script src="public/js/jquery.skitter.js" type="text/javascript"></script> <!-- Skitter Slider -->
	<script src="public/js/jquery.jigowatt.js" type="text/javascript"></script><!-- AJAX Contact Form Submit -->
	<script src="public/js/jquery.colorbox-min.js" type="text/javascript"></script> <!-- Lightbox Image Zoom -->
	
	<!--====== Cufon ======-->
	<script src="public/js/cufon-yui.js" type="text/javascript"></script>
	<script src="public/js/comfortaa.cufonfonts.js" type="text/javascript"></script>
	<script type="text/javascript">
		Cufon.replace('h1, h2, h3, h4, h5, h6, .page_title, .page_title_subhead, .menu_item', { fontFamily: 'Comfortaa', hover: true });
		
		$(document).ready(function(){
		
				$(".article_container").hide();

				$("div.read_more_link").click(function(){
					$(this).toggleClass("active").next().slideToggle("slow");
				});
				
		});
		
		$(document).ready(function(){
		
			//Examples of how to assign the ColorBox event to elements
			$("a[rel='crbox']").colorbox();
			$("a[rel='pf_item']").colorbox();
			$(".video-crbox").colorbox({iframe:true, innerWidth:640, innerHeight:510});
			$(".iframe-crbox").colorbox({width:"80%", height:"80%", iframe:true});
					
		});
		
		//scroll page to id
		function GoToId(IdToGo){
		
			var animSpeed=1500; //animation speed
			var easeType="easeInOutExpo"; //easing type
			if($.browser.webkit){ //webkit browsers do not support animate-html
				$("body").stop().animate({scrollTop: $(IdToGo).offset().top}, animSpeed, easeType);
			} else {
				$("html").stop().animate({scrollTop: $(IdToGo).offset().top}, animSpeed, easeType);
			}
			
		};	
		
		$(document).ready(function(){
			$('.box_skitter_slider').skitter({dots: true});
			$('.box_skitter_slider_post').skitter({dots: true});
		});

	</script>

<title>Portfolio Victor Pasman</title>

</head>

<body>
	
<div id="general-content">
	<div id="side_menu">
		<div class="logo"></div> <!-- LOGO -->
		
		<div class="top_bg_menu"></div>
		<div class="menu">
			<div class="top_first"></div>
                        <?php foreach ($this->homeList as $key => $value) { ?>
                            <a href="#" onclick="GoToId('#page-<?=$value['pagina']; ?>');return false" class="menu_item"><?=$value['pagina']; ?></a>
                        <?php } ?>
		</div>
		<div class="bottom_bg_menu"></div>
	</div>
	<div class="container">
            