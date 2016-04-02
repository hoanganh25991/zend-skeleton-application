<?php
namespace Blog\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Created by IntelliJ IDEA.
 * User: Hoang Anh
 * Date: 01-Apr-16
 * Time: 10:47 AM
 */
class ListController extends AbstractActionController{
    public function indexAction(){
        $layout = $this->layout();
        //re
        $blogSite = new ViewModel(array(
            'message' => 'blogSite, child theme'
        ));
        $blogSite->setTemplate('layout/coder.phtml');

        $footer = new ViewModel(array(
            'message' => '(^^)'
        ));
        $footer->setTemplate('layout/footer.phtml');

        $layout->addChild($blogSite, 'blogSite');
        $layout->addChild($footer, 'footer');
        $view = new ViewModel(array(
            'message' => 'coder: Anh Le Hoang'
        ));
        return $view;
    }

    public function addAction(){
        $view = new ViewModel();
        return $view;
    }
}