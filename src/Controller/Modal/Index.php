<?php

namespace Lailson\Biz\Controller\Modal;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\App\Request\Http;
use Lailson\Biz\Helper\Data;
use Lailson\Biz\Model\Modal;


class Index extends Action
{
    protected $_modalModel;
    protected $_request;

    public function __construct(
        Context $context,
        Modal $modalModel,
        Http $request
    )
    {
        parent::__construct($context);
        $this->_modalModel = $modalModel;
        $this->_request = $request;
    }
    /**
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
     public function execute()
    {
        $email = $this->_request->getPostValue('email');
        if ($email) {
            $this->_modalModel->addEmail($email);
            $this->messageManager->addSuccessMessage(__('Email Cadastrado Com Sucesso!!'));
        } else {
            $this->messageManager->addWarning(__('Erro ao Cadastrar o Email'));
        }
    }
}
