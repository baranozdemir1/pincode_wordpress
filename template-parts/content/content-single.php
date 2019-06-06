<main role="main" class="container mt-5"> 
    <div class="row"> 
        <!-- sol içerik alanı -->                 
        <div class="col-md-8 blog-main mb-3"> 
            <?php            
            $post_title = get_the_title();
            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid detay-resim mb-3', 'alt' => $post_title]);
            ?>
            
            
            <h1 class="text-center mb-3"><?=get_the_title();?></h1>
            <p class="text-justify">
                <?php
                    if ( $post -> post_content == "" )
                        echo '<p class="text-center mb-3" style="color:red">BU GÖNDERİYE YAZI GİRİLMEMİŞ</p>';
                    else
                        echo get_the_content();
                ?>
            </p> 
            <div class="title-widget-sidebar cursor-default">
                <?php _e( 'Paylaş', 'pincode' ); ?>
            </div>                     
            <!-- <a class="btn btn-outline-primary float-left" href="#">Older</a> <a class="btn btn-outline-secondary disabled float-right" href="#" tabindex="-1" aria-disabled="true">Newer</a> -->                     
            <div class="mx-auto text-center mb-3"> 
                <script src="http://platform.twitter.com/widgets.js"></script>
                    <a href="http://twitter.com/share" class=" icon-button twitter"
                        data-url="<?php the_permalink(); ?>"
                        data-via="wpbeginner"
                        data-text="<?php get_the_title(); ?>"
                        data-related="syedbalkhi:Founder of WPBeginner"
                        data-count="vertical"
                        target="_blank"><i class="icon-twitter fa fa-twitter"></i><span></span></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="blank" class="icon-button facebook"><i class="icon-facebook fa fa-facebook"></i><span></span></a> 

                    <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="icon-button google-plus" target="_blank"><i class="icon-google-plus fa fa-linkedin"></i><span></span></a> 
            </div>                     
            <div class="title-widget-sidebar cursor-default">
                <?php _e( 'Benzer Yazılar', 'pincode' ); ?>
            </div>
            <div class="container"> 
                <div class="row"> 
                    <?php 
                        $categories = get_the_category($post->ID); 
                        if ($categories) {
                            $category_ids = array(); 
                            foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id; 
                            
                            $args=array(
                                'category__in' => $category_ids, 
                                'post__not_in' => array($post->ID), 
                                'showposts'=>4, 
                                'ignore_sticky_posts'=>1 
                            ); 
                            
                            $my_query = new wp_query($args); 
                            if( $my_query->have_posts() ) {
                                echo ''; 
                                while ($my_query->have_posts()) { 
                                    $my_query->the_post(); 
                                ?> 
                            
                                <div class="col-md-3 col-6">
                                    <a href="<?php the_permalink('') ?>" class="float-right">
                                        <?php
                                        
                                        if ( has_post_thumbnail() )
                                        {
                                            $post_title = get_the_title();
                                            the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid rounded mb-3', 'alt' => $post_title]);
                                        }
                                        else
                                        {?>
                                        
                                            <img class="img-fluid rounded mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/empty-thumbnail.png" alt="">
                                        
                                        <?php } ?>

                                    </a>
                                </div>

                                <?php 
                                } 
                                echo ''; 
                            } 
                            wp_reset_query(); 
                        } 
                    ?>
                </div>
            </div>

            <div class="rklm w-100 bg-dark"> 
                <a href="#" class="a-etiketi">  <h1 class="h1 text-center ortala"><?php _e( 'REKLAM ALANI', 'pincode' ); ?></h1>  </a> 
            </div>                     
        </div>                 
        <!-- sidebar sağ alanı -->
        <aside class="col-md-4 blog-sidebar">
            <!-- reklam alanı başlangıç -->
            <div class="container">
                <div class="rklm w-100 bg-dark mb-3">
                    <a href="#" class="a-etiketi">  <h1 class="h1 text-center ortala"><?php _e( 'REKLAM ALANI', 'pincode' ); ?></h1>  </a>
                </div>
            </div>
            <!-- reklam alanı bitiş -->
            <?=dynamic_sidebar( 'pincode_bilesen' );?>
        </aside>

    </div>
</main>
