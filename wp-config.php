<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'spark' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '1234' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd]g!n=RxeELrCH29IHH:A62]mSZ`PK:uA(CYjDcwaxYjee*r4@Ml5^mf,^Qi]kj&' );
define( 'SECURE_AUTH_KEY',  '0%V-cQ-p:c-_9oeXCvYM@G`h,9/p[g?3~E*YkXy:3X~%*8?:3M9~ws>Wg>N?Z 1[' );
define( 'LOGGED_IN_KEY',    'C>~D({-ZW8r`J]I3+wU f+!77e9v4=$bgN=/$ALc>$Wg{YH/7/%NpAZsrC0H?u(j' );
define( 'NONCE_KEY',        '0)RQXT<Ns8~mW>! &$xD}vx`5c?HE).X4bq(r$^b{||guLF1S:8CvFsoxZf xk:A' );
define( 'AUTH_SALT',        '(lz+]X+>{Ubx-?)kHd&rDqJ3OoZ3/Nq{Cih>/ZlhgzT`lU>4O8m5lJZ+|Iy#2:dQ' );
define( 'SECURE_AUTH_SALT', 'eDg)/5v8k3nAe:7jG+Kpz|hi~?s(h~9409F}uF$ua@mN+:vyD9Q@i_2~$h%yo1E*' );
define( 'LOGGED_IN_SALT',   'eIxm+z]&sBX3wVd`re?^JqjQ{4NlN:(=ssce?|;%yaNvjX!i^iAd.u40SE~aoYLr' );
define( 'NONCE_SALT',       'i7};8^_);{f~W%61RM$}MGP-mmR29T<S.c*Er7_H&6ZYh7k8D=pMFA.S)uUN@_u-' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
