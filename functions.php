<?php 

function shortcode_callback_func_portfolio( $atts = array(), $content = '' ) { 
	$atts = shortcode_atts( 
		array( 'id' => 'value', ), 
		$atts, 'shortcode-id' 
	); 

	ob_start(); ?> 
	
	<!-- markup here  -->

	<?php 
	$output = ob_get_contents(); 
	ob_end_clean(); 
	return $output; 
} 
add_shortcode( 'portfolio', 'shortcode_callback_func_portfolio' );