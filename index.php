<?php get_header(); ?>

<div class="container mx-auto my-8">

	<?php if (have_posts()) : ?>
		<?php
		while (have_posts()) :
			the_post();
		?>

			<?php get_template_part('template-parts/content', get_post_format()); ?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<!-- Slider main container -->
<div class="swiper projects">
	<div class="swiper-wrapper">
		<div class="swiper-slide">Slide 1</div>
		<div class="swiper-slide">Slide 2</div>
		<div class="swiper-slide">Slide 3</div>
		<div class="swiper-slide">Slide 4</div>
	</div>
	<div class="swiper-pagination"></div>
</div>
<?php
get_footer();
