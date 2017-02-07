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
define('DB_NAME', 'rda_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         't+au@rnZYj84|E{w3~902s8- 0U)EeE,|o%vDV7rLa%c{ [W5Hm*ZyH#iNf]1Xc)');
define('SECURE_AUTH_KEY',  'ar>.||EEY(Wo}4[PHfg?&T1.Y6~wcSZP>/Uw-U*;oE^O=u1f,+5l?P)Js8d+Ca%}');
define('LOGGED_IN_KEY',    '6:ajbxqdwR:=UP@0N>6=F:nLDKuaRiKo1A&sL8u[wc/p!TzQsp6-|+{)wl#:W{ko');
define('NONCE_KEY',        ',!uPq?b4qY[H83^2x0zYoRsg#|~{_[5[DaF{GzCl Zp_0|{vBr$L[+]cS/` pTvQ');
define('AUTH_SALT',        'pafy`ZR(u0&p$GMMi3kWh|r-D*OH|PuRs|81dR^|D@|k0zp=&VuL0d-RG.<_]]-E');
define('SECURE_AUTH_SALT', 'Z^$k)-j_~ LBc>W&<{4^$h[sn(`Ua6Ub|A~E-_n^ti2UzaaSa?k|JnwED0>|>_K=');
define('LOGGED_IN_SALT',   'KwJ2?MA=M,@|hnwuDBRa:bH2 +K ufNKx8-%<wOI61@$FEd|><Qb+DZ!L]OgX+=w');
define('NONCE_SALT',       '?A/h5|R&c|ubjD5|K@_`1-QTbdY|#TTC9;|AGg S%XgXf+LNk/.JNjac!+KM(<`p');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
