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
        echo "userControllers::info();" . $this->userModel->info();
    }

    public function test()
    {
        //测试调用公共函数
        test();
    }

}
