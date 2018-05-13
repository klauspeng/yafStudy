<?php

class IndexController extends Yaf_Controller_Abstract
{
    public function indexAction()
    {
        $db = \Yaf_Registry::get('db');
        $config = $db::getConfig();
        // 默认Action
        $this->getView()->assign("content", "Hello World");
    }

    public function textAction()
    {
        // 单行注释测试
        var_dump('倍儿爽！');
    }
}