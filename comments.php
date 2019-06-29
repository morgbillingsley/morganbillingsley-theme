<div class="comments col-md-8 mx-auto">
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
                'class_submit'          => 'btn btn-primary mt-2 mb-4',
                'label_submit'          => 'Send',
                'title_reply_before'    => '<h4 class="text-center">',
                'title_reply'           => 'Write a Reply or Comment',
                'title_reply_after'     => '</h4>',
                'comment_notes_before'  => '',
                'comment_notes_after'   => '',
                'comment_field'         => '<p class="comment-form-comment form-group"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea class="form-control" id="comment" name="comment" rows="3" aria-required="true"></textarea></p>',
                'fields'                => array(
                    'author'    => '<div class="row"><div class="col-md-6"><p class="comment-form-author form-group"><label for="author">' . _x( 'Name', 'noun' ) . '</label><input class="form-control" type="text" id="author" name="author" value size="30" maxlength="100" require="required"></p></div>',
                    'email'     => '<div class="col-md-6"><p class="comment-form-email form-group"><label for="email">' . _x( 'Email', 'noun' ) . '</label><input class="form-control" type="email" id="email" name="email" value size="30" maxlength="100" require="required"></p></div></div>',
                    'url'       => '<div class="row"><div class="col-md-12"><p class="comment-form-url form-group"><label for="url">' . _x( 'Website', 'noun' ) . '</label><input class="form-control" type="text" id="url" name="url" value size="30" maxlength="245"></p></div></div>',
                    'cookies'   => '<div class="row"><div class="col-md-12"><p class="comment-form-cookies form-group"><div class="form-check"><input id="wp-comment-cookies-consent form-check-input" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label class="form-check-label" for="wp-comment-cookies-consent"> Remember me</label></div></p></div></div>'
                )
        );
        comment_form($comments_args);
    ?>
</div>