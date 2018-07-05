<?php
class IndexController extends Yaf_Controller_Abstract {
   /* default action */
   public function indexAction() {
       $this->_view->word = "hi";
       //or
       // $this->getView()->word = "hello ";
   }
}
?>
