<?php
/* Template name: Продукция */
get_header();
?>

    <section class="products-page__banner">
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

    <section class="products-page__info">
        <div class="info__container container">
            <div class="container__left-content">
                <div class="left-content__title"><?php the_field( 'services-title' ); ?></div>
                <div class="left-content__image"><img src="<?php the_field( 'services-image' ); ?>"></div>
                <div class="left-content__description"><?php the_field( 'services-text' ); ?></div>
            </div>
            <div class="container__right-content">
                <img src="<?php the_field( 'services-image' ); ?>">
            </div>
        </div>
    </section>

    <section class="products-page__products">
        <div class="products__container container">
            <div class="container__title">Продукция</div>
            <div class="container__content">
                <?php $args = array(
                    'post_type' => 'products',
                    'post_status' => 'publish',
                );
                $query = new WP_Query( $args );
                if ( $query->have_posts() ) :
                    while ( $query->have_posts() ) : $query->the_post(); ?>
                        <div class="content__item">
                            <div class="item__image">
                                <img src="<?php the_field( 'product-image' ); ?>" />
                            </div>
                            <div class="item__info">
                                <div class="info__title"><?php the_title(); ?></div>
                                <div class="info__description"><?php the_field( 'product-description' ); ?></div>
                                <a class="info__button default-button" href="<?php echo get_permalink(); ?>">Подробнее</a>
                            </div>
                        </div>
                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
