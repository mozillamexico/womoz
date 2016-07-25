<?php
/*
Template Name: Custom Sitios Interes
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<style type="text/css">
.hexagono { 
  width: 120px; 
  height: 60px; 
  background: #FCD975; 
  position: relative; 
}
 
.hexagono:before { 
      content: "";
    position: absolute;
    top: -29px;
    left: 0;
    width: 0;
    height: 0;
    border-left: 60px solid transparent;
    border-right: 60px solid transparent;
    border-bottom: 30px solid #FCD975;
}
.hexagono:after { 
  content: "";
position: absolute;
bottom: -29px;
left: 0;
width: 0;
height: 0;
border-left: 60px solid transparent;
border-right: 60px solid transparent;
border-top: 30px solid #FCD975;
}
.float_r{
	float: right;
}
.float_l{
	float: left;
}
.box_enlace{
	margin:35px 20px;
	text-align: center;
	
}

.box_enlace a{
	vertical-align: middle;
}
.clear{
	clear: both;
}
</style>

<body class="page page-id-12 page-template-default logged-in admin-bar tc-fade-hover-links tc-l-sidebar tc-sticky-header sticky-disabled tc-transparent-on-scroll no-navbar skin-blue tc-regular-menu tc-sticky-footer customize-support mozilla tc-smoothscroll" itemscope="" itemtype="http://schema.org/WebPage">
    <div id="tc-page-wrap" class="">
	    <?php get_header(); ?>
	    <div id="tc-reset-margin-top" class="container-fluid" style="margin-top: 75px;"></div>
	    <div class="tc-hot-crumble container" role="navigation"></div>
		<div id="main-wrapper" class="container">
		    <div class="container" role="main">
		        <div class="row column-content-wrapper">            
			        <div id="content" class="span9 article-container tc-gallery-style">
					<header class="entry-header">
         					 <h1 class="entry-title ">SITIOS DE INTERÉS </h1>
         					 <hr class="featurette-divider __before_content">        
          				</header>
			        	<br>
			        	<div class="hexagono float_l box_enlace"><br>
			        		<b><a href="http://www.womoz.org/blog/" target="_blanck">Blog WoMoz</a></b>
			        	</div>
			        	<div class="hexagono float_l box_enlace"><br>
			        		<b><a href="https://wiki.mozilla.org/Mexico/womoz" target="_blanck">Wiki WoMoz</a></b>
			        	</div>
			        	<div class="hexagono float_l box_enlace">
			        		<b><a href="http://womoz.mozillanicaragua.org/" target="_blanck">WoMoz Nicaragua</a></b>
			        	</div>
			        	<div class="hexagono float_l box_enlace"><br>
			        		<b><a href="https://womoz.mozillabrasil.org.br/" target="_blanck">WoMoz Brasil</a></b>
			        	</div>
			        	<div class="hexagono float_l box_enlace"><br>
			        		<b><a href="http://www.mozilla-mexico.org/" target="_blanck">Mozilla México</a></b>
			        	</div>

			        	<div class="hexagono float_r box_enlace"><br>
			        		<b><a href="https://blog.mozilla.org/" target="_blanck">Blog Mozilla</a></b>
			        	</div>
			        	<div class="hexagono float_r box_enlace"><br>
			        		<b><a href="https://www.mozilla-hispano.org/" target="_blanck">Mozilla hispano</a></b>
			        	</div>
			        	<div class="hexagono float_r box_enlace">
			        		<b><a href="https://wiki.mozilla.org/WoMoz" target="_blanck">Wiki WoMoz internacional</a></b>
			        	</div>
			        	<div class="hexagono float_r box_enlace"><br>
			        		<b><a href="https://learning.mozilla.org/" target="_blanck">Mozilla learning</a></b>
			        	</div>
			        	<div class="clear"></div>
			        </div><!--.article-container -->
		           
			         <div class="span3 right tc-sidebar">
			        	<div id="right" class="widget-area" role="complementary">

						<?php dynamic_sidebar( 'right' ); 
						do_action( "__before_right_sidebar" );##hook of social icons
						?>
			        	</div>			        	
			        </div><!--.tc-sidebar -->           
		        </div><!--.row -->
		    </div><!-- .container role: main -->

		    <div class="" style="height: 253px;" id="tc-push-footer"></div>
		</div>
		<?php get_footer(); ?>
  	</div>
</body>
</html>



