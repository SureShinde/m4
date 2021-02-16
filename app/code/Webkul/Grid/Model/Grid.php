<?php

/**
 * Grid Grid Model.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */
namespace Webkul\Grid\Model;

use Webkul\Grid\Api\Data\GridInterface;

class Grid extends \Magento\Framework\Model\AbstractModel implements GridInterface
{
    /**
     * CMS page cache tag.
     */
    const CACHE_TAG = 'anjulata_post';

    /**
     * @var string
     */
    protected $_cacheTag = 'anjulata_post';

    /**
     * Prefix of model events names.
     *
     * @var string
     */
    protected $_eventPrefix = 'anjulata_post';

    /**
     * Initialize resource model.
     */
    protected function _construct()
    {
        $this->_init('Webkul\Grid\Model\ResourceModel\Grid');
    }
    /**
     * Get EntityId.
     *
     * @return int
     */
    /*public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }*/
    public function getPostId()
    {
        return $this->getData(self::POST_ID);
    }

    /**
     * Set EntityId.
     */
    public function setPostId($postId)
    {
        return $this->setData(self::POST_ID, $postId);
    }

    /**
     * Get Title.
     *
     * @return varchar
     */
    public function getName()
    {
        return $this->getData(self::NAME);
    }

    /**
     * Set Title.
     */
    public function setName($name)
    {
        return $this->setData(self::NAME, $name);
    }

    /**
     * Get url_key.
     *
     * @return varchar
     */
    public function getUrlKey()
    {
        return $this->getData(self::URL_KEY);
    }

    /**
     * Set PublishDate.
     */
    public function setUrlKey($urlkey)
    {
        return $this->setData(self::URL_KEY, $urlkey);
    }


    /**
     * Get getContent.
     *
     * @return varchar
     */
    public function getPostContent()
    {
        return $this->getData(self::POST_CONTENT);
    }

    /**
     * Set Content.
     */
    public function setPostContent($postcontent)
    {
        return $this->setData(self::POST_CONTENT, $postcontent);
    }



    /**
     * Get Tags.
     *
     * @return varchar
     */
    public function getTags()
    {
        return $this->getData(self::TAGS);
    }

    /**
     * Set Tags.
     */
    public function setTags($tags)
    {
        return $this->setData(self::TAGS, $tags);
    }

    /**
     * Get UpdateTime.
     *
     * @return varchar
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set UpdateTime.
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get FeaturedImage.
     *
     * @return varchar
     */
    public function getFeaturedImage()
    {
        return $this->getData(self::FEATURED_IMAGE);
    }

    /**
     * Set UpdateTime.
     */
    public function setFeaturedImage($featuredimage)
    {
        return $this->setData(self::FEATURED_IMAGE, $featuredimage);
    }

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt()
    {
        return $this->getData(self::CREATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get UpdatedAt.
     *
     * @return varchar
     */
    public function getUpdatedAt()
    {
        return $this->getData(self::UPDATED_AT);
    }

    /**
     * Set CreatedAt.
     */
    public function setUpdatedAt($updatedAt)
    {
        return $this->setData(self::UPDATED_AT, $updatedAt);
    }

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail()
    {
        return $this->getData(self::EMAIL);
    }

    /**
     * Set Email.
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get Mobile.
     *
     * @return varchar
     */
    public function getMobile()
    {
        return $this->getData(self::MOBILE);
    }

    /**
     * Set Mobile.
     */
    public function setMobile($mobile)
    {
        return $this->setData(self::MOBILE, $mobile);
    }

    /**
     * Get Cdate.
     *
     * @return varchar
     */
    public function getCdate()
    {
        return $this->getData(self::CDATE);
    }

    /**
     * Set Mobile.
     */
    public function setCdate($cdate)
    {
        return $this->setData(self::CDATE, $cdate);
    }

    /**
     * Get PostStatus.
     *
     * @return varchar
     */
    public function getPostStatus()
    {
        return $this->getData(self::POST_STATUS);
    }

    /**
     * Set PostStatus.
     */
    public function setPostStatus($poststatu)
    {
        return $this->setData(self::POST_STATUS, $poststatu);
    }

    /**
     * Get RadioSelect.
     *
     * @return varchar
     */
    public function getRadioSelect()
    {
        return $this->getData(self::RADIO_SELECT);
    }

    /**
     * Set RadioSelect.
     */
    public function setRadioSelect($radioselect)
    {
        return $this->setData(self::RADIO_SELECT, $radioselect);
    }
}
