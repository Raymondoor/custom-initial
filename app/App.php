<?php require_once(__DIR__.'/../vendor/autoload.php');

class App{
    public static $PAGE = [
        'TITLE' => APP_NAME,
        'INDEX' => 'index',
        'ALIAS' => 'Index'
    ];
    public static function init(array $val = []):array{
        // ini stuff
        date_default_timezone_set('Asia/Tokyo');

        // pretty error
        if((bool)($_ENV['DEBUG'])){
            $whoops = new \Whoops\Run;
            $whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
            $whoops->register();
        }

        // content type
        self::contentType();

        // init page
        if(!empty($val)){
            return self::set($val);
        }
        return self::$PAGE;
    }
    public static function set(array $val):array{
        self::$PAGE =  array_merge(self::$PAGE, $val);
        return self::$PAGE;
    }
    public static function get(string $key):mixed{
        return self::$PAGE[$key];
    }
    public static function contentType($type='text/html', $charset='UTF-8'):void{
        header('Content-Type: '.$type.'; charset='.$charset);
    }
}