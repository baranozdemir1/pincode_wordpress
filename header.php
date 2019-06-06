<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <!-- Required meta tags -->         
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <!-- Bootstrap CSS -->                                             
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="description" content="<?=pincode_value('pincode_description')?>">
        <meta name="keywords" content="<?=pincode_value('pincode_keywords')?>">
        <?php wp_head(); ?>

        <?=pincode_value('pincode_google_analytics_kod')?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>" 
    style="
        background-color:<?=pincode_value('pincode_body_background_color');?>;
    ">
    <!-- Header -->         
    <header class="container"> 
        <nav class="navbar-top navbar-expand-lg font-18 shadow-sm" style="background-color:<?=pincode_value('pincode_header_background_color');?>;"> 
            <div class="container text-center"> 
                <div class="row"> 
                    <div class="col-md-4"> 
                        <div class="ust-nav d-none"></div>                             
                    </div>                         
                    <div class="col-md-4"> 
                        <a class="navbar-brand header-logo" href="<?=get_site_url();?>">
                            <img src="<?=pincode_image('pincode_logo')?>" class="img-fluid">
                        </a> 
                    </div>                         
                    <div class="col-md-4"> 
                        <div class="ust-nav" id="sosyal-medya-header-none"> 
                            <ul class="sosyal-medya-header mb-n-5">
                                
                                <?php
                                    if (empty(cs_get_option('pincode_sosyal_medya'))){
                                        echo "<li></li>";
                                    }else{

                                        $getir_grup = cs_get_option('pincode_sosyal_medya');
                                        foreach ($getir_grup as $getir_grup_value){
                                
                                ?>
                                    <li>
                                        <a target="_blank" href="<?=esc_html($getir_grup_value['pincode_hesap_linki'])?>"><i class="<?=esc_html($getir_grup_value['pincode_sosyal_medya_ikon'])?>"></i></a>
                                    </li>
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>                         
                </div>                     
            </div>                 
        </nav>
        <div class="header" style="background-color:<?=pincode_value('pincode_header_background_color');?>;"> 
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
                        'depth'           => 2,
                        'fallback_cb'     => 'bs4navwalker::fallback',
                        'walker'          => new bs4navwalker()
                    ]);
                    ?>
            </nav>
        </div>             
    </header>
    <!-- Header -->
