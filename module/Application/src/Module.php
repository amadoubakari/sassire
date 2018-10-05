<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application;

class Module
{
    const VERSION = '3.0.3-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
    
    /**
     * 
     * @param type int the value of person id 
     * @param type string
     * @param type boolean 
     * @author Gamaliel Passang <gamaliel.passang@gmail.com>
     * @copyright (c) 2018, SASSIRE GROUP Sarl
     * @name $globalVariableName
     * @since 12/01/1018
     * @version 1.0
     * @todo Description
     * @return type Description
     */
    public function testUsers($param,$param2,$param3) {
        return;
        
    }
}
