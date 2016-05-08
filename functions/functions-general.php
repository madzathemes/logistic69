<?php

if ( ! function_exists( 'builder69_paging_nav' ) ) :

function builder69_paging_nav() {
	global $wp_query,  $builder69_allowed_html_array;

	// Don't print empty markup if there's only one page.
	if ( $wp_query->max_num_pages < 2 )
		return;
	?>
	<nav class="navigation paging-navigation" role="navigation">
		
		<div class="nav-links">

			<?php if ( get_next_posts_link() ) : ?>
			<div class="nav-previous pagination-link"><?php next_posts_link( wp_kses(__( '<span class="meta-nav">&larr; Older posts</span> ', 'builder69'  ), $builder69_allowed_html_array ) ); ?></div>
			<?php endif; ?>

			<?php if ( get_previous_posts_link() ) : ?>
			<div class="nav-next pagination-link"><?php previous_posts_link( wp_kses(__( '<span class="meta-nav">Newer posts  &rarr;</span>', 'builder69'  ), $builder69_allowed_html_array ) ); ?></div>
			<?php endif; ?>
			<div class="clear"></div>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;

/*-----------------------------------------------------------------------------------*/
/*	Walker Nav Menu
/*-----------------------------------------------------------------------------------*/


class select_menu_walker extends Walker_Nav_Menu{
 
	 function start_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "";
	}
 
 
	function end_lvl(&$output, $depth = 0, $args = array()) {
		$indent = str_repeat("\t", $depth);
		$output .= "";
	}
 
	 function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
 
		$class_names = $value = '';
 
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		//check if current page is selected page and add selected value to select element  
		  $selc = '';
		  $curr_class = 'current-menu-item';
		  $is_current = strpos($class_names, $curr_class);
		  if($is_current === false){
	 		  $selc = "";
		  }else{
	 		  $selc = " selected ";
		  }
 
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		$sel_val =  ' value="'   . esc_attr( $item->url        ) .'"';
 
		//check if the menu is a submenu
		switch ($depth){
		  case 0:
			   $dp = "";
			   break;
		  case 1:
			   $dp = "-";
			   break;
		  case 2:
			   $dp = "--";
			   break;
		  case 3:
			   $dp = "---";
			   break;
		  case 4:
			   $dp = "----";
			   break;
		  default:
			   $dp = "";
		}
 
 
		$output .= $indent . '<option'. $sel_val . $id . $value . $class_names . $selc . '>'.$dp;
 
		$item_output = $args->before;
		//$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		//$item_output .= '</a>';
		$item_output .= $args->after;
 
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}
 
	function end_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		$output .= "</option>\n";
	}
 
}

if ( ! function_exists( 'builder69_entry_meta_manzory' ) ) {
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own _entry_meta() to override in a child theme.
 *
 */
	function builder69_entry_meta_manzory() {
		 global $builder69_allowed_html_array;
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( esc_html__( ', ', 'builder69' ) );
	
		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', esc_html__( ', ', 'builder69' ) );
	
		$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s"> %4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
	
		$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'builder69' ), get_the_author() ) ),
			get_the_author()
		);
	
		// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
		if ( $tag_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span></div>', 'builder69' ), $builder69_allowed_html_array );
		} elseif ( $categories_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span></div>', 'builder69' ), $builder69_allowed_html_array );
		} else {
			$utility_text = wp_kses(__( '<div class="mt-meta">Posted on <i class="fa fa-calendar"></i> %3$s </div>', 'builder69' ), $builder69_allowed_html_array );
		}
	
		printf(
			$utility_text,
			$categories_list,
			$tag_list,
			$date,
			$author
		);
	}
}



