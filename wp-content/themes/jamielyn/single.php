<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post row-fluid post-title" id="post-title-<?php the_ID(); ?>">
            <div class="span12">
                <h2>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a>
                </h2>
            </div>
        </div>
        <div class="post row-fluid post-meta" id="post-meta-<?php the_ID(); ?>">
            <p>
                <span class="post-date">Posted on <?php the_time('j M, Y') ?></span>&nbsp;
                <span class="post-cate">in <?php the_category(', ') ?></span>&nbsp;&bull;
                <span class="post-tags">Tags: <?php the_tags('', ' ',''); ?></span>
                <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?>
            </p>
        </div>
        <div class="post post-entry" id="post-<?php the_ID(); ?>">
            <?php the_content(__('Read the rest of this entry &raquo;')); ?>
            <?php wp_link_pages(); ?>
        </div>

        <div class="comments" style="display: none;">
            <?php comments_template(); ?>
        </div>

    <?php endwhile; else : ?>

        <div class="post row-fluid">
            <div class="span12"><h2><?php _e('Error 404 - Not Found'); ?></h2></div>
        </div>

    <?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>