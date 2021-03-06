<?php

/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        return new ViewModel();
    }

    public function realisationAction() {
        return new ViewModel();
    }

    public function portfolioAction() {
        return new ViewModel();
    }

    public function realizationAction() {
        $this->layout()->setTemplate('layout/layout2');
        return new ViewModel();
    }

    public function contactAction() {
        $this->layout()->setTemplate('layout/layout2');
        return new ViewModel();
    }

    public function serviceAction() {
        return new ViewModel();
    }

    public function realistionAction() {
        $this->layout()->setTemplate('layout/layout2');
        return new ViewModel();
    }

    public function modeleAction() {
         $this->layout()->setTemplate('layout/layout3');
        return new ViewModel();
    }
}
