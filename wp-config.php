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
define( 'DB_NAME', 'maket' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'maket_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'gu5hqC83t28fi3vT' );

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
define( 'AUTH_KEY',         'zsgmw6;8j?$/YIkm=tM-Eo2y^H!UREO.sT_QhAEqYyq,W#gw0ToXZ3&JqF }r`AJ' );
define( 'SECURE_AUTH_KEY',  '7sD[w0M#:m$?SRQ5J.Uk&LrFgq:=^o7uTo+>ZMZ&Lw6Ke6@rj&F-ASp=gAF|ZQbO' );
define( 'LOGGED_IN_KEY',    'VD/Iyts3#^,jOJoykwm~.%tcC4Z)EyhzXg0MLV p|R3 uhfgEogWRV7[A5KH4cQk' );
define( 'NONCE_KEY',        '.4<&A1U},TQWx7D(Xg,p~8WFQ2AP}3aevRHY%D]`+tc[F;UkL3Th^h6*Xpz5NP>S' );
define( 'AUTH_SALT',        '=(nAEKqYDc^3!15hY2BCHx&7-[uHh(IxoiNV0{mkB2 }hZnJR~#UIX@&GR) N O#' );
define( 'SECURE_AUTH_SALT', 'D0LF}MiqE/L1&k7&<A;,*eOSvH-A}.o`^0{kZT1tH}UD$u8g=7$IBbss%_KY<x(L' );
define( 'LOGGED_IN_SALT',   'Yu/EN00nG)_J4i``nwiO{U@B6y$7}9fGL|na!R2kso.%dtiApWaa@%T,RQpM?)eE' );
define( 'NONCE_SALT',       '1NX~loip9J6T-@;QN.$rY}H#Wd#Fxq@9gYu 5lu?l$R z#Xi0PP$!7Gq.aD-|E0O' );

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
