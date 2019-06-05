<?php get_header(); ?>

<div class="container mt-5">
    <div class="row">

        <?php
            if ( have_posts() ) {

		?>
			<div class="col-md-12">
				<header class="archive-header text-center">
					<?php the_archive_title( '<h1 class="page-title mb-3">' , '</h1>' ); ?>
				</header>
			</div>

		<?php

                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content/content', 'archive' );
                }

            } else {

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/content', 'none' );

            }
        ?>
        
    </div>             
</div>         
<?php get_footer(); ?>