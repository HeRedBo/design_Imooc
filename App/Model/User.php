<?php
namespace App\Model;

use Imooc\Factroy;

class User extends \Imooc\Model
{
    public function getInfo($id)
    {
        $sql = "SELECT * FROM user where id ={$id} limit 1";
        return Facgory::getDatebase('slave')
               -> query($sql)->fetch_assoc();
    }

    function create($user)
    {
        $user_id = 1;
        $this->notify($user);
        return $user_id;
    }
}

 ?>
