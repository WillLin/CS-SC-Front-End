<?php
    global $PHT_layout;

    $PHT_permalink = get_permalink();
    $PHT_has_post_thumb = has_post_thumbnail();
?>

<?php if ($PHT_has_post_thumb) : ?>

    <?php if ($PHT_layout == 'medium') : ?>
        <div class="col-lg-5">
    <?php endif; ?>

        <div class="cl-blog-img">
            <?php the_post_thumbnail( array( null, null, 'bfi_thumb' => true ) ); ?>
        </div>

    <?php if ($PHT_layout == 'medium') : ?>
        </div>
    <?php endif; ?>

<?php endif; ?>

<?php if ($PHT_layout == 'medium') : ?>
    <?php if ($PHT_has_post_thumb) {
            echo '<div class="col-lg-7">';
        } else {
            echo '<div class="col-lg-12">';
        }
    ?>
<?php endif; ?>

<div class="cl-blog-naz">
    <div class="cl-blog-type"><i class="icon-pencil"></i></div>

    <div class="cl-blog-name">
        <a href="<?php echo esc_url($PHT_permalink); ?>"><?php the_title(); ?></a>
    </div >
    <div class="cl-blog-detail">
        <?php the_time('j F Y'); ?>,
        <?php _e('by', 'grandway'); ?> <?php the_author_posts_link(); ?>,
        <?php _e('in', 'grandway'); ?> <?php the_category(', '); ?>, <?php comments_popup_link( __('No comments', 'grandway'), __('1 comment', 'grandway'), __( '% comments', 'grandway'), null, __('Comments off', 'grandway') ); ?>
    </div>

    <?php if ( is_single() ) : ?>
        <div class="cl-blog-text">
            <?php the_content(); ?>
            <div class="cl-blog-like single-like"><?php echo PhoenixTeam_Likes::getPostLikeLink($post->ID); ?></div>
        </div>

</div><!-- cl-blog-naz -->
    <?php else : ?>
        <div class="cl-blog-text">
            <?php echo get_the_excerpt(); ?>
        </div>

</div><!-- cl-blog-naz -->
    <div style="overflow: hidden; width: 100%;">
        <div class="cl-blog-read"><a href="<?php echo esc_url($PHT_permalink); ?>"><i class="fa fa-angle-double-right"></i> <?php _e('Read More', 'grandway'); ?></a></div>
        <?php if (!is_single()) : ?>
          <div class="cl-blog-like"><?php echo PhoenixTeam_Likes::getPostLikeLink($post->ID); ?></div>
        <?php endif; ?>
    </div>
    <?php endif; ?>

<?php if ($PHT_layout == 'medium') : ?>
</div>
<?php endif; ?>
       <div class="col-lg-12"> <div class="cl-blog-line"></div></div>
