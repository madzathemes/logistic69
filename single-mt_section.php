<?php
/**
 * @author madars.bitenieks
 * @copyright 2014
 */

$class = "";

get_header(); 

$class = ""; if(get_post_meta(get_the_ID(), "mt_class", true)!="") { $class = get_post_meta(get_the_ID(), "mt_class", true); } 
				 
?><section data-type="background"  data-speed="<?php if(get_post_meta(get_the_ID(), "mt_paralex_speed", true)!="" and get_post_meta(get_the_ID(), "mt_paralex_speed_on", true)!="no"){ echo esc_attr(get_post_meta(get_the_ID(), "mt_paralex_speed", true)); }?>" class="mt-boxed-version mt-style-<?php echo sanitize_html_class(get_the_ID()); ?> <?php echo sanitize_html_class($class); ?>" ><div class="mt-section-bg mt-section-bg-<?php echo sanitize_html_class(get_the_ID()); ?>"></div><div class="container"><div class="row"><div class="col-md-12"><?php the_content(); ?></div></div></div></section>

<?php get_footer(); ?>