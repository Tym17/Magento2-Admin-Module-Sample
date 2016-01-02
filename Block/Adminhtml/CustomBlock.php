<?php
namespace Tym17\AdminSample\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Tym17\AdminSample\Helper\ConfigHelper;
use Tym17\AdminSample\Model\AdminSample;

class CustomBlock extends Template
{
    /**
     * @var \Tym17\AdminSample\Helper\ConfigHelper
     */
    protected $_config;

    protected $_adminSampleModel;

    /**
    * @param Context $context
    * @param array $data
    */
    public function __construct(
        Template\Context $context,
        AdminSample $adminSampleModel,
        ConfigHelper $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_config = $config;
        $this->_adminSampleModel = $adminSampleModel;
    }

    /**
     * @return string
     */
    public function greet()
    {
        return $this->_adminSampleModel->getGreetings();
    }

    public function getSampleText()
    {
        return $this->_adminSampleModel->getSampleText();
    }

}
