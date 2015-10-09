<?php
namespace Tym17\AdminSample\Block\Adminhtml;

use Magento\Backend\Block\Template;
use Tym17\AdminSample\Helper\ConfigHelper;

class CustomBlock extends Template
{
    /**
     * @var Tym17\AdminSample\Helper\ConfigHelper
     */
    protected $_config;

    /**
    * @param Context $context
    * @param array $data
    */
    public function __construct(
        Template\Context $context,
        ConfigHelper $config,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->_config = $config;
    }

    /**
     * @return string
     */
    public function greet()
    {
        return 'Greetings !';
    }

    public function getSampleText()
    {
        return $this->_config->getConfig('txt/textsample');
    }

}
