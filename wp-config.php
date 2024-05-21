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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', '***************' );

/** Имя пользователя базы данных */
define( 'DB_USER', '***************' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '**********' );

/** Имя сервера базы данных */
define( 'DB_HOST', '********.mysql.tools' );

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
define( 'AUTH_KEY',         '7Lw+:;%HHjj;HZL?~n}B`N 5j[Zr%*U93R-+|JlQMvskMuNqb8x$TGvRy<DN>yDY' );
define( 'SECURE_AUTH_KEY',  ';*0AFhFA2yg<8oz:w([=zGc{)<H*E)M_>pMp}8X6ptb29xgr,H{,&+ghv6S)%GRw' );
define( 'LOGGED_IN_KEY',    '_eN+riLX^V@bXyARjQMun z 2!sN+-6`Gbyo#t!FI)p3N`lv&A_;);TFbl{E@?yc' );
define( 'NONCE_KEY',        '!?IntHBh6N#;C>p.C[~fM{E[u_Irl}as`{&MQ.C?Y zcw9@3HWk NK<~)(S?XwE4' );
define( 'AUTH_SALT',        'bHV+&:iyctj[luzFNb7H3{I/TpKKIiZz&c,zG.jAwj~d-$du?s``J`rTU[v4gj^w' );
define( 'SECURE_AUTH_SALT', 'j;G|}72T+YK0R{uJOjtErJ.iyc93Lqqx<X=*K+$G[zb4}etK4RY1EucNI}iPXO$u' );
define( 'LOGGED_IN_SALT',   '$6mEkpW7$y4>XW*_KX=*QWQTzK=A&ET5]A3w%eRA$)JewCe(TsMDrm!L`OU[LnUm' );
define( 'NONCE_SALT',       '*ns:LEdd%cnyZd8Sn{d3k@HXySn<QmOh;hxb@aks+$.ZAvQ[XwRSAP,zR7bD27(7' );

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
