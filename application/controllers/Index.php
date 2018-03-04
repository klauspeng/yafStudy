<?php

class IndexController extends Yaf\Controller_Abstract
{
    public function indexAction()
    {
        $db= Yaf\Registry::get('db');
        $config = $db::getConfig();
        var_dump($config);
        //默认Action
        $this->getView()->assign("content", "Hello World");
    }

    public function textAction()
    {
        dump(111);
        var_dump(222);
    }
}