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
define('DB_NAME', 'cosmetologist_db');

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
define('AUTH_KEY',         '?fi2^&o=?uO3yxlfK{!n(z!.4Ne1OMA4q77K<!*=;qD(6%7<^b+x@k9V_,K<g.L2');
define('SECURE_AUTH_KEY',  '@+EltX%zvA]9Y63tn&KHpzsruGo9s[H0NUL;zJQ1ojOBPUY-.]oMD)k6c{!P~Ax~');
define('LOGGED_IN_KEY',    '^2}<DVvg&Ezu l+91J.}`G`2BQ(2Vl_kYbphhn]1VVN6@#5h+5,Zm(S}X<`Ay}m-');
define('NONCE_KEY',        '!D5C5}}YcWkkO$hE5QO( <4-z+sME?6xo2&(,&50R&D%sd?d{CQx$A/`w^Tb49iI');
define('AUTH_SALT',        '+3O8>%SUY:+(HT^;%Q1H?)rW3!?qF-%x ,QcjVb_`Qo0L+F/DuLglnObtNU1sO17');
define('SECURE_AUTH_SALT', 'Op*?0UPLY|os%RzE|IwcJj}]c<Fl=+)O|)+_O9&hXL@g{ka|O!]Z-GxUzJKzW|4k');
define('LOGGED_IN_SALT',   'HmX}{(|??=>rY+ H#g8Rapd+hUGIp|i:Xqnz_S4Ub&tJ0?|GES{a|>?&IecKna.r');
define('NONCE_SALT',       '-$ZEShf`7pUB6>=5VjQ@9n])|vB^Z+{:+um|/A_5Eh&5z7^$W3Y[^6_C?c:|-J$F');

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
