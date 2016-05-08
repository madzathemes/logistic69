<?php function builder69_header_multi() { ?>

<div class="mt-m-frame mt-mobile hidden-lg">
	<div class="mt-mm  <?php 
								
								$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){
									if ($mt_options['mt_menu_style']=="26" 
									or $mt_options['mt_menu_style']=="27" 
									or $mt_options['mt_menu_style']=="28"
									or $mt_options['mt_menu_style']=="29"
									or $mt_options['mt_menu_style']=="30"
									or $mt_options['mt_menu_style']=="31"
									or $mt_options['mt_menu_style']=="32"
									or $mt_options['mt_menu_style']=="20"
									or $mt_options['mt_menu_style']=="21"
									or $mt_options['mt_menu_style']=="22"
									or $mt_options['mt_menu_style']=="23"
									or $mt_options['mt_menu_style']=="25"
									or $mt_options['mt_menu_style']=="34"
									or $mt_options['mt_menu_style']=="35"
									or $mt_options['mt_menu_style']=="36"
									or $mt_options['mt_menu_style']=="59"
									or $mt_options['mt_menu_style']=="61"
									or $mt_options['mt_menu_style']=="62"
									or $mt_options['mt_menu_style']=="64"
									or $mt_options['mt_menu_style']=="66"
									or $mt_options['mt_menu_style']=="69") { 
										echo "mt-dark"; 
									} else { 
										echo "mt-light" ;
									} 
								}
								?>">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mt-logo f_left"><?php builder69_logo_r(); ?></div>
					<div class="mt_menu_bt">
						<div class="mt-m-small mt-m-small-close visible-sm-block visible-md-block visible-xs-block f_right "> <i class="fa fa-bars"></i> </div>
					</div>
				</div>
			</div>
		</div>
	</div>	
</div>


