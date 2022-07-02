<?php
/**
 * Default header block pattern
 */


return array(
	'title'      => __( 'Default header', 'the-evolution' ),
	'categories' => array( 'header' ),
	'blockTypes' => array( 'core/template-part/header' ),
    'content'    => '    <!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group">
    <!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo {"width":64} /-->
            <!-- wp:site-title /-->
        </div>
        <!-- /wp:group -->
    <!-- wp:navigation {"className":"menu-spacing"} /-->
    </div>
    <!-- /wp:group -->
    </div>
    <!-- /wp:group -->'

);
