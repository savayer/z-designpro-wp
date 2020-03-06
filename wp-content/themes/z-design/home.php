<?php 
	get_header(); 
	$currentLang = wpm_get_language();
?>

<section class="blog">
	<div class="container">
		<h1 class="blog__title title">
			<?php echo $currentLang === 'he' ? 'בלוג:' : 'Blog:'; ?>
		</h1>
		<div class="order_here"><a href="<?php the_field('order_here_link', 9); ?>" target="_blank">Order Here</a></div>
		<div class="blog__wrapper">
			<?php
				$count = 0;
				while ( have_posts() ) :
					$count++;
					the_post();
					$link = get_permalink();
					if ($count % 2 === 0) {
						$columnClass = 'blog__post--column2';
					} else {
						$columnClass = 'blog__post--column1';
					}

					if ($count > 1) {
						$animationDelay = $count*50;
					} else {
						$animationDelay = 0;
					}
			?>

				<div class="blog__post post <?php echo $columnClass; ?>" data-aos="fade-up-mini" data-aos-delay="<?php echo $animationDelay; ?>">
					<div class="post__wrapper">
						<div class="post__image">
							<a href="<?php echo $link; ?>">
								<img src="<?php echo get_the_post_thumbnail_url($post->ID, 'blog-thumb'); ?>" alt="<?php echo $post->post_title; ?>">
							</a>
						</div>
						<div class="post__content">
							<div class="post__title">
								<a href="<?php echo $link; ?>">
									<?php echo $post->post_title; ?>
								</a>
							</div>
							<div class="post__introtext">
								<?php echo $post->post_excerpt; ?>
							</div>
							<div class="post__meta">
								<div class="post__date date">
									<?php echo get_the_date( 'd/m/Y' ); ?>
								</div>
								<a href="<?php echo $link; ?>" class="post__readmore">
									<?php echo $currentLang === 'he' ? 'קרא יותר' : 'Read More'; ?>
									<span class="post__arrow"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
					
			<?php
				endwhile;
			?>
			
		</div>
	</div>
</section>

<?php get_footer('blog'); ?>