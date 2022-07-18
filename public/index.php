<?php

use Yaf\Application;
use Yaf\Exception\StartupError;
use Yaf\Exception\TypeError;

require_once (__DIR__.'/../vendor/autoload.php');

const APPLICATION_PATH = '/app';
try {
//    $application = new Application([
//        'application' => [
//            'directory' => APPLICATION_PATH . "/application",
//            'dispatcher' => [
//                'catchException' => true
//            ]
//        ],
//        'routes' => [
//            'rewrite' => [
//                ["/project",
//                ['controller' => 'Project',
//                'action' => 'index']]
//            ]
//        ]
//    ]);
    $application = new Application(APPLICATION_PATH . "/conf/application.ini");
    $application
        ->bootstrap()
        ->run();
} catch (StartupError $e) {

} catch (TypeError $e) {

}
?>
