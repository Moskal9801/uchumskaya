<?php
/* Template name: Поставщикам */
get_header();
?>

    <section class="providers-page__banner">
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

    <section class="providers-page__info">
        <div class="info__container container">
            <div class="container__title"><?php the_field( 'providers-title' ); ?></div>
            <div class="container__description"><?php the_field( 'providers-text' ); ?></div>
        </div>
    </section>

    <section class="providers-page__providers">
        <div class="providers__container container">
            <?php if ( have_rows( 'providers-documents' ) ) : ?>
                <?php while ( have_rows( 'providers-documents' ) ) : the_row(); ?>
                    <div class="container__item">
                        <div class="item__image">
                            <img src="<?php the_sub_field( 'documents-image' ); ?>">
                        </div>
                        <div class="item__info">
                            <div class="info__title"><?php the_sub_field( 'documents-title' ); ?></div>
                            <div class="info__description"><?php the_sub_field( 'documents-description' ); ?></div>
                            <a class="info__button default-button" target="_blank" href="<?php the_sub_field( 'documents-file' ); ?>">Скачать документ</a>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<?php
get_footer();
?>
