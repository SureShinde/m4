<?php

namespace Anjulata\Email\Controller\Index;

use Magento\Framework\App\RequestInterface;

class Sendemail extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\App\Request\Http
     */
    protected $_request;
    /**
     * @var \Magento\Framework\Mail\Template\TransportBuilder
     */
    protected $_transportBuilder;
    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\Mail\Template\TransportBuilder $transportBuilder,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    )
    {
        $this->_request = $request;
        $this->_transportBuilder = $transportBuilder;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function execute()
    {
//        echo"tests";
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $product = $objectManager->create('Magento\Catalog\Model\Product')->load(2048);
//       echo '<pre>'; print_r($product->getName());exit;

        $store = $this->_storeManager->getStore()->getId();
        $transport = $this->_transportBuilder->setTemplateIdentifier('anjulata_email_test_template')
            ->setTemplateOptions(['area' => 'frontend', 'store' => $store])
            ->setTemplateVars(
                /*[
                    'store1' => $this->_storeManager->getStore()->getCode(),
                    'customer_name' => array('first'=>'John Doe','ln'=>'Anjulata'),
                    'message'	=> 'Hello World!!.'
                ]*/
                [
                    'name' => $product->getName(),
                    'sku' => $product->getSku(),
                    'url' => $product->getUrl()
                ]
            )
            ->setFrom('general')
            // you can config general email address in Store -> Configuration -> General -> Store Email Addresses
            ->addTo('anjulata099@gmail.com', 'Anjulata Gupta')
            ->getTransport();
        $transport->sendMessage();
//        return $this;
    }
}
