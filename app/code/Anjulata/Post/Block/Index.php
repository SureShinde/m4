<?php

namespace Anjulata\Post\Block;
use Magento\Framework\Controller\ResultFactory;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $_pageFactory;

    protected $_postFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Anjulata\Post\Model\PostFactory $postFactory
    )
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        return parent::__construct($context);
    }

    public function getPostData()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        /*foreach($collection as $item){
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();*/
//        return $this->_pageFactory->create();
        return $collection->getData();
    }
    public function getEditUrl($id)
    {

        return $this->getUrl('post/index/booking', ['id' => $id]);
    }
}
