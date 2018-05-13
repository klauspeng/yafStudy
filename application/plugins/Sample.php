<?php

/**
 * Project :yaf
 * User: Klaus
 * Date: 2018.05.14 6:51
 */
class SamplePlugin extends Yaf_Plugin_Abstract
{

    public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //在路由之前触发
    }

    public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //路由结束之后触发
    }

    public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //分发循环开始之前触发
    }

    public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //分发之前触发
    }

    public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //分发结束之后触发
    }

    public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response)
    {
        //分发循环结束之后触发
    }
}