<div class="mt_menu_fixed  ">	
<div class="mt-m-frame mt-desctop hidden-sm hidden-xs hidden-md">
				
				<?php 
		    		$mt_options = get_option("builder69_theme_options"); 
					if(!empty($mt_options['mt_menu_style'])){
						if ($mt_options['mt_menu_style']=="8" 
							or $mt_options['mt_menu_style']=="10" 
							or $mt_options['mt_menu_style']=="12"
							or $mt_options['mt_menu_style']=="16"
							or $mt_options['mt_menu_style']=="16"
							or $mt_options['mt_menu_style']=="20"
							or $mt_options['mt_menu_style']=="21"
							or $mt_options['mt_menu_style']=="22"
							or $mt_options['mt_menu_style']=="23"
							or $mt_options['mt_menu_style']=="25"
							or $mt_options['mt_menu_style']=="39"
							or $mt_options['mt_menu_style']=="49"
							or get_site_url()=="http://builder69.com") {
						

		    	?>

	    		<div class="mt-mt <?php 
								
								$mt_options = get_option("builder69_theme_options"); 
									
								if(!empty($mt_options['mt_menu_style'])){	
									if ($mt_options['mt_menu_style']=="26" 
									or $mt_options['mt_menu_style']=="27" 
									or $mt_options['mt_menu_style']=="28"
									or $mt_options['mt_menu_style']=="29"
									or $mt_options['mt_menu_style']=="30"
									or $mt_options['mt_menu_style']=="31"
									or $mt_options['mt_menu_style']=="32"
									or $mt_options['mt_menu_style']=="20"
									or $mt_options['mt_menu_style']=="21"
									or $mt_options['mt_menu_style']=="22"
									or $mt_options['mt_menu_style']=="23"
									or $mt_options['mt_menu_style']=="25"
									or $mt_options['mt_menu_style']=="49") { 
										echo "mt-dark"; 
									} else { 
										echo "mt-light" ;
									} 
								}
								?> d_none">
		    		
		    		<div class="container">
						<div class="row">
							<div class="col-md-12">
                        
								<?php if(!empty($mt_options['mt_menu_language'])) { ?><?php if($mt_options['mt_menu_language']!="3"){ ?><div class="mt-m-language-left d_none f_left"><?php do_action('icl_language_selector');?></div><?php } ?><?php } ?>
								<div class="mt-m-login-lef d_none f_left"><a><?php echo esc_html__( 'Login', 'builder69' ); ?></a><a><?php echo esc_html__( 'Register', 'builder69' ); ?></a></div>
								<div class="mt-m-social-left d_none f_left"><?php builder69_socials(); ?></div>
								
								
								<?php if(!empty($mt_options['mt_header_email'])) { ?><div class="mt-m-mail-left d_none f_left"><i class="fa fa-envelope-o"></i> <?php  echo esc_attr($mt_options['mt_header_email']);  ?></div><?php } ?>
								<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone-left d_none f_left"><i class="fa fa-phone"></i> <?php echo esc_attr($mt_options['mt_header_phone']); ?></div><?php } ?>
								<?php if(!empty($mt_options['mt_header_text'])) { ?><div class="mt-m-text-left d_none f_left"><?php echo esc_attr($mt_options['mt_header_text']); ?></div><?php } ?>
								<div class="mt-m-nav d_none"><?php builder69_nav(); ?></div>
								<div class="mt-m-nav-second d_none f_right"><?php builder69_nav_second(); ?></div>
								<div class="mt-m-shop f_right">
									<div class="mt-shop-1 d_none"><i class="fa fa-shopping-cart"></i></div>
									<div class="mt-shop-2 d_none"><i class="fa fa-shopping-cart"></i><?php echo esc_html__( 'Shopping Cart', 'builder69' ); ?></div>
								</div>
								
								<div class="mt-m-social-right d_none f_right"><?php builder69_socials(); ?></div>
								<div class="mt-m-login-right d_none f_right"><a class="mt-login-button"><?php echo esc_html__( 'Login', 'builder69' ); ?></a> <?php echo esc_html__( 'or', 'builder69' ); ?> <a class="mt-register-button"><?php echo esc_html__( 'Register', 'builder69' ); ?></a></div>
								<?php if(!empty($mt_options['mt_header_text'])) { ?><div class="mt-m-text-right d_none f_right"><?php echo esc_attr($mt_options['mt_header_text']); ?></div><?php } ?>
								
								<?php if(!empty($mt_options['mt_menu_search'])) { ?><?php if($mt_options['mt_menu_search']!="3"){ ?>
								<div class="mt-m-search f_right">
									<div class="mt-search-1 d_none"><i class="fa fa-search"></i></div>
									<div class="mt-search-2 d_none"><?php echo esc_html__( 'Search', 'builder69' ); ?> <i class="fa fa-search"></i></div>
								</div>
								<?php } ?><?php } ?>
								
								<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone-right d_none f_right"><?php echo esc_html__( 'Phone', 'builder69' ); ?>: <?php echo esc_attr($mt_options['mt_header_phone']); ?></div><?php } ?>
								<?php if(!empty($mt_options['mt_header_email'])) { ?><div class="mt-m-mail-right d_none f_right"><?php echo esc_html__( 'E-mail', 'builder69' ); ?>: <?php echo esc_attr($mt_options['mt_header_email']); ?></div><?php } ?>
		    		
							</div>
						</div>
					</div>
		    		
	    		</div>
	    		<?php } } ?>
	    		<?php if(!empty($mt_options['mt_menu_style'])){
		    			if($mt_options['mt_menu_style']=="58" or $mt_options['mt_menu_style']=="59" or get_site_url()=="http://builder69.com"){ ?>
							<div class="mt-modal-menu-2"><?php builder69_nav_2(); ?></div>
	    		<?php } } ?>
	    		
	    		<div class="mt-mm <?php 
								
								$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){	
									if ($mt_options['mt_menu_style']=="26" 
									or $mt_options['mt_menu_style']=="27" 
									or $mt_options['mt_menu_style']=="28"
									or $mt_options['mt_menu_style']=="29"
									or $mt_options['mt_menu_style']=="30"
									or $mt_options['mt_menu_style']=="31"
									or $mt_options['mt_menu_style']=="32"
									or $mt_options['mt_menu_style']=="20"
									or $mt_options['mt_menu_style']=="21"
									or $mt_options['mt_menu_style']=="22"
									or $mt_options['mt_menu_style']=="23"
									or $mt_options['mt_menu_style']=="25"
									or $mt_options['mt_menu_style']=="34"
									or $mt_options['mt_menu_style']=="35"
									or $mt_options['mt_menu_style']=="36"
									or $mt_options['mt_menu_style']=="39"
									or $mt_options['mt_menu_style']=="40"
									or $mt_options['mt_menu_style']=="49"
									or $mt_options['mt_menu_style']=="55"
									or $mt_options['mt_menu_style']=="57"
									or $mt_options['mt_menu_style']=="59"
									or $mt_options['mt_menu_style']=="61"
									or $mt_options['mt_menu_style']=="62"
									or $mt_options['mt_menu_style']=="64"
									or $mt_options['mt_menu_style']=="66"
									or $mt_options['mt_menu_style']=="69") { 
										echo "mt-dark"; 
									} else if( $mt_options['mt_menu_style']=="43" ) {
									} else { 
										echo "mt-light" ;
									} 
								}
								?>  mt-mm-left-class">
								
		    		<div class="mt-m-cool-menu mt-m-cool-menu-open mt-m-cool-menu-close  d_none">
						<a href="#" class="mt-m-cool-button">
							<span class="mt-m-cool-button-line"></span>
						</a>
					</div>
					
		    		<div class="container"><div class="row"><div class="col-md-12">
					
					
						<div class="mt-m-col1">
							<div class="mt-m-small-2 d_none f_left">
								<a href="#" class="mt-m-cool-button">
									<span class="mt-m-cool-button-line"></span>
								</a>
							</div>
							<?php if(!empty($mt_options['mt_header_email'])) { ?><div class="mt-m-mail-left d_none f_left"><i class="fa fa-envelope-o"></i> <?php echo esc_attr($mt_options['mt_header_email']); ?></div><?php } ?>
							<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone-left d_none f_left"><i class="fa fa-phone"></i> <?php echo esc_attr($mt_options['mt_header_phone']); ?></div><?php } ?>
							<div class="mt-m-login-left d_none f_left"><a><?php echo esc_html__( 'Sign In', 'builder69' ); ?></a> or <a><?php echo esc_html__( 'Login', 'builder69' ); ?></a></div>
							<div class="mt-m-social-left d_none f_left"><?php builder69_socials(); ?></div>
							<?php 
					    		$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){
									if ($mt_options['mt_menu_style']=="6" 
										or $mt_options['mt_menu_style']=="20" 
										or $mt_options['mt_menu_style']=="31"
										or $mt_options['mt_menu_style']=="35"
										or $mt_options['mt_menu_style']=="36"
										or $mt_options['mt_menu_style']=="46"
										or $mt_options['mt_menu_style']=="55"
										or get_site_url()=="http://builder69.com") {
							?>
							<div class="mt-m-nav-first d_none"><?php builder69_nav_third(); ?></div>
							<?php }} ?>
						</div>

						<div class="mt-m-col2">
							<div class="mt-logo"><?php builder69_logo(); ?></div>
							<?php 
					    		$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){
									if ($mt_options['mt_menu_style']=="60" 
										or $mt_options['mt_menu_style']=="61" 
										or $mt_options['mt_menu_style']=="62"
										or $mt_options['mt_menu_style']=="63"
										or $mt_options['mt_menu_style']=="64"
										or $mt_options['mt_menu_style']=="65"
										or $mt_options['mt_menu_style']=="66"
										or $mt_options['mt_menu_style']=="67"
										or $mt_options['mt_menu_style']=="68"
										or $mt_options['mt_menu_style']=="69"
										or get_site_url()=="http://builder69.com") {
							?>
							<div class="mt-m-nav-left d_none"><?php builder69_nav_left(); ?> </div>
							<div class="mt-m-social-left-left d_none"><?php builder69_socials(); ?></div>
							<div class="mt-m-copyright d_none"><?php $mt_homepage_bg_p_image = get_option("builder69_theme_options");  if(!empty($mt_homepage_bg_p_image['copyright_text'])) {  echo balanceTags($mt_homepage_bg_p_image['copyright_text']); } ?></div>
							<?php }} ?>
						</div>

						<div class="mt-m-col3">
							<?php 
					    		$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){
									if ($mt_options['mt_menu_style']=="6" 
										or $mt_options['mt_menu_style']=="20" 
										or $mt_options['mt_menu_style']=="31"
										or $mt_options['mt_menu_style']=="35"
										or $mt_options['mt_menu_style']=="36"
										or $mt_options['mt_menu_style']=="46"
										or $mt_options['mt_menu_style']=="55"
										or get_site_url()=="http://builder69.com") {
							?>
							<div class="mt-m-nav-second d_none f_right"><?php builder69_nav_second(); ?></div>
							<?php }} ?>
							<?php if(!empty($mt_options['mt_menu_small'])) { ?><?php if($mt_options['mt_menu_small']!="3"){ ?><div class="mt-m-small mt-m-small-close   <?php if($mt_options['mt_menu_small']!="2"){ echo "d_none";  }?> f_right"><i class="fa fa-bars"></i></div><?php } ?><?php } ?>
							<?php if(!empty($mt_options['mt_menu_language'])) { ?><?php if($mt_options['mt_menu_language']!="3"){ ?><div class="mt-m-language-right <?php if($mt_options['mt_menu_language']!="2"){ echo "d_none";  }?> f_right"><?php do_action('icl_language_selector');?></div><?php } ?><?php } ?>
							
							<?php if(!empty($mt_options['mt_menu_shop'])) { ?><?php if($mt_options['mt_menu_shop']!="3"){ ?>
							<div class="mt-m-shop  f_right">
								<div class="mt-shop-1  <?php if($mt_options['mt_menu_shop']!="2"){ echo "d_none";  }?> f_right"><i class="fa fa-shopping-cart"></i></div>
								<div class="mt-shop-2 d_none f_right"><i class="fa fa-shopping-cart"></i><?php echo esc_html__( 'Shopping Cart', 'builder69' ); ?></div>
							</div>
							<?php } ?><?php } ?>
							
							<?php if(!empty($mt_options['mt_menu_button_link'])) { ?><div class="mt-m-button <?php  if(!empty($mt_options['mt_menu_button'])) { if($mt_options['mt_menu_button']!="2"){ echo "d_none";  } }?>  f_right"><a href="<?php if(!empty($mt_options['mt_menu_button_link'])) {  echo esc_url($mt_options['mt_menu_button_link']); } ?>"><?php if(!empty($mt_options['mt_menu_button_name'])) {  echo esc_attr($mt_options['mt_menu_button_name']); } ?></a></div><?php } ?>
							<div class="mt-m-social-right d_none f_right"><?php builder69_socials(); ?></div>
							<div class="mt-m-login-right d_none f_right"><a><?php echo esc_html__( 'Signup', 'builder69' ); ?></a> <a><?php echo esc_html__( 'Login', 'builder69' ); ?></a></div>
							
							<div class="mt-m-login2-right d_none f_right"><i class="fa fa-user"></i></div>
							
							<?php if(!empty($mt_options['mt_menu_search'])) { ?> <?php if($mt_options['mt_menu_search']!="3"){ ?>
							
								<div class="mt-m-search  f_right">
									<div class="mt-search-1 <?php if($mt_options['mt_menu_search']!="2"){ echo "d_none";  }?>"><i class="fa fa-search"></i></div>
									<div class="mt-search-2 d_none"><?php echo esc_html__( 'Search', 'builder69' ); ?> <i class="fa fa-search"></i></div>
									<div class="mt-search-3 d_none"><i class="ti-search"></i></div>
								</div>
							
							<?php } ?><?php } ?>
							
							<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone2-right d_none f_right"><i class="fa fa-phone"></i> <?php echo esc_html__( 'Phone', 'builder69' ); ?>: <span><?php echo esc_attr($mt_options['mt_header_phone']); ?></span></div><?php } ?>
							<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone-right-2 d_none f_right"><i class="fa fa-mobile"></i> <?php echo esc_attr($mt_options['mt_header_phone']); ?></div><?php } ?>
							<div class="mt-h54-clear"></div>
							<div class="mt-m-nav d_none f_right"><?php builder69_nav(); ?></div>
							<?php if(!empty($mt_options['mt_header_email'])) { ?><div class="mt-m-mail-right d_none f_right"><i class="fa fa-envelope-o"></i> <?php echo esc_attr($mt_options['mt_header_email']); ?></div><?php } ?>
							<?php if(!empty($mt_options['mt_header_phone'])) { ?><div class="mt-m-phone-right d_none f_right"><i class="fa fa-phone"></i> <?php echo esc_attr($mt_options['mt_header_phone']); ?></div><?php } ?>
                        </div>
		    		
		    		</div></div>
					
					</div>
		    		<div class="mt-m-cool-logo d_none"><?php builder69_logo(); ?></div>
	    		</div>
	    		
	    		
	    		<?php 
		    		$mt_options = get_option("builder69_theme_options"); 
					if(!empty($mt_options['mt_menu_style'])){
						if ($mt_options['mt_menu_style']=="7" 
							or $mt_options['mt_menu_style']=="13" 
							or $mt_options['mt_menu_style']=="14"
							or $mt_options['mt_menu_style']=="15"
							or $mt_options['mt_menu_style']=="16"
							or $mt_options['mt_menu_style']=="17"
							or $mt_options['mt_menu_style']=="18"
							or $mt_options['mt_menu_style']=="19"
							or $mt_options['mt_menu_style']=="22"
							or $mt_options['mt_menu_style']=="24"
							or $mt_options['mt_menu_style']=="32"
							or $mt_options['mt_menu_style']=="37"
							or $mt_options['mt_menu_style']=="38"
							or $mt_options['mt_menu_style']=="40"
							or $mt_options['mt_menu_style']=="48"
							or $mt_options['mt_menu_style']=="50"
							or $mt_options['mt_menu_style']=="51"
							or $mt_options['mt_menu_style']=="52"
							or $mt_options['mt_menu_style']=="53"
							or get_site_url()=="http://builder69.com") {
						

		    	?>
	    		
	    		<div class="mt-mb <?php 
								
								$mt_options = get_option("builder69_theme_options"); 
								if(!empty($mt_options['mt_menu_style'])){
									if ($mt_options['mt_menu_style']=="26" 
									or $mt_options['mt_menu_style']=="27" 
									or $mt_options['mt_menu_style']=="28"
									or $mt_options['mt_menu_style']=="29"
									or $mt_options['mt_menu_style']=="30"
									or $mt_options['mt_menu_style']=="31"
									or $mt_options['mt_menu_style']=="32"
									or $mt_options['mt_menu_style']=="16"
									or $mt_options['mt_menu_style']=="17"
									or $mt_options['mt_menu_style']=="18"
									or $mt_options['mt_menu_style']=="19"
									or $mt_options['mt_menu_style']=="24"
									or $mt_options['mt_menu_style']=="50"
									or $mt_options['mt_menu_style']=="51") { 
										echo "mt-dark"; 
									} else { 
										echo "mt-light" ;
									} 
								}
								?> d_none">
		    		
		    		<div class="container"><div class="row"><div class="col-md-12">
			    		
		    			<div class="mt-m-nav d_none f_left"><?php builder69_nav(); ?></div>
                        
                       <?php if(!empty($mt_options['mt_menu_language'])) { ?> <?php if($mt_options['mt_menu_language']!="3"){ ?><div class="mt-m-language-right d_none f_right"><?php do_action('icl_language_selector');?></div><?php } ?><?php } ?>
                        <div class="mt-m-shop ">
							<div class="mt-shop-1 d_none f_right"><i class="fa fa-shopping-cart"></i></div>
							<div class="mt-shop-2 d_none f_right"><i class="fa fa-shopping-cart"></i><?php echo esc_html__( 'Shopping Cart', 'builder69' ); ?></div>
						</div>
                        <div class="mt-m-social-right d_none f_right"><?php builder69_socials(); ?> </div>
                        <div class="mt-m-login-right d_none f_right"><a><?php echo esc_html__( 'Account', 'builder69' ); ?></a> </div>
                        
                       <?php if(!empty($mt_options['mt_menu_search'])) { ?><?php if($mt_options['mt_menu_search']!="3"){ ?><div class="mt-m-search f_right">
							<div class="mt-search-1 d_none "><i class="fa fa-search"></i></div>
							<div class="mt-search-2 d_none"><?php echo esc_html__( 'Search', 'builder69' ); ?> <i class="fa fa-search"></i></div>
						</div>
						<?php } ?><?php } ?>
						
                        <?php if(!empty($mt_options['mt_header_text'])) { ?><div class="mt-m-text-right d_none f_right"><?php echo esc_attr($mt_options['mt_header_text']); ?></div><?php } ?>
		    		
		    		</div></div></div>
		    		
	    		</div>
	    		<?php }} ?>
	    		
	
