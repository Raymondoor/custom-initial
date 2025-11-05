<?php namespace Raymondoor\View{

use function Raymondoor\Helper\Imute\strict_string;

class View{
    public static function head($htmlString = ''){
        strict_string($htmlString);
        include_once(__DIR__.'/template/html-head.php');
    }
}

}