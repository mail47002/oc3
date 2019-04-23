<?php
// HTTP
define('HTTP_SERVER', 'http://oc3.ari.in.ua/');

// HTTPS
define('HTTPS_SERVER', 'http://oc3.ari.in.ua/');

// DIR
define('DIR_APPLICATION', '/home/ari/ari.in.ua/oc3/catalog/');
define('DIR_SYSTEM', '/home/ari/ari.in.ua/oc3/system/');
define('DIR_IMAGE', '/home/ari/ari.in.ua/oc3/image/');
define('DIR_STORAGE', DIR_SYSTEM . 'storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'ari.mysql.tools');
define('DB_USERNAME', 'ari_oc3');
define('DB_PASSWORD', 'q434bmbf');
define('DB_DATABASE', 'ari_oc3');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');