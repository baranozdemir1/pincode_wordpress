<div class="col-lg-4 col-md-6"> 
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
                        <p><?=wp_trim_words(get_the_content(),10);?></p> 
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
                        target="_blank"><i class="icon-twitter fa fa-twitter"></i><span></span></a>
                    <a href="http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php the_title(); ?>" target="blank" class="icon-button facebook"><i class="icon-facebook fa fa-facebook"></i><span></span></a> 

                    <a href="https://www.linkedin.com/cws/share?url=<?php the_permalink(); ?>" class="icon-button google-plus" target="_blank"><i class="icon-google-plus fa fa-linkedin"></i><span></span></a> 
                </div>                         
            </div>                     
</div>