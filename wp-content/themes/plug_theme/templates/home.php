<?php
/* Template name: Заглушка */
get_header();
?>

<section class="plug__container container">
    <div class="container__image"><img src="/wp-content/themes/plug_theme/assets/images/plug-image.png"></div>
    <div class="container__title">сайт находится в разработке</div>
    <div class="container__info">
        В настоящее время сайт находится на реконструкции.<br>
        По всем вопросам, пожалуйста, обращайтесь:<br>
        Телефон: <a href="tel:<?php echo clearPhone(get_field( 'plug-phone', 'option' )); ?>"><?php the_field( 'plug-phone', 'option' ); ?></a><br>
        E-mail: <a href="mailto:<?php the_field( 'plug-mail', 'option' ); ?>"><?php the_field( 'plug-mail', 'option' ); ?></a>
    </div>
</section>

<?php
get_footer();
?>
