<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'training');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vCOedn_^GTs(Rm57 T2vV~7cRxNYHrw1X+>bEB_|L9y(]rKkF_o>9mqXq$qG%-!Y');
define('SECURE_AUTH_KEY',  'uYH[vH&hmX&j&]+ySD0%153H Ry>%NqkORkwb)#l}n~&UvB/*:f6fm0t^.x*v(+f');
define('LOGGED_IN_KEY',    '++sT^O0jx|,NOjQ|!2,4-:3P7uDgGB;Kd:1JcY1`-,S@Y()Ru+T@wzcCeMHi9/P_');
define('NONCE_KEY',        'Ze|I7khBdU:O<23%o/Blf&P#c!]{aDG.tR_UOTW/>0(+3.g;J`IR`} m%#Qo55=L');
define('AUTH_SALT',        'cU]5kewN~Ucn3:VyZ(Fe#NowVYCveUK5vbO[69yELVHG@F+[qg7]0j^N1<hHq ON');
define('SECURE_AUTH_SALT', 'Zfo:!n@z]TRCq${vc/!g&>+FI@HIS6w`m;v]V2aDcO8ASKs@c[)c<rF|c_p@AOmz');
define('LOGGED_IN_SALT',   ';t6eIGyGm{(!(@W2Q&>24UgVbu&E> KH#3#=;cj(&rQ;+ph6zfp^4/Cqut= keZ*');
define('NONCE_SALT',       '{P+R4w$*Br:b;:7:j/1[H=kJ#PpDtpE+|W:5W+(6_$<]9s>UB,q4o4B6htiWIHjs');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
