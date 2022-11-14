<?php get_header(); ?>

<main id="primary" class="site-main 404">

	<header class="entry-header">

		<h1 class="entry-title"><?php esc_html_e('404. That’s an error.', 'kocmoc'); ?></h1>

	</header>

	<div class="entry-content">

		<p><?php esc_html_e('The requested URL was not found on this server.', 'kocmoc'); ?></p>

	</div>

</main>

<?php
get_footer();
