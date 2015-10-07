<?php
namespace Tym17\AdminSample\Block\Adminhtml;

use Magento\Backend\Block\Template;

class CustomBlock extends Template
{
    /**
    * @param Context $context
    * @param array $data
    */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

}
