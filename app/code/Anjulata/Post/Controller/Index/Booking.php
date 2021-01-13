<?php
namespace Anjulata\Post\Controller\Index;

use Magento\Framework\Controller\ResultFactory;

class Booking extends \Magento\Framework\App\Action\Action
{
    /**
     * Booking action
     *
     * @return void
     */
    public function execute()
    {

        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
