<?php
namespace Tym17\AdminSample\Controller\Adminhtml\SampleOne;

class Index extends \Magento\Backend\App\Action
{
  /**
  * Index Action*
  * @return void
  */
  public function execute()
  {
      $this->_view->loadLayout();
      $this->_view->renderLayout();
  }
}
