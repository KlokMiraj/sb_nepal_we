<?php wp_footer();?>  
<footer class="footer">
                <div class="container">
	<div class="row">
		<div class="col-3_4">
			<nav class="nav-footer" role="navigation">
<!--			    <ul>
			    			        <li id="menu-item-157" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-157">
			            <a href="">About Us</a>
			        </li>
			    			        <li id="menu-item-161" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-161">
			            <a href="">Careers</a>
			        </li>
			    			        <li id="menu-item-159" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-159">
			            <a href="">Terms of Use &#038; Privacy Policy</a>
			        </li>
			    			        <li id="menu-item-158" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-158">
			            <a href="">Contact</a>
			        </li>
			    			        <li id="menu-item-784" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-784">
			            <a href="">Join Our Mailing List</a>
			        </li>
			    			    </ul>-->
                                         <?php 
                                            $f_args=array(
                                                'theme_location'=>'footer'
                                            );
                                            
                                         wp_nav_menu($f_args);?>
			</nav>
		</div>
		<div class="col-1_4">
                    <small class="footer-copyright">&copy; <?php bloginfo('name'); echo date('Y');?></small>
		</div>
	</div>
</div>
</div>
<a class="footer-top" href="#top">Back to Top</a>            </footer>

            <script type='text/javascript' src='http://kanebiotech.com/site-content/themes/kane/js/main.min.js?ver=4.5.14'></script>
<script type='text/javascript' src='http://kanebiotech.com/wp-includes/js/wp-embed.min.js?ver=4.5.14'></script>

                
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-84925023-1', 'auto');
  ga('send', 'pageview');

</script>


    </body>
</html>