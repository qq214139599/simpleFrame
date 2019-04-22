<?php
class userDao extends baseDao
{
    public function __construct()
    {
        parent::__construct();
    }
    public function info()
    {
        return "userDao::info();";
    }
}