<?php

/** 
 * Comments Template
 * @package  QMA
 * @author   Aissam El KAllali
 * @link     https://3issam.com
 * @version  8.0
 */
defined('ABSPATH') || exit;

if (post_password_required()) {
    return;
}

// استخرج post ID من $args التي تمررها get_template_part
$post_id = 0;
if (isset($args) && is_array($args) && isset($args['post_id'])) {
    $post_id = intval($args['post_id']);
}

if (!$post_id) {
    $post_id = get_the_ID(); // fallback
}

?>

<div id="comments" class="comments-area qma-block">

    <?php
    comment_form([
        'title_reply'          => '<i class="ri-chat-new-line"></i> ' . __('Leave a Reply', 'qma'),
        'title_reply_before'   => '<div class="block-title"><div><h3 class="the-subtitle"><span>',
        'title_reply_after'    => '</span></h3></div></div>',
        'class_container'      => 'add-comment',
        'comment_field'        => QMA_comment::comment_field(),
        'class_submit'         => 'class_submit',
        'class_form'           => 'block-content',
        'comment_notes_before' => '',
        'comment_notes_after'  => '',
        'label_submit'         =>  __('Add Comment', 'qma'),
        'fields' => apply_filters('comment_form_default_fields', [
            'author' => QMA_comment::comment_form_author(),
            'email'  => QMA_comment::comment_form_email(),
        ]),
    ], $post_id);
    echo '<div class="com-rules"></div>';
    ?>

    <div class="qma-block-title">
        <h3><span><?php echo __('Comments', 'qma') ?></span></h3>

        <span class="comments-count-number">
            <i class="ri-chat-2-line"></i>
            <span><?php echo get_comments_number($post_id); ?></span>
        </span>
    </div>

    <div id="comments_order">
        <label><?php echo __('Comment Sorting by :', 'qma') ?></label>
        <select id="comment_filter" class="mx-auto">
            <option value="asc"><?php echo __('Ascending', 'qma') ?></option>
            <option value="desc"><?php echo __('Descending', 'qma') ?></option>
            <option value="best_rank"><?php echo __('Best Rated', 'qma') ?></option>
            <option value="worst_rank"><?php echo __('Lowest Rated', 'qma') ?></option>
        </select>
    </div>

    <?php
    $comments = get_comments([
        'post_id' => $post_id,
        'status'  => 'approve',
        'order'   => 'ASC',
    ]);
    if ($comments) : ?>
        <ol class="comment-list">
            <?php
            wp_list_comments([
                'callback' => 'qma_comment_list',
            ], $comments);
            ?>
        </ol>

        <?php if (get_comment_pages_count($post_id) > 1 && get_option('page_comments')) : ?>
            <nav id="comment-nav-below" class="clearfix navigation comment-navigation" role="navigation">
                <div class="nav-links">
                    <div class="nav-previous">
                        <?php previous_comments_link(__('Older Comments', 'qma')); ?>
                    </div>
                    <div class="nav-next">
                        <?php next_comments_link(__('Newer Comments', 'qma')); ?>
                    </div>
                </div>
            </nav>
        <?php endif; ?>

    <?php else : ?>
        <p class="no-comments"><?php echo __('No comments yet.', 'qma'); ?></p>
    <?php endif; ?>

    <?php if (!comments_open($post_id)) : ?>
        <p class="no-comments"><?php echo __('Comments are closed.', 'qma'); ?></p>
    <?php endif; ?>

</div>