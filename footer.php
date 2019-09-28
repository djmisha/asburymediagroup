
<footer>
	<section class="upper-footer footer-parallax will-parallax parallax-welcome">
	<!-- <section class="upper-footer footer-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-footer.jpg"> -->
		<span class="the-headline">Request a Consultation</span>
		<div class="footer-form">
			<?php echo do_shortcode('[seaforms name="contact-us"]'); ?>
		</div>
	</section>
	<div class="footer-logos">
		<?php if(have_rows('footer_logos', 'option')): ?>
			<ul>
				<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
					<li>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<section class="footer-map">
		<div class="footer-splitter">
			 <div class="footer-address">
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<div class="the-loc">
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-name" data-label="Address - Footer" target="_blank"  rel="noopener">
								<span><?php the_sub_field('name', 'option'); ?></span><br>
								<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?>
							</a>
							<div class="loc-phone">
								<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									Phone: <?php the_sub_field('phone', 'option'); ?></a>
									<br>
									<span>Fax: <?php the_sub_field('fax', 'option'); ?></span>
							</div>
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-map-directions" data-label="Address - Footer" target="_blank" rel="noopener">
								<i class="fas fa-map-marker-alt"></i>Map & Directions
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<section class="lower-footer">
		<div class="copyright">Copyright &copy; <?=date("Y")?> <?php bloginfo('title');?><br> All rights reserved | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> | Made with &hearts; in Mission Beach 
		</div>
		
	</section>

	

</footer>


<?php wp_footer();?>

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:35732/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>

</body>
</html>
