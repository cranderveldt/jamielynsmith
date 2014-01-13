<?php get_header(); ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="post post-entry max960" id="post-<?php the_ID(); ?>">
            <?php if ( has_post_thumbnail() ) { ?>
                <div class="row-fluid">
                    <div class="span8">
                <?php the_post_thumbnail('full'); ?>
                    </div>
                    <div id="single-sidebar" class="span4">
            <?php } ?>
            <h2 id="post-title-<?php the_ID(); ?>" class="mobile-pad20">
            <?php the_title(); ?>
            </h2>
            <div class="post row-fluid post-meta hidden mobile-pad20" id="post-meta-<?php the_ID(); ?>">
                <div class="span12">
                <p>
                    <span class="post-date">Posted on <?php the_time('j M, Y') ?></span>&nbsp;
                    <span class="post-cate">in <?php the_category(', ') ?></span>&nbsp;
                    <?php edit_post_link(__('Edit'), ' &#183; ', ''); ?>
                </p>
                </div>
            </div>
            <div class="mobile-pad20">
                <?php the_content(__('Read the rest of this entry &raquo;')); ?>
            </div>
            <?php if ( has_post_thumbnail() ) { ?>
                    </div><!--/#single-sidebar-->
                </div><!--/.row-fluid-->
                <div id="sticky-sidebar" style="display: none;">
                    <div class="max960">
                        <div class="row-fluid">
                            <div class="offset8 span4" id="sticky-sidebar-target">
                            </div><!--/.span4-->
                        </div><!--/.row-fluid-->
                    </div><!--/.max960-->
                </div><!--/#single-sidebar-->
            <?php } ?>
            <?php wp_link_pages(); ?>
        </div><!--/.post-entry-->

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