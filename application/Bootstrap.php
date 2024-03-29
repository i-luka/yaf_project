<?php
/**
 * @name Bootstrap
 * @author root
 * @desc 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * @see http://www.php.net/manual/en/class.yaf-bootstrap-abstract.php
 * 这些方法, 都接受一个参数:\Yaf\Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends \Yaf\Bootstrap_Abstract {

    public function _initConfig() {
		//把配置保存起来
//		$arrConfig = \Yaf\Application::app()->getConfig();
//		\Yaf\Registry::set('config', $arrConfig);
	}

	public function _initPlugin(\Yaf\Dispatcher $dispatcher) {
		//注册一个插件
//		$objSamplePlugin = new Sample_Plugin();
//		$dispatcher->registerPlugin($objSamplePlugin);
	}

	public function _initRoute(\Yaf\Dispatcher $dispatcher) {
        $config = new Yaf\Config\Ini('/app/conf/routing.ini');
        $dispatcher->getRouter()->addConfig($config);
    }
	
	public function _initView(\Yaf\Dispatcher $dispatcher) {

	}
}
