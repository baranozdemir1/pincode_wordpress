<?php
get_header(); ?>

<div class="container mt-5"> 
    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard"> 
            <div id="featured" class="carousel slide carousel-fade" data-ride="carousel"> 
                <div class="carousel-inner mobil-duzeltme"> 

                <?php
                    $args = array('posts_per_page' => 1);
                    $query = new WP_Query( $args );
                    if ( have_posts() ) {

                        // Load posts loop.
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            get_template_part( 'template-parts/content/top-left' );
                        }

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/top-left', 'none' );

                    }
                ?>

                </div>                         
            </div>                     
        </div>
        
        <div class="col-md-6 py-0 px-1 mtm-3"> 
            <div class="row">
            
            <?php
                $args = array('posts_per_page' => 1, 'offset' => 1);
                $query = new WP_Query( $args );
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( $query->have_posts() ) {
                        $query->the_post();
                            get_template_part( 'template-parts/content/top-right-first' );
                        }

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/top-right', 'none' );

                    }
                ?>
            <?php
                $args = array('posts_per_page' => 1, 'offset' => 2);
                $query = new WP_Query( $args );
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( $query->have_posts() ) {
                        $query->the_post();
                            get_template_part( 'template-parts/content/top-right-second' );
                        }

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/top-right', 'none' );

                    }
                ?>

            <?php
                $args = array('posts_per_page' => 1, 'offset' => 3);
                $query = new WP_Query( $args );
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( $query->have_posts() ) {
                        $query->the_post();
                            get_template_part( 'template-parts/content/top-right-third' );
                        }

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/top-right', 'none' );

                    }
                ?>

            <?php
                $args = array('posts_per_page' => 1, 'offset' => 4);
                $query = new WP_Query( $args );
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( $query->have_posts() ) {
                        $query->the_post();
                            get_template_part( 'template-parts/content/top-right-fourth' );
                        }

                    } else {

                        // If no content, include the "No posts found" template.
                        get_template_part( 'template-parts/content/top-right', 'none' );

                    }
                ?>

            </div>
        </div>

    </div>
</div>

<!-- Reklam alanı -->
<div class="container">
    <div class="rklm w-100 bg-dark mt-5">
        <a href="#" class="a-etiketi">  <h1 class="h1 text-center ortala"><?php _e( 'REKLAM ALANI', 'pincode' ); ?></h1>  </a>
    </div>
</div>
<!-- Reklam alanı -->

<!-- İçerik -->
<div class="container mt-5">
    <div class="row">

        <?php
            if ( have_posts() ) {

                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    get_template_part( 'template-parts/content/center' );
                }

            } else {

                // If no content, include the "No posts found" template.
                get_template_part( 'template-parts/content/center', 'none' );

            }
        ?>
        
    </div>             
</div>         
<!-- İçerik -->

<?php get_footer(); ?>