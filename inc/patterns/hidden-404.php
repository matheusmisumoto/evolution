<?php
/**
 * 404 content.
 */
return array(
	'title'    => __( '404 content', 'the-evolution' ),
	'inserter' => false,
	'content'  => '    <!-- wp:group {"align":"wide","className":"title","layout":{"inherit":true}} -->
    <div class="wp-block-group alignwide title">
		<!-- wp:heading {"level":1,"align":"wide"} -->
		<h1>' . esc_html( _x( '404', 'Error code for a webpage that is not found.', 'the-evolution' ) ) . '</h2>
		<!-- /wp:heading -->
    </div>
    <!-- /wp:group -->
        
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">' . esc_html__( 'This page could not be found', 'the-evolution' ) . '</p>
	<!-- /wp:paragraph -->',
	
);
