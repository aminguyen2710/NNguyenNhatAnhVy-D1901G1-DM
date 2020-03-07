<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package dro_one_page_converter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="article-inner-wrapper">
        <header class="entry-header">
            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

            <?php if ('post' === get_post_type()) : ?>
                <div class="entry-meta">
                    <?php
                    dro_one_page_converter_posted_on();
                    dro_one_page_converter_posted_by();
                    ?>
                </div><!-- .entry-meta -->
            <?php endif; ?>
        </header><!-- .entry-header -->

        <?php dro_one_page_converter_post_thumbnail(); ?>


        <div class="entry-content">
            <?php the_excerpt() ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php if (!is_single()) { ?>
                <div class="continue-reading">
                    <a href="<?php the_permalink(); ?>" title="<?php
                the_title_attribute(array(
                    'before' => esc_attr__('Continue Reading ', 'dro-one-page-converter')
                        )
                );
                ?>" rel="bookmark"><?php esc_html_e('Continue Reading', 'dro-one-page-converter'); ?><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            <?php } ?>
<?php dro_one_page_converter_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div><!-- .article-inner-wrapper -->
</article><!-- #post-<?php the_ID(); ?> -->
