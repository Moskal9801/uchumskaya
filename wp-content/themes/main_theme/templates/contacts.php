<?php
/* Template name: Контакты */
get_header();
?>

    <section class="contacts-page__banner">
        <div class="banner__banner">
            <div class="banner__desktop">
                <img src="<?php the_field( 'banner-desktop' ); ?>">
            </div>
            <div class="banner__mobile">
                <img src="<?php the_field( 'banner-mobile' ); ?>">
            </div>
        </div>
        <div class="banner__title container">Контакты</div>
    </section>

    <section class="contacts-page__management">
        <div class="management__container container">
            <div class="container__title">Управление</div>
            <div class="container__content">
                <div class="content__item">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="18" fill="#54C442"/>
                        <mask id="mask0_389_1881" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="24" height="24">
                            <rect x="6" y="6" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_389_1881)">
                            <path d="M18 18C18.55 18 19.0208 17.8042 19.4125 17.4125C19.8042 17.0208 20 16.55 20 16C20 15.45 19.8042 14.9792 19.4125 14.5875C19.0208 14.1958 18.55 14 18 14C17.45 14 16.9792 14.1958 16.5875 14.5875C16.1958 14.9792 16 15.45 16 16C16 16.55 16.1958 17.0208 16.5875 17.4125C16.9792 17.8042 17.45 18 18 18ZM18 25.35C20.0333 23.4833 21.5417 21.7875 22.525 20.2625C23.5083 18.7375 24 17.3833 24 16.2C24 14.3833 23.4208 12.8958 22.2625 11.7375C21.1042 10.5792 19.6833 10 18 10C16.3167 10 14.8958 10.5792 13.7375 11.7375C12.5792 12.8958 12 14.3833 12 16.2C12 17.3833 12.4917 18.7375 13.475 20.2625C14.4583 21.7875 15.9667 23.4833 18 25.35ZM18 28C15.3167 25.7167 13.3125 23.5958 11.9875 21.6375C10.6625 19.6792 10 17.8667 10 16.2C10 13.7 10.8042 11.7083 12.4125 10.225C14.0208 8.74167 15.8833 8 18 8C20.1167 8 21.9792 8.74167 23.5875 10.225C25.1958 11.7083 26 13.7 26 16.2C26 17.8667 25.3375 19.6792 24.0125 21.6375C22.6875 23.5958 20.6833 25.7167 18 28Z" fill="white"/>
                        </g>
                    </svg>
                    <p>Фактический/почтовый адрес<br><?php the_field( 'contacts-address', 'option' ); ?></p>
                </div>
                <div class="content__item">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="18" fill="#54C442"/>
                        <mask id="mask0_389_1888" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="24" height="24">
                            <rect x="6" y="6" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_389_1888)">
                            <path d="M25.95 27C23.8 27 21.7042 26.5208 19.6625 25.5625C17.6208 24.6042 15.8125 23.3375 14.2375 21.7625C12.6625 20.1875 11.3958 18.3792 10.4375 16.3375C9.47917 14.2958 9 12.2 9 10.05C9 9.75 9.1 9.5 9.3 9.3C9.5 9.1 9.75 9 10.05 9H14.1C14.3333 9 14.5417 9.075 14.725 9.225C14.9083 9.375 15.0167 9.56667 15.05 9.8L15.7 13.3C15.7333 13.5333 15.7292 13.7458 15.6875 13.9375C15.6458 14.1292 15.55 14.3 15.4 14.45L12.975 16.9C13.675 18.1 14.5542 19.225 15.6125 20.275C16.6708 21.325 17.8333 22.2333 19.1 23L21.45 20.65C21.6 20.5 21.7958 20.3875 22.0375 20.3125C22.2792 20.2375 22.5167 20.2167 22.75 20.25L26.2 20.95C26.4333 21 26.625 21.1125 26.775 21.2875C26.925 21.4625 27 21.6667 27 21.9V25.95C27 26.25 26.9 26.5 26.7 26.7C26.5 26.9 26.25 27 25.95 27ZM12.025 15L13.675 13.35L13.25 11H11.025C11.1083 11.6833 11.225 12.3583 11.375 13.025C11.525 13.6917 11.7417 14.35 12.025 15ZM20.975 23.95C21.625 24.2333 22.2875 24.4583 22.9625 24.625C23.6375 24.7917 24.3167 24.9 25 24.95V22.75L22.65 22.275L20.975 23.95Z" fill="white"/>
                        </g>
                    </svg>
                    <p>Телефон/факс<br>
                        <?php if ( have_rows( 'contacts-phones', 'option' ) ) : ?>
                            <?php while ( have_rows( 'contacts-phones', 'option' ) ) : the_row(); ?>
                                <a href="tel:<?php echo clearPhone(get_sub_field( 'phones-phone' ))?>"><?php the_sub_field( 'phones-phone' ); ?><span>,</span></a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </p>
                </div>
                <div class="content__item">
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="18" cy="18" r="18" fill="#54C442"/>
                        <mask id="mask0_389_1895" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="24" height="24">
                            <rect x="6" y="6" width="24" height="24" fill="#D9D9D9"/>
                        </mask>
                        <g mask="url(#mask0_389_1895)">
                            <path d="M10 26C9.45 26 8.97917 25.8042 8.5875 25.4125C8.19583 25.0208 8 24.55 8 24V12C8 11.45 8.19583 10.9792 8.5875 10.5875C8.97917 10.1958 9.45 10 10 10H26C26.55 10 27.0208 10.1958 27.4125 10.5875C27.8042 10.9792 28 11.45 28 12V24C28 24.55 27.8042 25.0208 27.4125 25.4125C27.0208 25.8042 26.55 26 26 26H10ZM18 19L10 14V24H26V14L18 19ZM18 17L26 12H10L18 17ZM10 14V12V24V14Z" fill="white"/>
                        </g>
                    </svg>
                    <a href="mailto:<?php the_field( 'contacts-mail', 'option' ); ?>"><?php the_field( 'contacts-mail', 'option' ); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts-page__production">
        <div class="production__container container">
            <div class="container__title">Адреса производства</div>
            <div class="container__content">
                <?php if ( have_rows( 'production' ) ) : ?>
                    <?php while ( have_rows( 'production' ) ) : the_row(); ?>
                        <div class="content__item">
                            <div class="item__title">
                                <div class="title__district"><?php the_sub_field( 'production-district' ); ?></div>
                                <div class="title__more"><?php if (get_sub_field( 'production-more' )) {?>(<?php the_sub_field( 'production-more' ); ?>)<?php } ?></div>
                            </div>
                            <div class="item__function"><?php the_sub_field( 'production-function' ); ?></div>
                            <div class="item__address">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="18" fill="#54C442"/>
                                    <mask id="mask0_389_1912" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="24" height="24">
                                        <rect x="6" y="6" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_389_1912)">
                                        <path d="M18 18C18.55 18 19.0208 17.8042 19.4125 17.4125C19.8042 17.0208 20 16.55 20 16C20 15.45 19.8042 14.9792 19.4125 14.5875C19.0208 14.1958 18.55 14 18 14C17.45 14 16.9792 14.1958 16.5875 14.5875C16.1958 14.9792 16 15.45 16 16C16 16.55 16.1958 17.0208 16.5875 17.4125C16.9792 17.8042 17.45 18 18 18ZM18 25.35C20.0333 23.4833 21.5417 21.7875 22.525 20.2625C23.5083 18.7375 24 17.3833 24 16.2C24 14.3833 23.4208 12.8958 22.2625 11.7375C21.1042 10.5792 19.6833 10 18 10C16.3167 10 14.8958 10.5792 13.7375 11.7375C12.5792 12.8958 12 14.3833 12 16.2C12 17.3833 12.4917 18.7375 13.475 20.2625C14.4583 21.7875 15.9667 23.4833 18 25.35ZM18 28C15.3167 25.7167 13.3125 23.5958 11.9875 21.6375C10.6625 19.6792 10 17.8667 10 16.2C10 13.7 10.8042 11.7083 12.4125 10.225C14.0208 8.74167 15.8833 8 18 8C20.1167 8 21.9792 8.74167 23.5875 10.225C25.1958 11.7083 26 13.7 26 16.2C26 17.8667 25.3375 19.6792 24.0125 21.6375C22.6875 23.5958 20.6833 25.7167 18 28Z" fill="white"/>
                                    </g>
                                </svg>
                                <p><?php the_sub_field( 'production-adress' ); ?></p>
                            </div>
                            <div class="item__phone">
                                <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="18" cy="18" r="18" fill="#54C442"/>
                                    <mask id="mask0_389_1919" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="6" y="6" width="24" height="24">
                                        <rect x="6" y="6" width="24" height="24" fill="#D9D9D9"/>
                                    </mask>
                                    <g mask="url(#mask0_389_1919)">
                                        <path d="M25.95 27C23.8 27 21.7042 26.5208 19.6625 25.5625C17.6208 24.6042 15.8125 23.3375 14.2375 21.7625C12.6625 20.1875 11.3958 18.3792 10.4375 16.3375C9.47917 14.2958 9 12.2 9 10.05C9 9.75 9.1 9.5 9.3 9.3C9.5 9.1 9.75 9 10.05 9H14.1C14.3333 9 14.5417 9.075 14.725 9.225C14.9083 9.375 15.0167 9.56667 15.05 9.8L15.7 13.3C15.7333 13.5333 15.7292 13.7458 15.6875 13.9375C15.6458 14.1292 15.55 14.3 15.4 14.45L12.975 16.9C13.675 18.1 14.5542 19.225 15.6125 20.275C16.6708 21.325 17.8333 22.2333 19.1 23L21.45 20.65C21.6 20.5 21.7958 20.3875 22.0375 20.3125C22.2792 20.2375 22.5167 20.2167 22.75 20.25L26.2 20.95C26.4333 21 26.625 21.1125 26.775 21.2875C26.925 21.4625 27 21.6667 27 21.9V25.95C27 26.25 26.9 26.5 26.7 26.7C26.5 26.9 26.25 27 25.95 27ZM12.025 15L13.675 13.35L13.25 11H11.025C11.1083 11.6833 11.225 12.3583 11.375 13.025C11.525 13.6917 11.7417 14.35 12.025 15ZM20.975 23.95C21.625 24.2333 22.2875 24.4583 22.9625 24.625C23.6375 24.7917 24.3167 24.9 25 24.95V22.75L22.65 22.275L20.975 23.95Z" fill="white"/>
                                    </g>
                                </svg>
                                <p>Телефон/факс: <a href="tel:<?php echo clearPhone(get_sub_field( 'production-phone' ))?>"><?php the_sub_field( 'production-phone' ); ?></a></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section class="contacts-page__maps"><script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A957c9c9c131302e314f533eef8c60ade737ecd77a9fa1194616b35c439879951&amp;width=100%25&amp;height=490&amp;lang=ru_RU&amp;scroll=true"></script></section>

<?php
get_footer();
?>