</div>	
</div>
<?php } 	
	
add_filter('builder69_header_multi','builder69_header_multi');	


function builder69_logo() {
	
	$mt_options = get_option("builder69_theme_options");
	
	if(!empty($mt_options['mt_logo'])) { $logo_image = $mt_options['mt_logo']; } else { $logo_image = get_template_directory_uri()."/images/logo.png";  }
	if(!empty($mt_options['mt_logo_black'])) { $logo_image_black = $mt_options['mt_logo_black']; } else { $logo_image_black = get_template_directory_uri()."/images/logo_black.png";  }
	
	?>
	<a class="mt_logo_class logo"  href="<?php echo esc_url(home_url('/'));?>">
	
		<img <?php if(!empty($mt_options['mt_logo_w'])) { echo 'width="'; echo esc_attr($mt_options['mt_logo_w']);  echo '"'; } ?> height="<?php if(!empty($mt_options['mt_logo_h'])) { echo esc_attr($mt_options['mt_logo_h']); } else { echo "60"; } ?>" src="<?php echo esc_url($logo_image); ?>"  alt="<?php bloginfo('name'); ?>" />
		
	</a>
	<?php if(get_site_url()!="http://demo1.builder69.com"){ ?>
	<a class="mt_logo_class logo_black d_none"  href="<?php echo esc_url(home_url('/'));?>">
	
		<img <?php if(!empty($mt_options['mt_logo_w'])) { echo 'width="'; echo esc_attr($mt_options['mt_logo_w']);  echo '"'; }  ?> height="<?php if(!empty($mt_options['mt_logo_h'])) { echo esc_attr($mt_options['mt_logo_h']); } else { echo "60"; } ?>" src="<?php echo esc_url($logo_image_black); ?>"  alt="<?php bloginfo('name'); ?>" />
		
	</a>
<?php }
}
add_filter('builder69_logo','builder69_logo');

