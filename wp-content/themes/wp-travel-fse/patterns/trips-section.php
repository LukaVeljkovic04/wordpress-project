<?php
/**
 * Title: Trips Section
 * Slug: wp-travel-fse/trips-section
 * Categories: wptravelfse
 *
 * @package wp-travel-fse
 * @since 1.0.0
 */

?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70"},"blockGap":"0"}},"className":"wptravel-fse-latest-blog","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull wptravel-fse-latest-blog" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"0"}}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:0"><?php echo esc_html( "Popular Trips", "wp-travel-fse" ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<p class="has-text-align-center" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html( "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.", "wp-travel-fse" ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:wptravel/trips-list {"layoutType":"layout-four"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->