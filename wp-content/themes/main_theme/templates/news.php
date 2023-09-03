<?php
/* Template name: Новости */
get_header();

$counter  = 1;
if (!wp_is_mobile()) {
    $maxPosts = 10;
} else {
    $maxPosts = 4;
}
?>

    <section class="news-page__banner">
        <div class="banner__banner">
            <div class="banner__desktop">
                <img src="<?php the_field( 'banner-desktop' ); ?>">
            </div>
            <div class="banner__mobile">
                <img src="<?php the_field( 'banner-mobile' ); ?>">
            </div>
        </div>
        <div class="banner__info container">
            <div class="info__title"><?php the_field( 'banner-title' ); ?></div>
            <div class="info__subtitle"><?php the_field( 'banner-subtitle' ); ?></div>
        </div>
    </section>

    <section class="news-page__news">
        <div class="news__container container">
            <div class="container__title">Последние новости</div>
            <div class="container__content">
                <div class="content__items">
                    <?php $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order'       => 'DESC',
                        'orderby'     => 'date',
                        'posts_per_page' => $maxPosts,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() && (($counter % $maxPosts) !== 0) ) : $query->the_post();
                            $params = [
                            'reviews_id' => get_the_ID()
                            ];
                            get_template_part('parts/news', 'items', $params);
                        $counter++; endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <div class="items__not-item">Список новостей пока пуст</div>
                    <?php endif; ?>
                </div>
                <?php $query = array (
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'post_per_page' => $maxPosts,
                );
                $posts = new WP_Query( $query );
                $allPostsCounter = 0;
                while ( $posts->have_posts() ) {
                    $posts->the_post();
                    $allPostsCounter++;
                }
                $maxPosts--;
                $maxPages = ceil( $allPostsCounter / $maxPosts );
                if ( $maxPages > 1 ) { ?>
                    <a href="#" class="content__more default-button"
                       id="more-news"
                       data-current-page="1"
                       data-query='<?= json_encode( $posts->query_vars ); ?>'
                       data-max-pages="<?= $maxPages; ?>">Показать еще
                    </a>
                <?php } wp_reset_postdata(); ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
