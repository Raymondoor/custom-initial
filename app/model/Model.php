<?php namespace Raymondoor\Model{

use Raymondoor\DBconnection;
use Raymondoor\DBoperation;

class Model extends DBoperation{
    public const TABLE = 'tmp';
    public static function make(){
        $res = parent::makeTableIfNot(self::TABLE,
            parent::create_id().', 
            foo TEXT, 
            bar TEXT,'.
            parent::create_time_record()
        );
        if($res < 0){
            throw new \Exception('Failed to make table');
        }
    }
    public static function drop(){
        $res = parent::dropTableIfIs(self::TABLE);
        if($res < 0){
            throw new \Exception('Failed to drop  table');
        }
    }
}

}