function builder69_logo_r() {
	
	$mt_options = get_option("builder69_theme_options");

	if(!empty($mt_options['mt_logo_r'])) { $logo_image_responsive = $mt_options['mt_logo_r']; } else { $logo_image_responsive = get_template_directory_uri()."/images/logo.png";  } 
	if(!empty($mt_options['mt_logo_r_black'])) { $logo_image_responsive_black = $mt_options['mt_logo_r_black']; } else { $logo_image_responsive_black = get_template_directory_uri()."/images/logo.png";  }
	?>
	
	<a class="mt_logo_class_mobile logo_responsive"  href="<?php echo esc_url(home_url('/'));?>">
	
		<img  <?php if(!empty($mt_options['mt_logo_w'])) { echo 'width="';  echo esc_attr($mt_options['mt_logo_w']);  echo '"'; }  ?> height="<?php if(!empty($mt_options['mt_logo_h'])) { echo esc_attr($mt_options['mt_logo_h']); } else { echo "60"; } ?>" src="<?php echo esc_url($logo_image_responsive); ?>" alt="<?php bloginfo('name'); ?>" />
		
	</a>
	
	<?php if(get_site_url()!="http://demo1.builder69.com"){ ?>
	<a class="mt_logo_class_mobile logo_responsive_black d_none"  href="<?php echo esc_url(home_url('/'));?>">
	'
		<img  <?php if(!empty($mt_options['mt_logo_w'])) { echo 'width="'; echo esc_attr($mt_options['mt_logo_w']); echo '"'; }  ?> height="<?php if(!empty($mt_options['mt_logo_h'])) { echo esc_attr($mt_options['mt_logo_h']); } else { echo "60"; } ?>" src="<?php echo esc_url($logo_image_responsive_black); ?>" alt="<?php bloginfo('name'); ?>" />
		
	</a>
	<?php }
}
add_filter('builder69_logo_r','builder69_logo_r');

