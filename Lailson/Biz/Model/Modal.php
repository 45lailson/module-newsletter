<?php


namespace Lailson\Biz\Model;

use Magento\Newsletter\Model\ResourceModel\Subscriber\Collection;
use Magento\Newsletter\Model\SubscriberFactory;

class Modal
{
    protected $_collection;
    protected $_subscribeFactory;

    public function __construct(
        Collection $collection,
        SubscriberFactory $subscriberFactory
    )
    {
        $this->_collection = $collection;
        $this->_subscribeFactory = $subscriberFactory;
    }

    public function addEmail($email)
    {
        $customer = $this->_collection->addFieldToFilter('subscriber_email', $email)->getFirstItem()->getData();
        if (!$customer) {
            $factory = $this->_subscribeFactory->create();
            $factory->setData('subscriber_email', $email);
            $factory->save();
        }
    }
}
