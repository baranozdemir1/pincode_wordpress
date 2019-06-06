<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================

$my_theme = wp_get_theme();

$settings           = array(
  'menu_title'      => 'PinCode Ayarlar',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => $my_theme->get( 'TextDomain' ) .'-ayarlari',
  'menu_icon'       => 'dashicons-location',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => $my_theme->get( 'Name' ) .' Ayarları <small>by Baran Özdemir</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();



// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'pincode_genel_ayarlar',
  'title'       => 'Genel Ayarlar',
  'icon'        => 'fa fa-cogs',

  // begin: fields
  'fields'      => array(
  
    // begin: a field
    array(
      'id'    => 'pincode_description',
      'type'  => 'textarea',
      'title' => 'Description',
      'desc'  => 'En fazla <code><b>300 karakter hacmine</b></code> sahip olmalıdır.'
    ),
    // end: a field
    // begin: a field
    array(
      'id'    => 'pincode_keywords',
      'type'  => 'text',
      'title' => 'Keywords',
      'desc'  => 'En fazla <code><b>60 karakter hacmine</b></code> sahip olmalıdır.'
    ),
    // end: a field
    // begin: a field
    array(
      'id'      => 'pincode_logo',
      'type'    => 'image',
      'title'   => 'Logo',
    ),
    // end: a field
    // begin: a field
    array(
      'id'              => 'pincode_sosyal_medya',
      'type'            => 'group',
      'title'           => 'Sosyal Medya Hesapları',
      'desc'            => 'Header ( üst bar ) \'daki Sosyal Medya Hesaplarınız.',
      'button_title'    => 'Hesap Ekle',
      'accordion_title' => 'Yeni Hesap Ekle',
      'fields'          => array(

        array(
          'id'          => 'pincode_hesap_linki',
          'type'        => 'text',
          'title'       => 'Hesap Linki',
          'desc'        => 'Örneğin: <code>https://instagram.com/baranozdemir1</code>'
        ),

        array(
          'id'      => 'pincode_sosyal_medya_ikon',
          'type'    => 'icon',
          'title'   => 'İkon',
        ),

      )
    ),
    // end: a field
    // begin: a field
    array(
      'id'    => 'pincode_google_analytics_kod',
      'type'  => 'textarea',
      'title' => 'Google Analytics Kodu'
    ),
    // end: a field

  ), // end: fields
);
// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'     => 'pincode_renk_ayarlari',
  'title'    => 'Renk Ayarları',
  'icon'     => 'fa fa-paint-brush',

  // begin: fields
  'fields'      => array(
  
    // begin: a field
    array(
      'id'    => 'pincode_body_background_color',
      'type'  => 'color_picker',
      'title' => 'Body Background Rengi',
      'default' => '#fff'
    ),
    // end: a field
    // begin: a field
    array(
      'id'    => 'pincode_header_background_color',
      'type'  => 'color_picker',
      'title' => 'Header Background Rengi',
      'default' => '#fff'
    ),
    // end: a field
    // begin: a field
    array(
      'id'    => 'pincode_menu_active_color',
      'type'  => 'color_picker',
      'title' => 'Header Menü Aktif Rengi',
      'default' => '#fff'
    ),
    // end: a field
    
    // begin: a field
    array(
      'id'    => 'pincode_genel_active_color',
      'type'  => 'color_picker',
      'title' => 'Site Genel Aktif Rengi',
      'default' => '#fff'
    ),
    // end: a field
    // begin: a field
    array(
      'id'    => 'pincode_genel_hover_color',
      'type'  => 'color_picker',
      'title' => 'Site Genel Hover Rengi',
      'default' => '#fff'
    ),
    // end: a field

  ), // end: fields
);

// ------------------------------
// yedek                       -
// ------------------------------
$options[]   = array(
  'name'     => 'yedek_section',
  'title'    => 'Yedekleme',
  'icon'     => 'fa fa-shield',
  'fields'   => array(

    array(
      'type'    => 'notice',
      'class'   => 'success',
      'content' => 'Mevcut kayıtlı verilerinizi yedekleyebilirsiniz ve tekrar yükleyebilirsiniz.',
    ),

    array(
      'type'    => 'backup',
    ),

  )
);

// ------------------------------
// license                      -
// ------------------------------

/*
$options[]   = array(
  'name'     => 'license_section',
  'title'    => 'Lisans',
  'icon'     => 'fa fa-lock',
  'fields'   => array(

    array(
      'type'    => 'heading',
      'content' => '100% GPL License, Yes it is free!'
    ),
    array(
      'type'    => 'content',
      'content' => 'Codestar Framework is <strong>free</strong> to use both personal and commercial. If you used commercial, <strong>please credit</strong>. Read more about <a href="http://www.gnu.org/licenses/gpl-2.0.txt" target="_blank">GNU License</a>',
    ),

  )
);
*/
CSFramework::instance( $settings, $options );
