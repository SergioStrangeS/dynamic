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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'dynamics' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'M;B@wk0D:SWg_v8mOoHhYg/A&+N7o9ZjEcUs[(&bPQwb2HR* BxO+3yP4d}At}f|' );
define( 'SECURE_AUTH_KEY',  'C`hUy{l],#4N/1=nZC]3[OGFcM8r%5/][<G]cEehP$o-;?=x8xj#`DyA@7v66wk=' );
define( 'LOGGED_IN_KEY',    'o~UB.1Co1FY!8u6Uc#uS4tgh7BHr|6ct,%H!c:9j seff+Gr24G&5q,Jncx.f>7k' );
define( 'NONCE_KEY',        '~VFV_Klf]3vq8}75QS+K&2sAaac+~Z)}=uTXYX.Ic,E:O2|E+H^$i8D6_z2xl8zt' );
define( 'AUTH_SALT',        'MOiG 2VO=S26:;KX9xNf2NWmV>Z51]s3wv(m?:R1{n1_Y%F:xqgBzt &Xf+$n-9J' );
define( 'SECURE_AUTH_SALT', '1WP#4A>C$zwHKZWR5S_JB0tAQ|i#T<V4$%XWTup]$(S9$S)HFWV_]h5E$`/^g9Ih' );
define( 'LOGGED_IN_SALT',   '^|bh&;V/,LU_:DKS3w)W2r*}buE=rNI;wfBw(~MtO`RQgoAVFx{QPh3t>YuWE09A' );
define( 'NONCE_SALT',       '+Kyu~{_TS%1FEJi>AlT/dWyg<J9w(nr|DC#j#fM-{[=PsDBQSwvoO-P)N04VI{4S' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
