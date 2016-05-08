<div class="clear"></div>
</div>
</div>
<div id="footer_wrap">
<?php 
builder69_footer_section_page();
builder69_footer_section_all();

$mt_homepage_bg_p_image = get_option("builder69_theme_options");

if(!empty($mt_homepage_bg_p_image['footer_top']) or !empty($mt_homepage_bg_p_image['footer_bottom'])){ ?>

<footer id="footer">
	
   	<?php if  (!empty($mt_homepage_bg_p_image['footer_top'])) {  ?>
   			<?php if  ($mt_homepage_bg_p_image['footer_top'] == '1') {  ?>
   					<div class="mt-footer-1"><?php if ($mt_homepage_bg_p_image['footer_top'] != '0') { builder69_footer_widget_areas(); } ?></div>
    		<?php } ?>
    <?php } ?>
    
    <?php if  (!empty($mt_homepage_bg_p_image['footer_bottom'])) { ?>
    	 <?php if  ($mt_homepage_bg_p_image['footer_bottom'] == '1') { ?>
    <div class="mt-footer-2">
    
	
	<div class="container">
 		<div class="row" id="sub-footer">
			
			<div id="footer-left" class="col-md-6 ">
			
		        <div><p><?php if(!empty($mt_homepage_bg_p_image['copyright_text'])) { echo balanceTags($mt_homepage_bg_p_image['copyright_text']); } ?></p></div> 
		        
		    </div>    
		    
		    <div id="footer-right" class="col-md-6 ">
		    
		        <div id="button-nav"><?php wp_nav_menu( array('theme_location'  => "footer_menu", 'container' =>false, 'fallback_cb' => false, 'menu_class' => 'bottom-menu', 'menu_id' => 'menu_footer','echo' => true, 'before' => '','after' => '', 'link_before' => '','link_after' => '', 'depth' => 1));  ?></div>

		        
		    </div> 
 		</div>    
		        
		    <?php if  (ot_get_option('bottom_footer_html')) { ?>
		    <div class="row">       
		        <div class="col-md-12 footer_widget_midle"> <?php echo balanceTags(of_get_option('bottom_footer_html')); ?> </div>
		    </div>        
		    <?php } ?>
		
	</div>
	<?php } ?> 

    </div>
   	<?php } ?>   

</footer>    
   
<?php } ?>
</div>
</div>
<!-- END WRAPER -->
</div>

<?php  wp_footer(); ?>

</body>
</html>