<?php
//This codes for the comment section
if (post_password_required()) {
    return;
} ?>

<div id="comments" class="comments-area">
    <?php
    if (have_comments()) :
            //We have comments
    ?>
        <h2 class="comment-title">
            <?php
            printf(
                esc_html(_nx('One Review on &ldquo; %2$s &rdquo;', '%1$s Reviews on &ldquo; %2$s &rdquo;', get_comments_number(), 'Reviews title', 'portfoliotheme')),
                number_format_i18n(get_comments_number()),
                '<span>' . get_the_title() . '</span>'
            );
            ?>
        </h2>
        <ul class="comment-list">
            <?php 
            $args = array(
                'max-depth' => 4,
                'style' => 'ul',
                'type' => 'all',
                'reply_text' => 'Enter your feedback',
                'avatar_size' => 32,
                'reverse_top_level' => false,
                'format' => 'html5',
                'short_ping' => false,
                'echo' => true
            );
            wp_list_comments($args) ?>
        </ul>
        <?php
        if (!comments_open() && get_comments_number()) : ?>
            <p class="no-comments"><?php esc_html_e('Comments are closed', 'portfoliotheme') ?></p>
            
        <?php 
        endif;
        ?>
        
        <?php 
        endif;
        ?>
    <?php comment_form(); ?>
</div>
