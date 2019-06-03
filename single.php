<?php
get_header(); ?>

<!-- reklam alanı başlangıç -->         
<div class="container"> 
    <div class="rklm w-100 bg-dark mt-5"> 
        <a href="#" class="a-etiketi">  <h1 class="h1 text-center ortala"><?php _e( 'REKLAM ALANI', 'pincode' ); ?></h1>  </a> 
    </div>             
</div>         
<!-- reklam alanı bitiş -->         
<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

			endwhile; // End of the loop.
			?>
<?php get_footer(); ?>