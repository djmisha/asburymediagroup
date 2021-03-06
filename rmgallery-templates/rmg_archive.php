<?php get_header();?>


<main class="interior b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-about.jpg">

	<div class="gallery-content">
		<?php  echo rmg_archive_content(); ?>
	</div>

	<article class="content">

		<?php
			$cat_cpt = rmg_helpers::$category_cpt_name;
			$parent = new WP_Query(array(
			    'post_type' => $cat_cpt,
			    'post_parent' => 0,
			    'orderby' => 'menu_order',
			    'order' => 'ASC'
			));
		?>

		<?php if ( have_posts() ) : while ( $parent->have_posts() ) : $parent->the_post();?>
		<?php
			if(has_post_thumbnail()):
				$catBg = get_the_post_thumbnail_url( $post->ID);
			endif;
			$postURL = get_permalink($post->ID);
		 ?>

		<div class="cat-container">
			<a href="<?php echo $postURL; ?>">
				<h2><?php the_title();?></h2>
					<div class="gallery-section" style="background-image: url(<?php echo $catBg; ?>)">
				</div>
			</a>
			<ul>
				<?php
					$cats = $rmg_cat::children( $post , array('orderby' => 'menu_order' , 'order' => 'ASC' ));//uses get_children , finds the cases & their images and attaches it to the $post object
					foreach ($cats as $cat => $post) {
						echo '<li>';
							echo '<a href="'.get_permalink($post->ID).'">' . get_the_title( $post->ID ) . '</a>';
						echo '</li>';
					}
				?>
			</ul>
		</div>

		<?php endwhile; endif;?>

	</article>

</main>

<?php get_footer();?>
