<?php
/**
 * Footer Default
 * 
 * slug: frosty-cake/footer-default
 * title: Footer Default
 * categories: frosty-cake
 */

return array(
    'title'      =>__( 'Footer Default', 'frosty-cake' ),
    'categories' => array( 'frosty-cake' ),
    'content'    => '<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|fourground"}}},"color":{"background":"#4a144b"}},"textColor":"background","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group has-background-color has-text-color has-background has-link-color" style="background-color:#4a144b"><!-- wp:columns {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","right":"0px","left":"0px"},"blockGap":{"top":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"alignwide wow fadeInUp"} -->
<div class="wp-block-columns alignwide wow fadeInUp" style="margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"400"}},"fontFamily":"kaushan-script"} /-->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size">'. esc_html('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor ut labore et dolore magna aliqua.','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-left has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size"><span class="dashicons dashicons-email-alt"></span>  '. esc_html('support@example.com','frosty-cake') .'</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size"><span class="dashicons dashicons-phone"></span>  +123 456 7890</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size"><span class="dashicons dashicons-admin-home"></span>  '. esc_html('123, Red Hills, Chicago,IL, USA','frosty-cake') .'</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontFamily":"saira"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-saira-font-family" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"}},"textColor":"background","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-kaushan-script-font-family" style="font-size:22px;font-style:normal;font-weight:400;letter-spacing:2px"><strong>'. esc_html('Archives','frosty-cake') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:archives {"fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"blockGap":"20px","padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"className":"footer-box"} -->
<div class="wp-block-column footer-box" style="padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"}},"textColor":"background","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-kaushan-script-font-family" style="font-size:22px;font-style:normal;font-weight:400;letter-spacing:2px"><strong>'. esc_html('Recent Post','frosty-cake') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:latest-posts {"displayPostContent":true,"excerptLength":10,"featuredImageAlign":"left","featuredImageSizeWidth":38,"featuredImageSizeHeight":38,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontSize":"small","fontFamily":"inter"} /--></div>
<!-- /wp:column -->

<!-- wp:column {"style":{"spacing":{"padding":{"right":"0","left":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"footer-box","fontSize":"medium","fontFamily":"bricolage-grotesque"} -->
<div class="wp-block-column footer-box has-background-color has-text-color has-link-color has-bricolage-grotesque-font-family has-medium-font-size" style="padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"400","letterSpacing":"2px"}},"textColor":"background","fontFamily":"kaushan-script"} -->
<h2 class="wp-block-heading has-background-color has-text-color has-kaushan-script-font-family" style="font-size:22px;font-style:normal;font-weight:400;letter-spacing:2px"><strong>'. esc_html('Tags','frosty-cake') .'</strong></h2>
<!-- /wp:heading -->

<!-- wp:post-terms {"term":"post_tag","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","fontFamily":"inter"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"color":{"background":"#7a307a"}},"className":"copyright-text","layout":{"type":"constrained"}} -->
<div class="wp-block-group copyright-text has-background" style="background-color:#7a307a"><!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}}},"textColor":"background","className":"wow fadeInUp","fontSize":"medium","fontFamily":"inter"} -->
<p class="has-text-align-center wow fadeInUp has-background-color has-text-color has-link-color has-inter-font-family has-medium-font-size"><a href="https://www.wpradiant.net/products/free-cake-shop-wordpress-theme/">'. esc_html('Cake WordPress Theme ','frosty-cake') .' </a> '. esc_html(' By','frosty-cake') .' <a href="https://www.wpradiant.net/">'. esc_html('WP Radiant','frosty-cake') .'</a> | '. esc_html('Proudly powered by','frosty-cake') .' <a href="https://wordpress.org/">'. esc_html('WordPress','frosty-cake') .'</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->',
);