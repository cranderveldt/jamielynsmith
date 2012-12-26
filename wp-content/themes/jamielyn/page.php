<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php if (!is_page('Blog')) { ?>
        <div class="post row-fluid post-title" id="post-title-<?php the_ID(); ?>">
            <div class="span12">
                <h2 class="page-title"><?php the_title(); ?></h2>
            </div>
        </div>
        <?php } ?>
    <div class="post" id="post-<?php the_ID(); ?>">
        <?php the_content(__('Read the rest of this page &raquo;')); ?>
        <?php wp_link_pages(); ?>
        
        <?php edit_post_link(__('Edit'), '<p>', '</p>'); ?>
    </div>
    <div class="post comments" style="display: none;"><?php comments_template(); ?></div>
    <?php endwhile; endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>