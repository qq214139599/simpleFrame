<?php
class userController extends baseController
{
    protected $userModel;
    public function __construct()
    {
        parent::__construct();
        $this->userModel = new userModel();
    }

    public function info()
    {
        $this->userModel->info();
    }

}
