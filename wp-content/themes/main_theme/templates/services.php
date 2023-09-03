<?php
/* Template name: Услуги */
get_header();
?>

    <section class="services-page__banner">
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

    <section class="services-page__info">
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

    <section class="services-page__proud">
        <div class="proud__container container">
            <div class="container__title">Мы гордимся</div>
            <div class="container__content">
                <?php if ( have_rows( 'proud','51' ) ) : ?>
                    <?php while ( have_rows( 'proud','51' ) ) : the_row(); ?>
                        <div class="content__item">
                            <div class="item__title"><?php the_sub_field( 'proud-title' ); ?></div>
                            <div class="item__description"><?php the_sub_field( 'proud-description' ); ?></div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="container__background">
                <img src="/wp-content/themes/main_theme/assets/images/proud.png">
            </div>
        </div>
    </section>

    <section class="services-page__services">
        <div class="services__container container">
            <div class="container__title">Услуги</div>
            <div class="container__content">
                <?php if ( have_rows( 'services-service' ) ) : ?>
                    <?php while ( have_rows( 'services-service' ) ) : the_row(); ?>
                        <div class="content__item">
                            <div class="item__image">
                                <img src="<?php the_sub_field( 'service-image' ); ?>">
                            </div>
                            <div class="item__info">
                                <div class="info__title"><?php the_sub_field( 'service-title' ); ?></div>
                                <div class="info__description"><?php the_sub_field( 'service-description' ); ?></div>
                                <a class="info__button default-button call-popup" href="#">Заказать</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
