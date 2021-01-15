<?php
namespace Anjulata\Post\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Anjulata\Post\Model\PostFactory;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Session\SessionManagerInterface;

class Save extends Action
{

    protected $_modelPostFactory;
    protected $resultPageFactory;
    protected $_sessionManager;

    public function __construct(
        Context $context,
        PostFactory $modelPostFactory,
        PageFactory  $resultPageFactory,
        SessionManagerInterface $sessionManager
    )
    {
        parent::__construct($context);
        $this->_modelPostFactory = $modelPostFactory;
        $this->resultPageFactory = $resultPageFactory;
        $this->_sessionManager = $sessionManager;
    }

    public function execute()
    {
        //echo "test";exit;
        $resultRedirect     = $this->resultRedirectFactory->create();
        $PostModel          = $this->_modelPostFactory->create();
        $data               = $this->getRequest()->getPost();
        //print_r($data);exit;
        //$date               = date('Y-m-d h:i:sa');

        /*$BlogModel->setData('blog_title', $data['blog_title']);
        $BlogModel->setData('blog_content', $data['blog_content']);
        $BlogModel->setData('user_email', $data['user_email']);
        $BlogModel->setData('created_date', $date);
        $BlogModel->setData('status', $data['status']);*/

        $PostModel->setData('name', $data['name']);
        $PostModel->setData('url_key', $data['url_key']);
        $PostModel->setData('post_content', $data['post_content']);
        $PostModel->setData('ptags', $data['ptags']);
        $PostModel->setData('pstatus', $data['pstatus']);
        $PostModel->setData('featured_image', $data['featured_image']);
        $PostModel->setData('email', $data['email']);
        $PostModel->setData('mobile', $data['mobile']);
        $PostModel->setData('cdate', $data['cdate']);
        $PostModel->setData('post_status', $data['post_status']);
        $PostModel->setData('radio_select', $data['radio_select']);
       // $PostModel->setData($data);

        $PostModel->save();

        $this->_redirect('post/index/booking');
        $this->messageManager->addSuccess(__('The data has been saved.'));
    }
}
