<?php require_once(__DIR__.'/vendor/autoload.php');

use function Raymondoor\Helper\Imute\strict_string;

echo strict_string('1');

echo APP::get('TITLE');