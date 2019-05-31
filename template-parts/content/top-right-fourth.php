                <div class="col-6 pb-2 mrml-m">
                    <div class="card bg-dark text-white">
                        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img img-fluid', 'title' => 'Thumb Photo']); ?>
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
