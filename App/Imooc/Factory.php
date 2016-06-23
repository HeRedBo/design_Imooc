<?php
namespace IMooc;

class Factory
{
    static function createDatebase()
    {
        $db = Database::getInstace();
        return $db;
    }
}
 ?>
