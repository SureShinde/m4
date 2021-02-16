<?php

namespace Webkul\Grid\Observer;

use Magento\Framework\Event\ObserverInterface;

class AddCustomerData implements ObserverInterface
{
    public function __construct(
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepositoryInterface
    ){
        $this->_customerRepositoryInterface = $customerRepositoryInterface;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getEvent()->getCustomer();

//        echo '<pre>'; print_r($customer->getFirstname()); exit;
    }
}
