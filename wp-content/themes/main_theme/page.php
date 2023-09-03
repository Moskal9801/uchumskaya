<? get_header(); ?>

    <section class="default-page__body">
        <div class="body__container container-default">
            <div class="container__title"><?php the_title(); ?></div>
            <div class="container__content"><?php the_content(); ?></div>
        </div>
    </section>

    <?php echo get_template_part( 'parts/all', 'feedback' ); ?>

<? get_footer();