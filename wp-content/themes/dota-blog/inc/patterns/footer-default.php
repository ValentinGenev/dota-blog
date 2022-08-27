<?php
/**
 * default footer pattern
 *
 * @package dotablog
 * @since dotablog 1.0
 */

function dotablog_footer_default(): void {
    register_block_pattern(
        'dota-blog/footer-default',
        [
            'title'     => __('Powered by WordPress', 'dotablog'),
            'content'   => '
                <!-- wp:site-title {"level":0} /-->
                <!-- wp:paragraph {"align":"right"} -->
                    <p class="has-text-align-right">' . sprintf(
                    esc_html__('Proudly powered by %s', 'dotablog'),
                    '<a href="' . esc_url(__('https://wordpress.org', 'dotablog')) . '" rel="nofollow">WordPress</a>'
                    ) . '</p>
                <!-- /wp:paragraph -->',
        ]
    );
}
add_action('init', 'dotablog_footer_default');
