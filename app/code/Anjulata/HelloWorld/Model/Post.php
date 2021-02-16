<?php
namespace Anjulata\HelloWorld\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'anjulata_helloworld_post';

    protected $_cacheTag = 'anjulata_helloworld_post';

    protected $_eventPrefix = 'anjulata_helloworld_post';

    protected function _construct()
    {
        $this->_init('Anjulata\HelloWorld\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}
