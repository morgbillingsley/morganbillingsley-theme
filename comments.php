<div class="comments">
    <?php $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'reply_text'        => 'Reply',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 80,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
            'echo'              => true     // boolean, default is true
        ); 
    ?>

    <?php
        wp_list_comments($args, $comments);
        $comments_args = array(
                'class_submit'          => 'btn btn-primary',
                'label_submit'          => 'Send',
                'title_reply_before'    => '<h4>',
                'title_reply'           => 'Write a Reply or Comment',
                'title_reply_after'     => '</h4>',
                'comment_notes_after'   => '',
                'comment_field'         => '<p class="comment-form-comment form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea class="form-control" id="comment" name="comment" rows="3" aria-required="true"></textarea></p>',
                'author'                => '<p class="comment-form-author form-group"><label for="author">' . _x( 'Name', 'noun' ) . '</label><input class="form-control" type="text" id="author" name="author" value size="30" maxlength="100" require="required"></p>',
                'email'                => '<p class="comment-form-email form-group"><label for="email">' . _x( 'Email', 'noun' ) . '</label><input class="form-control" type="email" id="email" name="email" value size="30" maxlength="100" require="required"></p>',
                'url'                => '<p class="comment-form-url form-group"><label for="url">' . _x( 'Website', 'noun' ) . '</label><input class="form-control" type="text" id="url" name="url" value size="30" maxlength="245"></p>'
        );
        comment_form($comments_args);
    ?>
</div>