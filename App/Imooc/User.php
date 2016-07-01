<?php
namespace Imooc;

class user
{
    public $id;
    public $username;
    public $password;
    public $mobile_phone;
    public $add_time;
    public $update_time;

    protected $db;


    /**
     * 类构造函数
     * @author Red-Bo
     * @date   2016-06-26
     */
    function __construct($id)
    {
        $this->db = new Imooc\Database\PDO();
        $this->db->connect('127.0.0.1','root','root','demo');
        $this->db->query('set names utf8');
        $sql = "select * from user where id ={$id} limit 1";
        $res =$this->db->query($sql);
        $this->id           = $data['id'];
        $this->username     = $data['username'];
        $this->password     = $data['password'];
        $this->mobile_phone = $data['mobile_phone'];
        $this->add_time     = $data['add_time'];
        $this->update_time  = time();
    }

    /**
     * 析构函数 在对象使用后再将数据存入数据库
     * @author Red-Bo
     * @date   2016-06-27
     * @return [type]     [description]
     */
    public function __destrunct()
    {
        $sql = "UPDATE user set
        `username` = {$this->username},
        `password` = {$this->password},
        `mobile_phone` = {$this->mobile_phone},
        `add_time`     = {$this->add_time},
        `update_time` = {$this->update_time}
        WHERE id = $this->id limit 1";
        
        $this->db->close();
    }
}
