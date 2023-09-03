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