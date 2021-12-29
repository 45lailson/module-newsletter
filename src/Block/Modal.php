<?php

namespace Lailson\Biz\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

class Modal extends Template
{
    public function __construct(
        Context $context,
        array $data = []
    )
    {
        parent::__construct($context, $data);
    }

//    public function getRegisterUrl()
//    {
//        return $this->getUrl('newsletter/modal/index', ['referer' => base64_encode($this->getCurrentUrl())]);
//    }
//
//    protected function getCurrentUrl()
//    {
//        return $this->getUrl('//', ['_current' => true, '_use_rewrite' => true]);
//    }
}

