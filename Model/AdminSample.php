<?php

namespace Tym17\AdminSample\Model;

use Tym17\AdminSample\Api\Data\AdminSampleInterface;
use Tym17\AdminSample\Helper\ConfigHelper;

class AdminSample extends \Magento\Framework\Model\AbstractModel implements AdminSampleInterface
{
    /** @var  ConfigHelper */
    protected $_config;

    public function __construct(ConfigHelper $config)
    {
        $this->_config = $config;

    }
    public function getGreetings()
    {
        return 'Greetings!';
    }

    public function getSampleText()
    {
        return $this->_config->getConfig('txt/textsample');
    }
}