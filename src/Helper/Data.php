<?php

namespace Lailson\Biz\Helper;

use Magento\Store\Model\ScopeInterface;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\App\Helper\AbstractHelper;


class Data extends AbstractHelper
{
    const MODULE_PATH = 'lailson_newslettermodal/general/';

    /**
     * @var ScopeConfigInterface
     */

    protected $_scopeConfig;

    public function __construct(
        ScopeConfigInterface $scopeConfig
    )
    {
        $this->_scopeConfig = $scopeConfig;
    }

    /**
     * @return mixed
     */

    public  function getIsModuleEnable()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH.'enable',ScopeInterface::SCOPE_STORE);
    }

    public  function getModalTitle()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH.'title',ScopeInterface::SCOPE_STORE);
    }

    public  function getModalDescription()
    {
        return $this->_scopeConfig->getValue(self::MODULE_PATH.'description',ScopeInterface::SCOPE_STORE);
    }

}
