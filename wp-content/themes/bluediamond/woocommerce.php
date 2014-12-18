<?php get_header(); ?>
	<?php 
		// Check and get Sidebar Class
		$sidebar = 'right-sidebar';
		$sidebar_array = gdl_get_sidebar_size( $sidebar );
	?>		
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="page-wrapper single-page <?php echo $sidebar_array['sidebar_class']; ?>">
		<?php

			// print title
			print_page_header(get_the_title());
			
			$left_sidebar = 'woocommerce left sidebar';
			$right_sidebar = 'woocommerce right sidebar';		
			
			echo '<div class="row gdl-page-row-wrapper">';
			echo '<div class="gdl-page-left mb0 ' . $sidebar_array['page_left_class'] . '">';
			
			echo '<div class="row">';
			echo '<div class="gdl-page-item mb0 ' . $sidebar_array['page_item_class'] . '">';
			
			echo '<div class="woo-commerce-content-wrapper">';
			woocommerce_content();
			echo "</div>";
			
			echo "</div>"; // end of gdl-page-item
			
			wp_reset_query();
			
			get_sidebar('left');	
			echo '<div class="clear"></div>';			
			echo "</div>"; // row
			echo "</div>"; // gdl-page-left

			get_sidebar('right');
			echo '<div class="clear"></div>';
			echo "</div>"; // row
		?>
		<div class="clear"></div>
	</div> <!-- page wrapper -->
	</div> <!-- post class -->
<?php get_footer(); ?>