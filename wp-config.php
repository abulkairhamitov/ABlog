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
define( 'DB_NAME', 'ablog_db' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'CdeF5tt)[UJ|]4YbvC6Wa!r16xqhii{z5#AkHBLmsp$49_65SguL5^G}1eN?*Cg8' );
define( 'SECURE_AUTH_KEY',  'XEUjh6LeOM*g}6%kbDO0I@Y/`cOB/>@4WhVL%{*W<cUVK8}?Z:N+4rwP:6P[$Wz*' );
define( 'LOGGED_IN_KEY',    'Q<MoxYru3(2I*+&>2)R|ay.8z{HRS{[^S[q&zWmpmuu92Mp~?d:{;^:L]pk+_u|-' );
define( 'NONCE_KEY',        'trVqw#bQCVz?Q2nJZMqf[_/reSB6LUMU=xsBQx(`WTo]u/xCnn_J[I|ePF}tp&Cn' );
define( 'AUTH_SALT',        '[N*vJ94QOOSwAI/0.l1I2=]!C*q1<kE.DWP+zOioZ(!)h9F6<E8P&-XJO7K{e76j' );
define( 'SECURE_AUTH_SALT', 'N^Qd7?|^VlOaIp+$5@qxf,gC+B*-;ah5nI8klzkTid7$SAn0JRuINvM=*d]u2T1h' );
define( 'LOGGED_IN_SALT',   '4K0vcWM^}_c/5XdTpMmu7d$0~i>RmN))-Ngd-qBG^Kn=:8p}yPf36`I_<nF(#`VD' );
define( 'NONCE_SALT',       '#pCgCq.s]|JThvh TwjfNMv.QojgBrz#,Rr7CVg<M+d]4@s27`8z~*.iDu+Q@lQ`' );

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
