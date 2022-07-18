<?php

namespace Error;

use Yaf\Controller_Abstract;

class Controller extends Controller_Abstract
{
    public function infoAction()
    {
        return $this->getResponse()->setBody([
            'content' => 'some content'
        ]);
    }
}