if ( ! function_exists( 'builder69_entry_meta' ) ) {
/**
 * Prints HTML with meta information for current post: categories, tags, permalink, author, and date.
 *
 * Create your own _entry_meta() to override in a child theme.
 *
 */
	function builder69_entry_meta() {
		 global $builder69_allowed_html_array;
		// Translators: used between list items, there is a space after the comma.
		$categories_list = get_the_category_list( esc_html__( ', ', 'builder69' ) );
	
		// Translators: used between list items, there is a space after the comma.
		$tag_list = get_the_tag_list( '', esc_html__( ', ', 'builder69' ) );
	
		$date = sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date" datetime="%3$s"> %4$s</time></a>',
			esc_url( get_permalink() ),
			esc_attr( get_the_time() ),
			esc_attr( get_the_date( 'c' ) ),
			esc_html( get_the_date() )
		);
	
		$author = sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s" rel="author">%3$s</a></span>',
			esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
			esc_attr( sprintf( esc_html__( 'View all posts by %s', 'builder69' ), get_the_author() ) ),
			get_the_author()
		);
	
		// Translators: 1 is category, 2 is tag, 3 is the date and 4 is the author's name.
		if ( $tag_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span> <i class="fa fa-tag"></i> %2$s <span class="mt_space"></span> <i class="fa fa-calendar"></i> %3$s </div>', 'builder69' ), $builder69_allowed_html_array );
		} elseif ( $categories_list ) {
			$utility_text = wp_kses(__( '<div class="mt-meta"><i class="fa fa-folder-open-o"></i> %1$s <span class="mt_space"></span> <i class="fa fa-calendar"></i> %3$s </div>', 'builder69' ), $builder69_allowed_html_array );
		} else {
			$utility_text = wp_kses(__( '<div class="mt-meta">Posted on <i class="fa fa-calendar"></i> %3$s </div>', 'builder69' ), $builder69_allowed_html_array );
		}
	
		printf(
			$utility_text,
			$categories_list,
			$tag_list,
			$date,
			$author
		);
	}
}

if ( ! function_exists( 'builder69_content_nav' ) ) {
/**
 * Displays navigation to next/previous pages when applicable.
 *
 */
	function builder69_content_nav( $nav_id ) {
		global $wp_query,  $builder69_allowed_html_array;
		if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav id="<?php echo esc_attr($nav_id); ?>" class="navigation" role="navigation">
				<h3 class="assistive-text"><?php esc_html_e( 'Post navigation', 'builder69' ); ?></h3>
				<div class="nav-previous alignleft"><?php next_posts_link( wp_kses(__( '<span class="meta-nav">&larr;</span> Older posts', 'builder69' ), $builder69_allowed_html_array  )); ?></div>
				<div class="nav-next alignright"><?php previous_posts_link( wp_kses(__( 'Newer posts <span class="meta-nav">&rarr;</span>', 'builder69' ), $builder69_allowed_html_array  )); ?></div>
			</nav><!-- #<?php echo esc_attr($nav_id); ?> .navigation -->
		<?php endif;
	}
}


/**
 * Creates a nicely formatted and more specific title element text
 * for output in head of document, based on current view.
 *
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
function builder69_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( esc_html__( 'Page %s', 'builder69' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'builder69_wp_title', 10, 2 );


/**
 * Makes our wp_nav_menu() fallback -- wp_page_menu() -- show a home link.
 *
 */
function builder69_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'builder69_page_menu_args' );

/**
 * Enqueues scripts and styles for front-end.
 *
 */
function builder69_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	
}
add_action( 'wp_enqueue_scripts', 'builder69_scripts_styles' );




/*-----------------------------------------------------------------------------------*/
/* Breadcrumb function
/*-----------------------------------------------------------------------------------*/

function builder69_breadcrumbs() {
 
  $delimiter = '<span class="liners">/</span>';
  $home = esc_html__( 'Home', 'builder69'  ); // text for the 'Home' link
  $before = '<span>'; // tag before the current crumb
  $after = '</span>'; // tag after the current crumb
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="breadcrumb-style">';
 
    global $post;
    $homeLink = esc_url(home_url('/'));
    echo balanceTags('<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ');
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo balanceTags($before . 'Archive by category "' . single_cat_title('', false) . '"' . $after);
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo balanceTags($before . get_the_time('d') . $after);
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo balanceTags($before . get_the_time('F') . $after);
 
    } elseif ( is_year() ) {
      echo balanceTags($before . get_the_time('Y') . $after);
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo balanceTags($before . get_the_title() . $after);
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo balanceTags($before . get_the_title() . $after);
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo balanceTags($before . $post_type->labels->singular_name . $after);
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo balanceTags($before . get_the_title() . $after);
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo balanceTags($before . get_the_title() . $after);
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo balanceTags($crumb . ' ' . $delimiter . ' ');
      echo balanceTags($before . get_the_title() . $after);
 
    } elseif ( is_search() ) {
      echo balanceTags($before . 'Search results for "' . get_search_query() . '"' . $after);
 
    } elseif ( is_tag() ) {
      echo balanceTags($before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after);
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo balanceTags($before . 'Articles posted by ' . $userdata->display_name . $after);
 
    } elseif ( is_404() ) {
      echo balanceTags($before . 'Error 404' . $after);
    }
 
    if ( get_query_var('paged') ) { echo " / ";  echo esc_html($before); echo " ";
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo esc_html__('Page', 'builder69' ) . ' ' . get_query_var('paged'); 
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    echo esc_html($after); }
 
    echo '</div>';
 
  }
} // end dimox_breadcrumbs()

?>