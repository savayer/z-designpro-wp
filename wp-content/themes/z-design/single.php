<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package z-design
 */

get_header();
?>
<?php
	while ( have_posts() ) :
		the_post(); ?>
		<article class="single_post">
			<div class="container">
				<div class="single_post__wrapper">
					<aside class="single_post__aside">
						<a href="/blog">
							<svg class="close_icon single_post__close" viewBox="0 0 42 50">
								<path class="close_icon__arc" style="fill:none;stroke:#231f20;stroke-width:2;stroke-miterlimit:10" d="M 0.58123819,5.8 C 4.7812382,2.8 9.9812382,1 15.581238,1 c 14.2,0 25.7,11.5 25.7,25.7 0,9.9 -5.6,18.5 -13.8,22.8" />
								<line class="line1" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="5.0812378" y1="16.800001" x2="25.58124" y2="37.299999" />
								<line class="line2" style="fill:none;stroke:#231f20;stroke-width:5;stroke-miterlimit:10" x1="25.58124" y1="16.800001" x2="5.0812378" y2="37.299999" />
							</svg>
						</a>
					</aside>
					<div class="single_post__container">
						<div class="single_post__image">
							<img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php echo $post->post_title; ?>">
						</div>
						<div class="single_post__content_wrapper">
							<div class="single_post__title">
								<?php echo $post->post_title; ?>
							</div>

							<div class="single_post__content">
								<?php the_content(); ?>
							</div>

							<div class="single_post__date date">
								<?php echo get_the_date( 'd/m/Y' ); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</article>
	<?php endwhile; ?>

<?php get_footer('blog'); ?>
