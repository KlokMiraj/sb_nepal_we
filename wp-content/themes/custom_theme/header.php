    <!doctype html>
<html class="no-js" lang="<?php language_attributes();?>" prefix="og: http://ogp.me/ns#">
    <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta charset="<?php bloginfo('charset');?>" />
    <title><?php 
                    bloginfo('name');?>
            </title>
    <?php wp_head();?>
    <meta name="description" content="">
    <meta name="keywords" content="" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="http://kanebiotech.com/xmlrpc.php" />
			<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/kanebiotech.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.5.14"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;if(!g||!g.fillText)return!1;switch(g.textBaseline="top",g.font="600 32px Arial",a){case"flag":return g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3;case"diversity":return g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,d=c[0]+","+c[1]+","+c[2]+","+c[3],g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e;case"simple":return g.fillText(h(55357,56835),0,0),0!==g.getImageData(16,16,1,1).data[0];case"unicode8":return g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0]}return!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g,h,i;for(i=Array("simple","flag","unicode8","diversity"),c.supports={everything:!0,everythingExceptFlag:!0},h=0;h<i.length;h++)c.supports[i[h]]=d(i[h]),c.supports.everything=c.supports.everything&&c.supports[i[h]],"flag"!==i[h]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[i[h]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='sudo-styles-css'  href="assets/main_style_sheet.css" type='text/css' media='all' />
<script type='text/javascript' src='http://kanebiotech.com/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://kanebiotech.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='http://kanebiotech.com/site-content/themes/kane/js/libs/modernizr.js?ver=4.5.14'></script>
<link rel='https://api.w.org/' href='http://kanebiotech.com/wp-json/' />
<link rel="canonical" href="http://kanebiotech.com/" />
<link rel='shortlink' href='http://kanebiotech.com/' />
<!-- Bootstrap CDN-->
<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">-->



    <script src="https://use.typekit.net/qnq1rur.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <body <?php body_class();?>>
        <!--Site Header-->
            
               <header class="header">
                        <div class="container">
                <span class="header-bar-1"></span>
                <span class="header-bar-2"></span>
                <span class="header-bar-3"></span>
<!--                <span class="logo">
                                        Subham Biotech
                                    </span>-->
                <a class="nav-toggle" href="" aria-role="hidden">
                    <span class="nav-toggle-inner"></span>
                </a>
                <nav class="nav-main" role="navigation">
                    <?php $f_args= array(
                            'theme_location'=>'primary'                       
                            );
                    
                            wp_nav_menu($f_args);
                    ?>
                    
<!--                    <ul>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139 menu-item-has-children">
                            <a href="">R+D</a>
                                                            <ul class="nav-main-sub">
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-494">
                                        <a href="">Understanding Biofilms</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-492">
                                        <a href="">Glossary of Terms</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-493">
                                        <a href="">Research Publications</a></li>
                                                                  </ul>
                                                    </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-151 menu-item-has-children">
                            <a href="">Technologies</a>
                                                            <ul class="nav-main-sub">
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-136">
                                        <a href="">Human Health</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-137">
                                        <a href="">Animal Health</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                                        <a href="">Industrial</a></li>
                                                                  </ul>
                                                    </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-152 menu-item-has-children">
                            <a href="">About</a>
                                                            <ul class="nav-main-sub">
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-141">
                                        <a href="">About Us</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-143">
                                        <a href="">Our Team</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-144">
                                        <a href="">Awards</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145">
                                        <a href="">Careers</a></li>
                                                                  </ul>
                                                    </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-626 menu-item-has-children">
                            <a href="h">Investors</a>
                                                            <ul class="nav-main-sub">
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1050">
                                        <a href="">Corporate Profile</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-625">
                                        <a href="">Stockholder Information</a></li>
                                                                      <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-623">
                                        <a href="">Financial Reports</a></li>
                                                                  </ul>
                                                    </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-455">
                            <a href="">News</a>
                                                    </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-148">
                            <a href="">Contact</a>
                                                    </li>
                                        </ul>-->
                </nav>
            </div>
                   
                   
                    </header>
       
        
            