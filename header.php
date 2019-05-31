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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button>
                
                <?= wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'container'      => 'div',
                        'container_class'=> 'collapse navbar-collapse justify-content-center',
                        'container_id'=> 'navbarNavDropdown',
                        'menu'           => 'ul',
                        'menu_class'     => 'navbar-nav',
                        'depth'          => 3
                    ) ); ?>

                <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav"> 
                        <li class="nav-item active"> 
                            <a class="nav-link" href="index.html"><?php _e( 'Ana Sayfa', 'pincode' ); ?>  <span class="sr-only"><?php _e( '(current)', 'pincode' ); ?></span></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="detay.html"><?php _e( 'Detay', 'pincode' ); ?></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"><?php _e( 'Kek', 'pincode' ); ?></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"><?php _e( 'Yemek', 'pincode' ); ?></a> 
                        </li>
                        <li class="nav-item"> 
                            <a class="nav-link" href="#"><?php _e( 'Sağlık', 'pincode' ); ?></a> 
                        </li>
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php _e( 'Açılır Menü', 'pincode' ); ?> </a> 
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink"> 
                                <a class="dropdown-item" href="#"><?php _e( 'Alt', 'pincode' ); ?>  <?php _e( 'Menü', 'pincode' ); ?></a> 
                                <a class="dropdown-item" href="#"><?php _e( 'Alt', 'pincode' ); ?>  <?php _e( 'Menü', 'pincode' ); ?></a> 
                                <a class="dropdown-item" href="#"><?php _e( 'Alt Menü', 'pincode' ); ?></a> 
                            </div>
                        </li>
                    </ul>

                </div>

            </nav>                 
        </div>             
    </header>
    <!-- Header -->
