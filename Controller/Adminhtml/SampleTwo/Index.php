<?php
namespace Tym17\AdminSample\Controller\Adminhtml\SampleTwo;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
     protected $resultPageFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
    * Index Action*
    * @return void
    */
    public function execute()
    {
        /** @var \MAgento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('Tym17_AdminSample::sampleTwo');
        $resultPage->addBreadcrumb(__('System'), __('System'));
        $resultPage->addBreadcrumb(__('SampleTwo'), __('SampleTwo'));
        $resultPage->getConfig()->getTitle()->prepend(__('SampleTwo Title')); // Changing the page title
        // You will notice that this block 'Two' is defined in the template file
        $resultPage->getLayout()->getBlock('Two')->setSampleText('This text is passed'); // Here we use Magento2's Magic getsetters
        return $resultPage;
    }
}
