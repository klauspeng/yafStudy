<?php

/**
 * @name Bootstrap
 * @author root
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */

use \think\Db;

class Bootstrap extends Yaf_Bootstrap_Abstract
{
    private $arrConfig = null;

    public function _initConfig()
    {
        //把配置保存起来
        $this->arrConfig = Yaf_Application::app()->getConfig();
        Yaf_Registry::set('config', $this->arrConfig);
    }


    //载入方法库
    public function _initLibrary()
    {
        Yaf_Loader::import('Function.php');
    }

    //载入数据库
    public function _initDatabase()
    {
        $dbConfig = [
            // 数据库类型
            'type' => 'mysql',
            // 服务器地址
            'hostname' => $this->arrConfig->db->hostname,
            // 数据库名
            'database' => $this->arrConfig->db->database,
            // 数据库用户名
            'username' => $this->arrConfig->db->username,
            // 数据库密码
            'password' => $this->arrConfig->db->password,
            // 数据库连接端口
            'hostport' => 3306,
            // 数据库连接参数
            'params' => [],
            // 数据库编码默认采用utf8
            'charset' => 'utf8',
            // 数据库表前缀
            'prefix' => $this->arrConfig->db->logfilepath,
        ];
        Db::setConfig($dbConfig);
        Yaf_Registry::set('db', new Db());
    }

    //载入缓存类rEDIS
    public function _initCache()
    {
        $cache_config['port'] = $this->arrConfig->cache->port;
        $cache_config['host'] = $this->arrConfig->cache->host;
        // Yaf_Registry::set('redis', new Rdb($cache_config));
    }

    public function _initPlugin(Yaf_Dispatcher $dispatcher)
    {
        //注册一个插件
    }

    public function _initRoute(Yaf_Dispatcher $dispatcher)
    {

        //在这里注册自己的路由协议,默认使用简单路由
    }

    public function _initView(Yaf_Dispatcher $dispatcher)
    {
        //在这里注册自己的view控制器，例如smarty,firekylin
        $config = Yaf_Registry::get("config")->get("smarty");
        $smarty = new Smarty_Adapter(null, $config);
        $dispatcher->setView($smarty);
    }
}
