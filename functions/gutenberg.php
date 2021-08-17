<?php 
// gutenberg editor defaults
function martinesio_gutenberg_default_colors(){
  // custom colors as default choices
  add_theme_support(
    'editor-color-palette',
    array(
      array(
        'name' => 'Light Purple',
        'slug' => 'slug',
        'color' => '#606dbc'
      ),
      array(
        'name' => 'Dark Purple',
        'slug' => 'slug',
        'color' => '#465298'
      ),
    ),
  );

  // set default font sizes for the editor
  add_theme_support(
        'editor-font-sizes',
        array(
            array(
                'name' => 'Normal',
                'slug' => 'normal',
                'size' => 16
            ),
            array(
                'name' => 'Large',
                'slug' => 'large',
                'size' => 24
            )
        )
    );
}
add_action( 'init', 'martinesio_gutenberg_default_colors' );

// custom gutenberg blocks
function martinesio_gutenberg_blocks(){
  // wp_register_script('custom-cta-js', get_template_directory_uri().'/js/gutenberg-cta-block.js', array('wp-blocks'));
  wp_register_script('custom-cta-js', get_template_directory_uri().'/build/index.js', array('wp-blocks'));
  register_block_type('martinesio/custom-cta-block', array(
    'editor_script' => 'custom-cta-js'
  ));
}
add_action('init', 'martinesio_gutenberg_blocks');