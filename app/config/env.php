<?php require_once(__DIR__.'/../../vendor/autoload.php');
use Symfony\Component\Dotenv\Dotenv;

// Main (Local Path)
define('ROOT_DIR', realpath(__DIR__.'/../../')); // '/'

(new Dotenv())->load(ROOT_DIR.'/.env');

define('APP_DIR', ROOT_DIR.DIRECTORY_SEPARATOR.'app'); // '/app'
define('DATA_DIR', APP_DIR.DIRECTORY_SEPARATOR.'data'); // '/app/data'
define('VIEW_DIR', APP_DIR.DIRECTORY_SEPARATOR.'view'); // '/app/data'
define('POST_DIR', APP_DIR.DIRECTORY_SEPARATOR.'post'); // '/app/post'
define('PUBLIC_DIR', ROOT_DIR.DIRECTORY_SEPARATOR.'');

// URL
const HOME_PATH = '/php_custom_initial'; // Leave blank if host is the root point. Add '/' in head if is not. e.g. '/myapp' This will map https://domain.com/myapp as home path.
define('HOME_URL', (isset($_SERVER['HTTPS'])?'https://':'http://').$_SERVER['SERVER_NAME'].HOME_PATH);
define('CURRENT_URL', (isset($_SERVER['HTTPS'])?'https://':'http://').$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);
define('ASSET_URL',HOME_URL.'/asset');
define('IMAGE_URL',ASSET_URL.'/image');
define('STYLE_URL',ASSET_URL.'/style');
define('SCRIPT_URL',ASSET_URL.'/script');

// App
define('APP_NAME', !empty($_ENV['APP_NAME'])?$_ENV['APP_NAME']:'APP_NAME');
// Allow access only from school
define('IPV4_RANGE', $_ENV['IPV4_ALLOW']); // set your own
define('IPV6_RANGE', $_ENV['IPV6_ALLOW']);


date_default_timezone_set('Asia/Tokyo');
if((bool)($_ENV['DEBUG'])){
    ini_set('display_errors', '1');
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}else{
    ini_set('display_errors', '0');
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
}