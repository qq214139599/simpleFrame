<?php
class userModel extends baseModel
{
    protected $userDao;

    public function __construct()
    {
        parent::__construct();
        $this->userDao = new userDao();
    }

    public function info()
    {
        return "userModel::info();" . $this->userDao->info();
    }
}
