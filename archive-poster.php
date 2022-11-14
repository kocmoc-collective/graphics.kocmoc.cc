<?php get_header(); ?>

<main class="site-main posters">

	<?php if (have_posts()) : ?>

		<header class="entry-header">

			<div class="marquee" data-speed="0.25" data-pausable="true">

				<h1 class="entry-title"><?php esc_html_e('KOCMOC Web Graphics', 'kocmoc'); ?></h1>

			</div>

		</header>

		<div class="entry-content">

			<?php while (have_posts()) : the_post(); ?>

				<article>

					<span class="radio-show-day"><?php the_field('radio_show_date'); ?></span>

					<?php the_title('<h3><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>

				</article>

			<?php endwhile; ?>

		</div>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<p><?php esc_html_e('There found.', 'kocmoc'); ?></p>

	<?php endif; ?>

</main>

<?php
get_footer();
