<?php
/**
 * Created by PhpStorm.
 * User: hoanltm
 * Date: 14/11/2018
 * Time: 16:45
 */

namespace Model;
class Customer
{
    public $name;
    public $email;
    public $address;

    public function __construct($name, $email, $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
    }
}