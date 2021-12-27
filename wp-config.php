<?php
define('REVISR_GIT_PATH', ''); // Added by Revisr
define('REVISR_WORK_TREE', '/home/kackac/gwaramedia.com/www/'); // Added by Revisr
define( 'WP_CACHE', true );
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
define( 'DB_NAME', "kackac_production" );

/** Имя пользователя MySQL */
define( 'DB_USER', "kackac_production" );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', "dkK3dL2#-2" );

/** Имя сервера MySQL */
define( 'DB_HOST', "kackac.mysql.tools" );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

define('AUTH_KEY',         '8rh91S>qH=mi[nNgqJs^o:1R][7,c?`I+E(0+j!?.&umh+k7`P_F0w=06&uL-w2;');
define('SECURE_AUTH_KEY',  'Xm9Od2FduXd8IF%VL[o7 yO<)v#cZ,aGB.#hat/T#Lv%.+[sKu^Yi6l`}0zYcTn{');
define('LOGGED_IN_KEY',    'qx`p-/MD7s{L<ch=q3^kph}O1s]7J_0h^bNl!6@# p23h/=JLrD|MQ&~QeFl/etj');
define('NONCE_KEY',        'yDfEDv&vJYyQMwHjq!xl|ED=!Oq3t(RDnm+U!|{@?hNm~k:|S7=%cRtz|nbbL}Xj');
define('AUTH_SALT',        'I!(h?%}#FAcxUM!@cpKGEh,m[0Jy{;.|PCn~6A&*ab;-l!qs(~>r`3HBA10BG8mD');
define('SECURE_AUTH_SALT', '4{S`U;F:AQ~S1&HZF9h|Wx<csk+A!<+<>3 b,V^kWU}Jr-nZ4Z)bz,Mesz`?D`=Z');
define('LOGGED_IN_SALT',   'us`%QVP;u/?B1>ot#+Rn0WE<`,k<*rr:LX<9Ip_~S(myW(/@B9LfI)h|J{:+8[7Q');
define('NONCE_SALT',       '6AU/b7klT]6*J<tFZj}(j2oH9v+D*V5)jNx^) wurfdB&#jJyW=2*o1tOPE,hpB*');


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

