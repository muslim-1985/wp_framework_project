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
define('DB_NAME', 'wordpress_loc');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'n2-S~7DjE&eZc>rLB wH+pd#e}PKgb>CpU:UA(0bQ{p#eY;hq#_3&hIbT3w] <vI');
define('SECURE_AUTH_KEY',  'X,.I3Vgh$AvE3.:rk6mab75+{`L2Yug{]^=8-Ntm4d`Z)<UM/b1U0fAoNX.Ovmoh');
define('LOGGED_IN_KEY',    '*y-G3[D&s )yY^*-=ar%Z30>~]2++<E=3czEio@[j[O^/H# i9;Wt?;&%/UY#=I,');
define('NONCE_KEY',        '9M/R$ CTspWl9B4[aCKb{g[*JkM!p|aM~rqbJ{gXRnx?Khii/C3:EIQU_x,-(jwa');
define('AUTH_SALT',        '*`G;[ys8vE=5k<@%1N<QP~ZM-6x4Ibmr_<oRc54d*KK4g=wPf[nC)z8eR+D-HucI');
define('SECURE_AUTH_SALT', ';-{N3s}lRfGfh~TE%/F`_zC:jt<?>#]l9#gx]n,&A^=7-wvYPEb2E0)/vF>9)55~');
define('LOGGED_IN_SALT',   'l4/#[.<.WR&R?nMfjBt]/> i|@`qz>c<Fe#RnFiq@@o<TP[/D~=b8fXGmC&5W R;');
define('NONCE_SALT',       '*&XVS48cCy0!=K|bm*fc`&:KJ* > eJYjlukrEN?t;SfP]WH{AD@/]JJk)Cgm-Cp');

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
