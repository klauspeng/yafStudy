<?php

class IndexController extends Yaf\Controller_Abstract
{
    public function indexAction()
    {
        //默认Action
        $this->getView()->assign("content", "Hello World");
    }

    public function index2Action()
    {
        echo 1111;
        return false;
    }
}