<?php
namespace Index;
use Sample\Model;


class Controller extends \Yaf\Controller_Abstract {

    public function init() {
		$this->getView()->assign("header", "Yaf Example");
	}

	public function indexAction($name = "Stranger") {
		//1. fetch query
		$get = $this->getRequest()->getQuery("get", "default value");

		//2. fetch model
		$model = new Model();

		//3. assign
		$this->getView()->assign("content", $model->selectSample());
		$this->getView()->assign("name", $name);

//        var_dump($this->d);

		//4. render by Yaf, 如果这里返回FALSE, Yaf将不会调用自动视图引擎Render模板
        return TRUE;
	}

    public function infoAction()
    {
        print_r('hey');

        return true;
    }
}