function builder69_nav() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'sf-menu',  'echo' => true, 'depth' => 3)); 
  
}
add_filter('builder69_nav','builder69_nav');

function builder69_nav_2() {
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'mt-module-menu', 'echo' => true, 'depth' => 1)); 
  
}
add_filter('builder69_nav_2','builder69_nav_2');

function builder69_nav_second() {
    
	wp_nav_menu( array('theme_location'=>"second",  'menu_class' => 'sf-menu',  'echo' => true, 'depth' => 1)); 
  
}
add_filter('builder69_nav_second','builder69_nav_second');

function builder69_nav_third() {
    
	wp_nav_menu( array('theme_location'=>"third", 'menu_class' => 'sf-menu', 'echo' => true, 'depth' => 3));
  
}
add_filter('builder69_nav_third','builder69_nav_third');

function builder69_nav_left() {
    
	wp_nav_menu( array('theme_location'=>"primary",  'menu_class' => 'mt-left-menu',   'echo' => true, 'depth' => 3));
  
}
add_filter('builder69_nav_left','builder69_nav_left');



function builder69_socials() {
   
    $mt_options = get_option("builder69_theme_options");
?>
	
			 		<ul class="mt-social"> <?php
						$mt_options = get_option("builder69_theme_options");
						if(!empty($mt_options['mt_icon_twitter'])) {?><li><a <?php if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php } } ?> href="<?php echo esc_url($mt_options['mt_icon_twitter']); ?>"><i class="fa fa-twitter"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_facebook'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_facebook']); ?>" ><i class="fa fa-facebook"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_intagram'])) {?><li><a <?php if(!empty($mt_options['mt_icon_blank'])) {  if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_intagram']); ?>" ><i class="fa fa-instagram"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_vimeo'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_vimeo']); ?>"><i class="fa fa-vimeo-square"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_youtube'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_youtube']); ?>"><i class="fa fa-youtube"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_linkedin'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_linkedin']); ?>"><i class="fa fa-linkedin"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_gplus'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_gplus']); ?>"><i class="fa fa-google-plus"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_dribble'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_dribble']); ?>"><i class="fa fa-dribbble"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_skype'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_skype']); ?>"><i class="fa fa-skype"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_pinterest'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_pinterest']); ?>"><i class="fa fa-pinterest"></i></a></li><?php }
						if(!empty($mt_options['mt_icon_rss'])) {?><li><a <?php  if(!empty($mt_options['mt_icon_blank'])) { if($mt_options['mt_icon_blank']=="on") {?> targe="_blank" <?php }} ?> href="<?php echo esc_url($mt_options['mt_icon_rss']); ?>"><i class="fa fa-rss"></i></a></li><?php }
						?> 
					</ul>
	<?php 
	
}
add_filter('builder69_socials','builder69_socials');


 function builder69_header_fixed() {


$mt_mobile = "hidden-lg hidden-md";
$mt_destop = "hidden-sm hidden-xs";
$mt_options = get_option("builder69_theme_options");

if(!empty($mt_options['mt_menu_style'])){
	if ($mt_options['mt_menu_style']=="7" 
		or $mt_options['mt_menu_style']=="8" 
		or $mt_options['mt_menu_style']=="10"
		or $mt_options['mt_menu_style']=="12"
		or $mt_options['mt_menu_style']=="13"
		or $mt_options['mt_menu_style']=="14"
		or $mt_options['mt_menu_style']=="15"
		or $mt_options['mt_menu_style']=="16"
		or $mt_options['mt_menu_style']=="17"
		or $mt_options['mt_menu_style']=="18"
		or $mt_options['mt_menu_style']=="19"
		or $mt_options['mt_menu_style']=="21"
		or $mt_options['mt_menu_style']=="22"
		or $mt_options['mt_menu_style']=="23"
		or $mt_options['mt_menu_style']=="24"
		or $mt_options['mt_menu_style']=="25"
		or $mt_options['mt_menu_style']=="32"
		or $mt_options['mt_menu_style']=="37"
		or $mt_options['mt_menu_style']=="38"
		or $mt_options['mt_menu_style']=="39"
		or $mt_options['mt_menu_style']=="40"
		or $mt_options['mt_menu_style']=="48"
		or $mt_options['mt_menu_style']=="49"
		or $mt_options['mt_menu_style']=="50"
		or $mt_options['mt_menu_style']=="51"
		or $mt_options['mt_menu_style']=="52"
		or $mt_options['mt_menu_style']=="53"
		or $mt_options['mt_menu_style']=="54"
		or get_site_url()=="http://builder69.com") {
		
	    		
if(!empty($mt_options['mt_menu_fix'])){ ?>
	<?php if($mt_options['mt_menu_fix']=="1"){ ?>
	<div class="mt-fixed-header <?php echo esc_attr($mt_destop); ?>">
			
		<div class="container">
		
			<div class="row">
			
		    	<div class="col-md-12">
		    	
		    	<?php builder69_logo(); ?>
		    	
		    		<div class="mt_table_before"> 
			    		<div class="mt_table">
				    		<?php builder69_nav(); ?>
				    	</div>
					</div>	
		    		
			    </div>
			     
		    </div>
		    
	    </div>
			    
	</div>
	<?php } 
	} 
}}

} 
 add_filter('builder69_header_fixed','builder69_header_fixed');	
 
function builder69_loading() {

	$mt_options = get_option("builder69_theme_options");

	if(!empty($mt_options['mt_loading_icon_on'])){ 
		if($mt_options['mt_loading_icon_on']!="3"){ ?>
			<div class="se-pre-con">
				<div class="loadingimg">
					<div class="smallogo"></div>
				</div>
			</div><?php 
		} 
	} 
} 
 add_filter('builder69_loading','builder69_loading');	
 
 ?>