<?php
/**
 * Footer block pattern with social links
 */

return array(
	'title'      => __( 'Footer with navigation and social links', 'the-evolution' ),
	'categories' => array( 'footer' ),
	'blockTypes' => array( 'core/template-part/footer' ),
    'content'    => '   
    <!-- wp:group {"align":"full","layout":{"inherit":true}} -->
    <div class="wp-block-group alignfull">

    <!-- wp:group {"align":"wide","className":"line","layout":{"type":"flex","orientation":"horizontal"}} -->
    <div class="wp-block-group alignwide line">
            <!-- wp:heading {"level":3} -->
            <h3>Follow Me</h3>
            <!-- /wp:heading -->

            <!-- wp:social-links {"iconColor":"foreground","iconColorValue":"var(--wp--preset--color--foreground)","iconBackgroundColor":"background","iconBackgroundColorValue":"var(--wp--preset--color--background)","layout":{"type":"flex","justifyContent":"center"}} -->
			<ul class="wp-block-social-links has-icon-color has-icon-background-color">
                <!-- wp:social-link {"url":"#","service":"instagram"} /-->
                <!-- wp:social-link {"url":"#","service":"twitter"} /-->
                <!-- wp:social-link {"url":"#","service":"youtube"} /-->
            </ul>
			<!-- /wp:social-links -->
        </div>
        <!-- /wp:group -->

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
