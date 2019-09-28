<?php
	// Template Name: Home
?>

<?php get_header()?>

<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<h2>San Diego Web Design</h2>
			<h3>Elegant, Goal Oriented, Mobile Responsive Design</h3>
			<p>We help our clients design, build and maintain their websites.  We love and use WordPress and are experts in creating themes, and making your WordPress website work for you.</p>
		</div>
		<div class="mouse-down">
			<a href="#aboutus" rel="nofollow"><i class="fal fa-hand-point-down"></i></a>
		</div>
	</div>
</div> 
<!-- 
<section id="aboutus" class="home-aboutus b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-about.jpg">
	<h2><?php the_field('about_headline'); ?></h2>
	<?php the_field('about_content'); ?>
	<a href="<?php the_field('gallery_button'); ?>" rel="nofollow" class="button">View Our Patient Gallery</a>
</section>

<div class="home-doctor">
	<div class="doc-image b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-doctor.jpg"></div>
	<div class="doc-content"> 
		<h2><?php the_field('doctor_headline'); ?></h2>
		<?php the_field('doctor_cont'); ?>
		<a href="<?php the_field('doctor_button'); ?>" rel="nofollow" class="button">Learn More</a>
	</div>
</div> -->
<!-- 
<div class="home-featured-procedures">
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-1.jpg">
		<h2>Breast</h2>
		<?php if(have_rows('featured_breast')): ?>
			<ul>
				<?php while(have_rows('featured_breast')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-2.jpg">
		<h2>Body</h2>
		<?php if(have_rows('featured_body')): ?>
			<ul>
				<?php while(have_rows('featured_body')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-3.jpg">
		<h2>Face</h2>
		<?php if(have_rows('featured_face')): ?>
			<ul>
				<?php while(have_rows('featured_face')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>	
	<div class="the-overlay"></div>
</div> -->

<?php get_footer()?>