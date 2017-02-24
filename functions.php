<?php

// Get Parent styles
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}




// Events Field



function gf_filter_amount() {
  return esc_attr( get_field( 'ticket_deposit_price' ) );
} add_filter( 'gform_field_value_deposit_price', 'gf_filter_amount' );

function gf_filter_amount_full() {
  return esc_attr( get_field( 'ticket_full_price' ) );
} add_filter( 'gform_field_value_full_price', 'gf_filter_amount_full' );






if ( ! function_exists( 'shivanow_get_events_signup' ) ) {
	/**
	 * Display engine Slideout Menu
	 *
	 * @uses get_sidebar()
	 * @since 1.0.0
	 */
	function shivanow_get_events_signup() {

    if ( is_singular( 'post' ) && has_category( 'events' ) ) { ?>

    <div class="event-form-wrap">

      <div class="event-form-header">
        <h3>– SIGN UP FOR THIS EVENT –</h3>
      </div>

      <div class="event-form">

        <?php echo do_shortcode( '[gravityform id="1" title="false" description="false"]' ); ?>

      </div>

    </div>

	<?php } }
} add_action( 'engine_single_post_after',  'shivanow_get_events_signup',     10 );
