<?php get_header(); ?>

<main id="primary" class="site-main post">

	<?php while (have_posts()) : the_post(); ?>

		<?php get_template_part('template-parts/content', get_post_type()); ?>

	<?php endwhile; ?>

</main>

<?php
get_footer();