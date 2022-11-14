<?php get_header(); ?>

<main class="site-main page">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', 'page'); ?>

	<?php endwhile; ?>

</main>

<?php
get_footer();
