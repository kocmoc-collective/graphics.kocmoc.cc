<?php
/**
 * The default template for displaying all single social posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Monoscopic
 */

get_header();
?>

	<main id="primary" class="site-main">

        <div class="site-main__inner">

            <?php
            while ( have_posts() ) :
                the_post(); ?>

                <div class="social-post-frame">

                    <div id="capture" class="social-post-container">

                        <?php if ( get_field( 'radio_show_background_image' ) ) : ?>
                            <div class="social-post-background-image"><img src="<?php the_field( 'radio_show_background_image' ); ?>" /></div>
                        <?php endif ?>

                        <div class="social-post-container__inner">

                            <div class="social-post-header">
                                <div class="social-post-header__inner">
                                    <div class="station-branding">
                                        <div class="station-title">KOCMOC</div>
                                        <div class="station-subtitle">Freeform radio transmissions</div>
                                    </div>
                                    <div class="station-logo">
                                        <svg viewBox="0 0 1042 1042" xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" clip-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2">
                                            <path d="M520.817 848.205c-110.456 0-208.068-54.729-267.36-138.518C155.774 727.753 69.185 739.36.001 743.866v297.81h1041.67V478.468c-54.892 24.409-120.881 50.004-195.11 75.517-16.582 165.243-156.086 294.22-325.74 294.22ZM0-.009v591.23c54.527-24.235 119.958-49.641 193.56-74.971 2.508-178.658 148.037-322.799 327.258-322.799 121.119 0 226.791 65.844 283.423 163.625 91.164-16.4 172.047-26.973 237.424-31.232V-.009H.005Zm865.926 223.872-41.9-30.568-41.902 30.568 15.86-49.789-41.902-29.413h50.975l16.969-50.977 16.967 50.977h50.975l-41.9 29.413 15.858 49.789Z" fill="#eee" fill-rule="nonzero"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="social-post-content">
                                <h1 class="radio-show-title"><?php the_field( 'radio_show_title' ); ?></h1>
                            </div>

                            <div class="social-post-footer">
                                <div class="social-post-footer__inner">
                                    <div class="radio-show-date">
                                        <span class="radio-show-day"><?php the_field( 'radio_show_date' ); ?> / </span>
                                        <span class="radio-show-start-time"><?php the_field( 'radio_show_start_time' ); ?> - </span>
                                        <span class="radio-show-end-time"><?php the_field( 'radio_show_end_time' ); ?> (EET)</span>
                                    </div>
                                    <div class="station-url">www.kocmoc.live</div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <a class="button print" onclick="capture()">Print</a>

                <script>
                function capture () {
                html2canvas(document.querySelector("#capture")).then((canvas) => {
                    let a = document.createElement("a");
                    a.download = "kocmoc_live_social_post.jpeg";
                    a.href = canvas.toDataURL("image/jpeg");
                    a.click(); // MAY NOT ALWAYS WORK!
                });
                }
                </script>

            <?php endwhile; // End of the loop.
            ?>

        </div><!-- .site-main__inner -->

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();


