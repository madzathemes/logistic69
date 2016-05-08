<?php

/* The default template for displaying content. Used for both single and index/archive/search.
/*-----------------------------------------------------------------------------------*/

$mt_layout = get_post_meta(get_the_ID(), "layout_positions", true);

$mt_image_width = "750";

if($mt_layout == "full" ) { $mt_image_width = "960"; }

if(is_single()) { $more = 1; }?>
	<article id="post-<?php the_ID(); ?>" class="mt_article <?php if ( is_sticky() and !is_single()){ ?> mt_post_sticky <?php } ?>">
			<?php if( ! is_search()) {  if ( has_post_thumbnail() ) : ?>
			<div class="entry-page-image">	 
					
    	
							<?php 
							if ( get_post_meta(get_the_ID(), "mt_portfolio_slider_heightstan", true)!="") { $height = esc_attr(get_post_meta(get_the_ID(), "mt_portfolio_slider_heightstan", true)); } else { $height = "200"; }  	
								
							?>
							<?php if(!is_single()) { ?><a href="<?php the_permalink(); ?>"><?php } ?>
							
							<span class="dark-background-2"></span><?php 
							
								echo get_the_post_thumbnail(get_the_ID(),"full");
							?>
							<?php if(!is_single()) { ?></a><?php } ?>
				
		
				<?php if (! is_search() ){ ?><?php if(ot_get_option("blog_meta_on")!="off") {  builder69_entry_meta(); } ?><?php }?>
			</div>
			<?php endif; } ?>	
		<?php if ( is_sticky() && is_home() && ! is_paged()) : ?>
				<div class="featured-post">
					<i class="icon-pushpin"></i>
				</div>
		<?php endif; ?>
		
		<?php if (!is_single()){?>	
			<header class="entry-header">
			<?php if (! is_search()){ ?><?php } ?>
			<?php if ( is_single() ) : ?>
			<h1 class="entry-title"><?php echo get_the_title();  ?></h1>
			<?php else : ?>
			<h1 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'builder69' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php echo get_the_title();  ?></a>
			</h1>
			<?php endif; // is_single() ?>
		
		</header><!-- .entry-header -->
		<?php } ?>
		
		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
		
			
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php 
			
			if(!is_single()) { 
				
				if(ot_get_option("blog_content_type")=="full_content") { the_content( esc_html__( '', 'builder69' ) ); } else { the_excerpt(); }
				
			} else { 
			
				the_content( esc_html__( '', 'builder69' ) ); 
				
			} 
			
			?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'builder69' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<?php endif; ?>
		
        <div class="clear"></div>
		<footer class="entry-meta">
			
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) : // If a user has filled out their description and this is a multi-author blog, show a bio on their entries. ?>
				<div class="author-info">
					<div class="author-avatar">
						<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'builder69_author_bio_avatar_size', 68 ) ); ?>
					</div><!-- .author-avatar -->
					<div class="author-description">
						<h2><?php printf( esc_html__( 'About %s', 'builder69' ), get_the_author() ); ?></h2>
						<p><?php the_author_meta( 'description' ); ?></p>
						<div class="author-link">
							<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
								<?php printf( esc_html__( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'builder69' ), get_the_author() ); ?>
							</a>
						</div><!-- .author-link	-->
					</div><!-- .author-description -->
				</div><!-- .author-info -->
			<?php endif; ?>
			
		</footer><!-- .entry-meta -->
		<div class='clear'></div>	
	</article><!-- #post -->