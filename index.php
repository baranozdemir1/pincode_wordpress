<?php
get_header(); ?>

<div class="container mt-5"> 
    <div class="row"> 
        <div class="col-sm-12 col-md-6 col-lg-6  py-0 pl-3 pr-1 featcard"> 
            <div id="featured" class="carousel slide carousel-fade" data-ride="carousel"> 
                <div class="carousel-inner"> 

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
<script>
    $(window).scroll(function(){
        if($(window).scrollTop() >= $(document).height() - $(window).height() - 10){
            $('.sonsuz-post').append('<div class="col-lg-4 col-md-6"> 
            <div class="baran-card baran-hovercard"> 
                <div class="baran-cardheader"> 
                    <div class="baran-zoom-effect"> 
                        <a href="<?php the_permalink(); ?>"> 
                            <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'title' => 'Thumb Photo']); ?>
                        </a>                                 
                    </div>                             
                </div>                         
                <div class="baran-info"> 
                    <div class="baran-title mt-2"> 
                        <a class="a-etiketi" href="<?php the_permalink(); ?>"><?=get_the_title();?></a> 
                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="float-left"> 
                                <span class="text-muted cursor-default font-12"><?=get_the_date('j F Y');?></span> 
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="badge badge-primary rounded-pill kategori float-right"> 
                                <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<a class="a-etiketi-beyaz" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="baran-desc text-justify p-2"> 
                        <p><?=wp_trim_words(get_the_content(),15);?></p> 
                    </div>                             
                </div>                         
                <div class="baran-bottom"> 
                    <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                    <a href="http://twitter.com/share" class=" icon-button twitter"
                        data-url="<?php the_permalink(); ?>"
                        data-via="wpbeginner"
                        data-text="<?php get_the_title(); ?>"
                        data-related="syedbalkhi:Founder of WPBeginner"
                        data-count="vertical"
                        target="_blank"><i class="icon-twitter fab fa-twitter"></i><span></span></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="blank" class="icon-button facebook"><i class="icon-facebook fab fa-facebook"></i><span></span></a> 

                    <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="icon-button google-plus" target="_blank"><i class="icon-google-plus fab fa-linkedin"></i><span></span></a> 
                </div>                         
            </div>                     
</div>

<?php get_footer(); ?>