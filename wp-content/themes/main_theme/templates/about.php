<?php
/* Template name: О компании */
get_header();
?>

    <section class="about-page__banner">
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

    <section class="about-page__info">
        <div class="info__container container">
            <div class="container__left-content">
                <div class="left-content__title"><?php the_field( 'about-title' ); ?></div>
                <div class="left-content__image"><img src="<?php the_field( 'about-image' ); ?>"></div>
                <div class="left-content__description"><?php the_field( 'about-text' ); ?></div>
                <a class="left-content__button default-button call-popup" href="#">Обратная связь</a>
            </div>
            <div class="container__right-content">
                <img src="<?php the_field( 'about-image' ); ?>">
            </div>
        </div>
    </section>

    <section class="about-page__history">
        <div class="history__title container">
            <div class="title__title">
                <div class="title__name">С чего всё начиналось</div>
                <div class="title__description"><?php the_field( 'history-text' ); ?></div>
            </div>
            <div class="title__pagination">
                <div class="pagination__prev nav-prev">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="29.5" transform="rotate(-180 30 30)" stroke="#54C442"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M34 21.5022L25.8732 30L34 38.4978L32.5634 40L23 30L32.5634 20L34 21.5022Z" fill="white"/>
                    </svg>
                </div>
                <div class="pagination__next nav-next">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="29.5" stroke="#54C442"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26 38.4978L34.1268 30L26 21.5022L27.4366 20L37 30L27.4366 40L26 38.4978Z" fill="white"/>
                    </svg>
                </div>
            </div>
        </div>
        <div class="history__content">
            <div class="content__line"></div>
            <div class="content__swiper swiper history-swiper">
                <div class="swiper-wrapper">
                    <?php if ( have_rows( 'history-history' ) ) : ?>
                        <?php while ( have_rows( 'history-history' ) ) : the_row(); ?>
                            <div class="content__item swiper-slide">
                                <div class="item__year"><?php the_sub_field( 'history-date' ); ?></div>
                                <div class="item__breakpoint">
                                    <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5" cy="5" r="5" fill="#54C442"/>
                                    </svg>
                                </div>
                                <div class="item__description"><?php the_sub_field( 'history-description' ); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section class="about-page__reviews">
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

    <section class="about-page__staff">
        <div class="staff__container container">
            <div class="container__title">
                <div class="title__title">Профессионалы своего дела</div>
                <div class="title__description"><?php the_field( 'staff-text' ); ?></div>
            </div>
            <div class="container__content">
                <?php if ( have_rows( 'staff-staff' ) ) : ?>
                    <?php while ( have_rows( 'staff-staff' ) ) : the_row(); ?>
                        <div class="content__item">
                            <div class="item__image">
                                <img src="<?php the_sub_field( 'staff-image' ); ?>" />
                            </div>
                            <div class="item__name"><?php the_sub_field( 'staff-name' ); ?></div>
                            <div class="item__post"><?php the_sub_field( 'staff-post' ); ?></div>
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
