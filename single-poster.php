<?php get_header(); ?>

<?php if (get_field('stories_layout') == 1) : ?>

    <main class="site-main poster stories-layout">

    <?php else : ?>

        <main class="site-main poster">

        <?php endif; ?>

        <?php while (have_posts()) : the_post(); ?>

            <div class="capture">

                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('full'); ?>
                    </div>
                <?php endif; ?>

                <div class="container">

                    <div class="entry-header">

                        <div class="station-branding">
                            <div class="station-title">KOCMOC</div>
                            <div class="station-tagline">Freeform Radio Broadcasting</div>
                        </div>

                        <div class="station-logo">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 1334 1334">
                                <path d="M666.646 1085.7c-141.384 0-266.327-70.053-342.221-177.304C199.391 931.521 88.556 946.377.002 952.145v381.197h1333.33V612.437c-70.261 31.242-154.727 64.005-249.741 96.661-21.224 211.511-199.789 376.602-416.946 376.602ZM0-.01v756.775c69.795-31.021 153.546-63.541 247.757-95.962 3.211-228.683 189.488-413.184 418.89-413.184 155.032 0 290.293 84.28 362.781 209.44 116.69-20.992 220.221-34.525 303.903-39.976V-.01H.001Zm1108.38 286.557-53.632-39.128-53.634 39.128 20.301-63.731-53.635-37.647h65.248l21.72-65.251 21.717 65.251h65.248l-53.632 37.647 20.299 63.731Z" />
                            </svg>
                        </div>

                    </div>

                    <div class="entry-content">

                        <div class="radio-show-title"><?php the_field('radio_show_title'); ?></div>

                    </div>

                    <div class="entry-footer">

                        <div class="radio-show-date">
                            <span class="radio-show-day"><?php the_field('radio_show_date'); ?> / </span>
                            <span class="radio-show-start-time"><?php the_field('radio_show_start_time'); ?> - </span>
                            <span class="radio-show-end-time"><?php the_field('radio_show_end_time'); ?> GMT+2 (EET)</span>
                        </div>

                        <div class="station-link">KOCMOC.LIVE</div>

                    </div>

                </div>

            </div>

            <div class="print">
                <button onclick="capture()">Print</button>
            </div>



            <script>
                function capture() {
                    html2canvas(document.querySelector(".capture")).then((canvas) => {
                        let a = document.createElement("a");
                        a.download = "kocmoc_poster.jpeg";
                        a.href = canvas.toDataURL("image/jpeg");
                        a.click(); // MAY NOT ALWAYS WORK!
                    });
                }
            </script>

        <?php endwhile; ?>

        </main>

        <?php
        get_footer();
