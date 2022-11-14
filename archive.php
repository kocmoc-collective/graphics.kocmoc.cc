<?php get_header(); ?>

<main class="site-main archive">

	<?php if (have_posts()) : ?>

		<header class="page-header">

			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>

			<?php the_archive_description('<div class="archive-description">', '</div>'); ?>

		</header>

		<?php while (have_posts()) : the_post(); ?>

			text

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		text

	<?php endif; ?>

</main>

<?php
get_footer();
