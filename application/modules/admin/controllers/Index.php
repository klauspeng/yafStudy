<?php

class IndexController extends Yaf\Controller_Abstract
{
    public function indexAction()
    {
        //默认Action
        $this->getView()->assign("content", "Hello World");
        var_dump($this->_module);
    }

    public function testAction()
    {
        echo 'test admin';
    }
}