<?php
// Appearance Customize API
function martinesio_customize_register( $wp_customize ) {
  /* Background gradient colors */
  $wp_customize->add_setting( 'background_color1' , 
    array(
      'default'   => '#606dbc',
      'transport' => 'refresh',
    ) 
  );
  $wp_customize->add_setting( 'background_color2' , 
    array(
      'default'   => '#465298',
      'transport' => 'refresh',
    ) 
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'martinesio_background_color',
      array(
        'label' => __('Background Color One', 'martinesio'),
        'section' => 'colors',
        'settings' => 'background_color1'
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Color_Control(
      $wp_customize,
      'martinesio_background_color2',
      array(
        'label' => __('Background Color Two', 'martinesio'),
        'section' => 'colors',
        'settings' => 'background_color2'
      )
    )
  );
}
add_action( 'customize_register', 'martinesio_customize_register' );

/**
 * Add color styling from theme
 */
function add_customizer_styles() {
  wp_enqueue_style(
      'custom-style',
      get_template_directory_uri() . '/css/custom_script.css'
  );
      $color1 = get_theme_mod( 'background_color1' );
      $color2 = get_theme_mod( 'background_color2' );
      $custom_css = "
              html{
                      background: repeating-linear-gradient(
                        45deg,
                        {$color1},
                        {$color1} 40px,
                        {$color2} 40px,
                        {$color2} 80px
                      );
              }";
      wp_add_inline_style( 'custom-style', $custom_css );
}
add_action( 'wp_enqueue_scripts', 'add_customizer_styles' );