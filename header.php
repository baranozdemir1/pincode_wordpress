<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <!-- Required meta tags -->         
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <!-- Bootstrap CSS -->                                             
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>">
    <!-- Header -->         
    <header class="container"> 
        <nav class="navbar-top navbar-expand-lg font-18 shadow-sm"> 
            <div class="container text-center"> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="ust-nav d-none"></div>                             
                    </div>                         
                    <div class="col-md-4"> 
                        <a class="navbar-brand header-logo" href="#"><?php _e( 'Logo', 'pincode' ); ?></a> 
                    </div>                         
                    <div class="col-md-4"> 
                        <div class="ust-nav" id="sosyal-medya-header-none"> 
                            <ul class="sosyal-medya-header mb-n-5"> 
                                <li>
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                </li>                                     
                                <li>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                </li>                                     
                                <li>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </li>                                     
                            </ul>                                 
                        </div>                             
                    </div>                         
                </div>                     
            </div>                 
        </nav>
        <div class="header"> 
            <nav class="navbar navbar-expand-lg navbar-light shadow-sm font-18">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                    <?php
                    wp_nav_menu([
                        'menu'            => 'primary',
                        'theme_location'  => 'primary',
                        'container'       => 'div',
                        'container_id'    => 'bs4navbar',
                        'container_class' => 'collapse navbar-collapse justify-content-center',
                        'menu_id'         => false,
                        'menu_class'      => 'navbar-nav',
                        'depth'           => 5,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                    ?>
            </nav>
        </div>             
    </header>
    <!-- Header -->
