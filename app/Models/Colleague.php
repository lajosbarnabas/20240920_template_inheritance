<?php

namespace App\Models;

class Colleague{
    public $name;
    public $phone;
    public $email;

    public static $colleagues = [];

    static function addColleague($colleague)
    {
        static::$colleagues[] = $colleague;
    }

    static function all(){
        return static::$colleagues;
    }
    
}

