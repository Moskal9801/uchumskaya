<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'uchumskaya_db' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '%/3NK[cX5>Dy8vJeA`EO[(?X5N#E$y5X>WPQR?jK:%JkXkGuB_ )nv!L%dS,#.YD' );
define( 'SECURE_AUTH_KEY',  'Cq Z[r!e3oY)XMa/smjJQvl#_.}*|-a{fNHZy&B~2VHAX_xU2DDA#b7*I,:H)(-<' );
define( 'LOGGED_IN_KEY',    '~hHggbrm$ _RYgL!^H;r~?ac2#%N1-Z&E@M4q$tD+5Kqw=C5-&|}P26FRda?[.j(' );
define( 'NONCE_KEY',        'h+BD}Fy9Yq; duF9/)6P_~ZSEg>*PM+SA4FumbM]s}8+HDsi:EG1JrMbsg/AP[9Y' );
define( 'AUTH_SALT',        'YX(.ivJzfIuJF{ta>%AN,b5X`E||3}~ MAZK@uP<xmuPne$Hkc%smbrl++r}d.3x' );
define( 'SECURE_AUTH_SALT', 'Zh9vKK;f:RaeR/!yPCa%8Jz^-c[e!7`}-/=:aj+6zffp%V#O4:rc ^qPg0Lv!I+[' );
define( 'LOGGED_IN_SALT',   'MtZK_6p#kcLQ)ed-lK6B!QxZ$|?`Sz$PD)/?#P{>hw+a`LDcWTJvtq]SE:Dp*[..' );
define( 'NONCE_SALT',       '[@%WY_ZT*b@&OyUvxpQsY0hWPp`tud> ZF X:l?CM3Vn|xP*O14vYv#ihi#|.|kT' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
