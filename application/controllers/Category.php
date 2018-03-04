<?php

class CategoryController extends Yaf\Controller_Abstract
{
    public function indexAction()
    {
        //默认Action
        $this->getView()->assign("content", "Hello World");
    }
}