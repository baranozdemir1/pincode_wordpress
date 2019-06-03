<div class="carousel-item active"> 
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
                            <div class="card-img-overlay d-flex linkfeat"> 
                                <a href="<?php the_permalink(); ?>" class="align-self-end a-etiketi-beyaz " style="text-shadow: 1px 1px black">
                                    
                                    <?php
                                        $categories = get_the_category();
                                        if ( ! empty( $categories ) ) {
                                            echo '<span class="badge badge-primary">' . esc_html( $categories[0]->name ) . '</span>';
                                        }
                                    ?>

                                    <h4 class="card-title manset-font"><?=get_the_title();?></h4>
                              
                                    <p class="textfeat " style="display: none;"><?=wp_trim_words(get_the_content(),15);?></p> 
                                </a>
                            </div>
                        </div>
                    </div>
