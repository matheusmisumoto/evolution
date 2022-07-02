<?php
/**
 * Default footer block pattern
 */

return array(
	'title'      => __( 'Default footer', 'the-evolution' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
    'content'    => '   
    <!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull">

        <!-- wp:group {"align":"wide","className":"line","layout":{"type":"flex","orientation":"horizontal"}} -->
        <div class="wp-block-group alignwide line">

            <!-- wp:site-logo {"width":64} /-->

            <!-- wp:paragraph -->
            <p>© Site Title</p>
            <!-- /wp:paragraph -->
    
            <!-- wp:navigation {"overlayMenu":"never","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"},"className":"textFooter"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->'

);
