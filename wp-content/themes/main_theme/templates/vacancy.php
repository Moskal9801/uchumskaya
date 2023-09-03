<?php
/* Template name: Вакансии */
get_header();
?>

    <section class="vacancy-page__banner">
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

    <section class="vacancy-page__vacancy">
        <div class="vacancy__container container">
            <div class="container__title">Актуальные вакансии</div>
            <div class="container__content">
                <div class="content__items">
                    <?php $args = array(
                        'post_type' => 'vacancy',
                        'post_status' => 'publish',
                        'order'       => 'DESC',
                        'orderby'     => 'date',
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="items__item">
                                <div class="item__title"><?php the_title(); ?></div>
                                <div class="item__duties">
                                    <div class="duties__name">Обязанности:</div>
                                    <div class="duties__dutie"><?php the_field( 'vacancy-subduties' ); ?></div>
                                </div>
                                <div class="item__more">
                                    <div class="more__salary">З/П <?php the_field( 'vacancy-salary' ); ?></div>
                                    <a class="more__button default-button" href="<?php echo get_permalink(); ?>">Подробнее</a>
                                </div>
                            </div>
                        <?php endwhile;
                        wp_reset_postdata();
                    else: ?>
                        <div class="items__not-item">Список вакансий пока пуст</div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
