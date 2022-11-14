<?php get_header(); ?>

<main class="site-main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<!-- The Content -->

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<!-- Nothing Found -->

	<?php endif; ?>

</main>

<?php
get_footer();
