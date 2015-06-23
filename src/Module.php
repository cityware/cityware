<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Cityware;

use Zend\ModuleManager\ModuleManager;

class Module {

    public function init(ModuleManager $moduleManager) {
        $sharedEvents = $moduleManager->getEventManager()->getSharedManager();
    }

    public function getConfig() {
        return include dirname(__DIR__) . '/config/module.config.php';
    }

    public function getViewHelperConfig() {
        return array(
            'invokables' => array(
                
            )
        );
    }

}
