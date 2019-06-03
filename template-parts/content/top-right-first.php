                <div class="col-6 pb-2 mlmr-m">
                    <div class="card bg-dark text-white">
                    <?php
                                        
                                        if ( has_post_thumbnail() )
                                        {
                                            $post_title = get_the_title();
                                            the_post_thumbnail('post-thumbnail', ['class' => 'card-img img-fluid', 'alt' => $post_title]);
                                        }
                                        else
                                        {?>
                                        
                                            <img class="img-fluid rounded mb-3" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/empty-thumbnail.png" alt="">
                                        
                                        <?php } ?>
                        <div class="card-img-overlay d-flex"> 
                            <a href="<?php the_permalink(); ?>" class="align-self-end a-etiketi-beyaz " style="text-shadow: 1px 1px black">
                                <?php
                                    $categories = get_the_category();
                                    if ( ! empty( $categories ) ) {
                                        echo '<span class="badge badge-primary manset-sag-kategori" style="font-size:10px!important">' . esc_html( $categories[0]->name ) . '</span>';
                                    }
                                ?>
                                <h6 class="card-title manset-sag-font"><?=get_the_title();?></h6>
                            </a>
                        </div>
                    </div>
                </div>
