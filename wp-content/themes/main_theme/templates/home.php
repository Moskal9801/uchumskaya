<?php
/* Template name: Главная */
get_header();
?>

    <section class="home-page__swiper">
        <div class="swiper__desktop-background swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'banner' ) ) : ?>
                    <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field( 'desktop-image' ); ?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper__mobile-background swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'banner' ) ) : ?>
                    <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
                        <div class="swiper-slide">
                            <img src="<?php the_sub_field( 'mobile-image' ); ?>">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="swiper__container container swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'banner' ) ) : ?>
                    <?php while ( have_rows( 'banner' ) ) : the_row(); ?>
                        <div class="container__slide swiper-slide">
                            <div class="slide__subtitle"><?php the_sub_field( 'banner-subtitle' ); ?></div>
                            <div class="slide__title"><?php the_sub_field( 'banner-title' ); ?></div>
                            <div class="slide__description"><?php the_sub_field( 'banner-description' ); ?></div>
                            <?php if ( have_rows( 'banner-button' ) ) : ?>
                                <?php while ( have_rows( 'banner-button' ) ) : the_row(); ?>
                                    <?php if ( get_sub_field( 'button-availability' ) == 1 ) : ?>
                                        <a class="slide__button" href="<?php the_sub_field( 'button-link' ); ?>"><?php the_sub_field( 'button-text' ); ?></a>
                                    <?php endif; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper__pagination"></div>
        </div>
    </section>

    <section class="home-page__delivery">
        <div class="delivery__desktop-background">
            <img src="<?php the_field( 'delivery-background' ); ?>">
        </div>
        <div class="delivery__container container">
            <div class="container__title"><?php the_field( 'delivery-title' ); ?></div>
            <div class="container__content">
                <div class="content__info">
                    <div class="info__title"><?php the_field( 'delivery-subtitle' ); ?></div>
                    <div class="info__description"><?php the_field( 'delivery-description' ); ?></div>
                    <a class="info__button default-button" href="#">Узнать подробнее</a>
                </div>
                <div class="content__image">
                    <img src="<?php the_field( 'delivery-image' ); ?>">
                </div>
            </div>
        </div>
    </section>

    <section class="home-page__proud">
        <div class="proud__container container">
            <div class="container__title">Мы гордимся</div>
            <div class="container__content">
                <?php if ( have_rows( 'proud' ) ) : ?>
                    <?php while ( have_rows( 'proud' ) ) : the_row(); ?>
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

    <section class="home-page__geography">
        <div class="geography__container container">
            <div class="container__title">География клиентов</div>
            <div class="container__content">
                <div class="content__map">
                    <?= file_get_contents(wp_get_attachment_image_url(get_field( 'geography-map' ))); ?>
                </div>
                <div class="content__description"><?php the_field( 'geography-description' ); ?></div>
            </div>
        </div>
    </section>

    <section class="home-page__product">
        <div class="product__container container">
            <div class="container__title">
                <div class="title__title">Продукция</div>
                <div class="title__description">Производим и поставляем зерновые по всей России. С нами сотрудничают 100 регионов.</div>
            </div>
            <div class="container__content">
                <div class="content__items">
                    <?php $args = array(
                        'post_type' => 'products',
                        'post_status' => 'publish',
                        'posts_per_page' => 4,
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <a class="items__item" href="<?php echo get_permalink(); ?>">
                                <div class="item__image">
                                    <img src="<?php the_field( 'main-image' ); ?>" />
                                    <div class="image__background"></div>
                                </div>
                                <div class="item__info">
                                    <div class="info__name"><?php the_title(); ?></div>
                                    <div class="info__description"><?php the_field( 'main-description' ); ?></div>
                                </div>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <a class="content__button default-button" href="/products/">Продукция</a>
            </div>
        </div>
    </section>

    <section class="home-page__reviews">
        <div class="reviews__title container">
            <div class="title__title">Отзывы клиентов</div>
            <div class="title__description">Мы всегда слушаем мнение наших клиентов и используем это в дальнейшей работе над улучшением нашей продукции и сервиса</div>
        </div>
        <div class="reviews__content swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows( 'reviews', 'option' ) ) : ?>
                    <?php while ( have_rows( 'reviews', 'option' ) ) : the_row(); ?>
                        <div class="content__item swiper-slide">
                            <div class="item__image">
                                <?php if(get_sub_field( 'reviews-image' )) { ?>
                                    <img src="<?php the_sub_field( 'reviews-image' ); ?>">
                                <?php } else { ?>
                                    <svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="42.5" cy="42.5" r="42" stroke="#D9D9D9"/>
                                        <path d="M29.9487 27.6316C29.9487 20.6554 35.568 15 42.4998 15C49.4316 15 55.0509 20.6554 55.0509 27.6316C55.0509 34.6078 49.4316 40.2632 42.4998 40.2632C35.568 40.2632 29.9487 34.6078 29.9487 27.6316ZM42.4998 35.2105C46.6589 35.2105 50.0305 31.8173 50.0305 27.6316C50.0305 23.4458 46.6589 20.0526 42.4998 20.0526C38.3407 20.0526 34.9691 23.4458 34.9691 27.6316C34.9691 31.8173 38.3407 35.2105 42.4998 35.2105Z" fill="#54C342" fill-opacity="0.3"/>
                                        <path d="M28.2998 48.709C24.5337 52.4992 22.418 57.6398 22.418 63H27.4384C27.4384 58.9799 29.0252 55.1244 31.8498 52.2817C34.6743 49.4391 38.5053 47.8421 42.4998 47.8421C46.4943 47.8421 50.3252 49.4391 53.1498 52.2817C55.9743 55.1244 57.5611 58.9799 57.5611 63H62.5816C62.5816 57.6398 60.4658 52.4992 56.6998 48.709C52.9337 44.9188 47.8258 42.7895 42.4998 42.7895C37.1738 42.7895 32.0659 44.9188 28.2998 48.709Z" fill="#54C342" fill-opacity="0.3"/>
                                    </svg>
                                <?php } ?>
                            </div>
                            <div class="item__more">
                                <div class="more__description"><?php the_sub_field( 'reviews-reviews' ); ?></div>
                                <div class="more__client">
                                    <div class="client__image">
                                        <?php if(get_sub_field( 'reviews-image' )) { ?>
                                            <img src="<?php the_sub_field( 'reviews-image' ); ?>">
                                        <?php } else { ?>
                                            <svg width="85" height="85" viewBox="0 0 85 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="42.5" cy="42.5" r="42" stroke="#D9D9D9"/>
                                                <path d="M29.9487 27.6316C29.9487 20.6554 35.568 15 42.4998 15C49.4316 15 55.0509 20.6554 55.0509 27.6316C55.0509 34.6078 49.4316 40.2632 42.4998 40.2632C35.568 40.2632 29.9487 34.6078 29.9487 27.6316ZM42.4998 35.2105C46.6589 35.2105 50.0305 31.8173 50.0305 27.6316C50.0305 23.4458 46.6589 20.0526 42.4998 20.0526C38.3407 20.0526 34.9691 23.4458 34.9691 27.6316C34.9691 31.8173 38.3407 35.2105 42.4998 35.2105Z" fill="#54C342" fill-opacity="0.3"/>
                                                <path d="M28.2998 48.709C24.5337 52.4992 22.418 57.6398 22.418 63H27.4384C27.4384 58.9799 29.0252 55.1244 31.8498 52.2817C34.6743 49.4391 38.5053 47.8421 42.4998 47.8421C46.4943 47.8421 50.3252 49.4391 53.1498 52.2817C55.9743 55.1244 57.5611 58.9799 57.5611 63H62.5816C62.5816 57.6398 60.4658 52.4992 56.6998 48.709C52.9337 44.9188 47.8258 42.7895 42.4998 42.7895C37.1738 42.7895 32.0659 44.9188 28.2998 48.709Z" fill="#54C342" fill-opacity="0.3"/>
                                            </svg>
                                        <?php } ?>
                                    </div>
                                    <div class="client__info">
                                        <div class="info__name"><?php the_sub_field( 'reviews-name' ); ?></div>
                                        <div class="info__post"><?php the_sub_field( 'reviews-post' ); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="swiper-pagination reviews__pagination"></div>
        </div>
    </section>

    <section class="home-page__news">
        <div class="news__container container">
            <div class="container__title">
                <div class="title__title">Последние новости</div>
                <div class="title__description">Это новости для тех, кто производит, обслуживает, перерабатывает сельхозпродукцию – для агропроизводителей, крестьян и фермеров, сервисных служб и компаний, переработчиков и многих других.</div>
            </div>
            <div class="container__content">
                <div class="content__items">
                    <?php $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'order'       => 'DESC',
                        'orderby'     => 'date',
                        'posts_per_page' => 3
                    );
                    $query = new WP_Query( $args );
                    if ( $query->have_posts() ) :
                        while ( $query->have_posts() ) : $query->the_post(); ?>
                            <a class="items__item" href="<?php echo get_permalink(); ?>">
                                <div class="item__image">
                                    <?php the_post_thumbnail(); ?>
                                    <div class="image__background"></div>
                                </div>
                                <div class="item__info">
                                    <div class="info__date"><?php echo get_the_date();?></div>
                                    <div class="info__name"><?php the_title(); ?></div>
                                    <div class="info__description"><?php the_excerpt(); ?></div>
                                </div>
                            </a>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                </div>
                <a class="content__button default-button" href="/news">Все новости</a>
            </div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
