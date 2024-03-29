            <?php
                $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                if ( $grid == 'grid-12' )
                    echo '<div class="col-lg-12 col-md-12">';
                elseif ( $grid == 'grid-6' )
                    echo '<div class="col-lg-6 col-md-6">';
                elseif ( $grid == 'grid-4' )
                    echo '<div class="col-lg-4 col-md-6">';
                elseif ( $grid == 'grid-3' )
                    echo '<div class="col-lg-3 col-md-4 col-sm-6">';
                elseif ( $grid == 'grid-2' )
                    echo '<div class="col-xl-2 col-lg-4 col-md-4">';
                else
                    echo '<div class="col-lg-4 col-md-6">';
            ?>
            <div class="baran-card baran-hovercard"> 
                <div class="baran-cardheader"> 
                    <div class="baran-zoom-effect"> 
                        <a href="<?php the_permalink(); ?>"> 
                            <?php
                                if ( has_post_thumbnail() )
                                {
                                    $post_title = get_the_title();
                                    the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid', 'alt' => $post_title]);
                                }
                                else
                                {?>
                                <img class="img-fluid rounded mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/empty-thumbnail.png" alt="">
                            <?php } ?>
                        </a>                                 
                    </div>                             
                </div>                         
                <div class="baran-info"> 
                    <div class="baran-title mt-2">

                    <?php
                        $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                        if ( $grid == 'grid-2' ){
                    ?>
                        <a class="a-etiketi font-14" href="<?php the_permalink(); ?>"><?=get_the_title();?></a> 
                    <?php }else{ ?>
                        <a class="a-etiketi" href="<?php the_permalink(); ?>"><?=get_the_title();?></a>
                    <?php } ?>

                    </div>
                    <div class="row mt-2">
                        <div class="col-6">
                            <div class="float-left"> 
                                <?php
                                    $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                                    if ( $grid == 'grid-2' ){
                                ?>
                                        <span class="text-muted cursor-default" style="font-size:8px"><?=get_the_date('j F Y');?></span>
                                <?php
                                    }else{
                                ?>
                                        <span class="text-muted cursor-default font-12"><?=get_the_date('j F Y');?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="badge badge-primary rounded-pill kategori float-right"> 
                                <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                                        if ( $grid == 'grid-2' ){
                                            echo '<a class="a-etiketi-beyaz" style="font-size:10px" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                        }else{
                                            echo '<a class="a-etiketi-beyaz" href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>';
                                        }
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="baran-desc text-justify p-2">
                        <?php
                            $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                            if ( $grid == 'grid-2' ){
                        ?>
                                <p class="font-12"><?=wp_trim_words(get_the_content(),10);?></p>
                        <?php
                            }else{
                        ?>
                                <p><?=wp_trim_words(get_the_content(),10);?></p>
                        <?php } ?>
                    </div>                             
                </div>
                <?php
                    $grid = cs_get_option('pincode_ana_sayfa_yazi_grid');
                    if ( $grid == 'grid-2' )
                        echo '<div class="baran-bottom "> ';
                    else
                        echo '<div class="baran-bottom"> ';
                ?>
                    <script src="http://platform.twitter.com/widgets.js"></script>
                    <a href="http://twitter.com/share" class="icon-button twitter"
                        data-url="<?php the_permalink(); ?>"
                        data-via="pincode"
                        data-text="<?php get_the_title(); ?>"
                        data-related="PinCode"
                        data-count="vertical"
                        target="_blank"><i class="icon-twitter fa fa-twitter"></i><span></span></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" target="blank" class="icon-button facebook"><i class="icon-facebook fa fa-facebook"></i><span></span></a> 

                    <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="icon-button google-plus" target="_blank"><i class="icon-google-plus fa fa-linkedin"></i><span></span></a> 
                </div>                         
            </div>                     
        </div>