<?php
/**
 * Grid GridInterface.
 * @category  Webkul
 * @package   Webkul_Grid
 * @author    Webkul
 * @copyright Copyright (c) 2010-2017 Webkul Software Private Limited (https://webkul.com)
 * @license   https://store.webkul.com/license.html
 */

namespace Webkul\Grid\Api\Data;

interface GridInterface
{
    /**
     * Constants for keys of data array. Identical to the name of the getter in snake case.
     */
    const POST_ID = 'post_id';
    const NAME = 'name';
    const URL_KEY = 'url_key';
    const POST_CONTENT = 'post_content';
    const TAGS = 'tags';
    const STATUS = 'status';
    const FEATURED_IMAGE = 'featured_image';
    const EMAIL = 'email';
    const MOBILE = 'mobile';
    const CDATE = 'cdate';
    const POST_STATUS = 'post_status';
    const RADIO_SELECT = 'radio_select';
    const UPDATE_At = 'update_at';
    const CREATED_AT = 'created_at';

   /**
    * Get EntityId.
    *
    * @return int
    */
    public function getPostId();

   /**
    * Set EntityId.
    */
    public function setPostId($postId);

   /**
    * Get Title.
    *
    * @return varchar
    */
    public function getName();

   /**
    * Set Title.
    */
    public function setName($name);

   /**
    * Get Content.
    *
    * @return varchar
    */
    public function getUrlKey();

   /**
    * Set Content.
    */
    public function setUrlKey($urlkey);

   /**
    * Get Publish Date.
    *
    * @return varchar
    */
    public function getPostContent();

   /**
    * Set PublishDate.
    */
    public function setPostContent($postcontent);

   /**
    * Get IsActive.
    *
    * @return varchar
    */
    public function getTags();

   /**
    * Set StartingPrice.
    */
    public function setTags($tags);

   /**
    * Get UpdateTime.
    *
    * @return varchar
    */
    public function getStatus();

   /**
    * Set UpdateTime.
    */
    public function setStatus($status);

   /**
    * Get Feature Image.
    *
    * @return varchar
    */
    public function getFeaturedImage();

    /**
     * Set CreatedAt.
     */
    public function setFeaturedImage($featuredimage);

    /**
     * Get Email.
     *
     * @return varchar
     */
    public function getEmail();

   /**
    * Set CreatedAt.
    */
    public function setEmail($email);

    /**
     * Get Mobile.
     *
     * @return varchar
     */
    public function getMobile();

   /**
    * Set CreatedAt.
    */
    public function setMobile($mobile);
    /**
     * Get Cdate.
     *
     * @return varchar
     */
    public function getCdate();

   /**
    * Set CreatedAt.
    */
    public function setCdate($cdate);

    /**
     * Get Post Status.
     *
     * @return varchar
     */
    public function getPostStatus();

   /**
    * Set CreatedAt.
    */
    public function setPostStatus($poststatu);

    /**
     * Get Radio Select.
     *
     * @return varchar
     */
    public function getRadioSelect();

   /**
    * Set CreatedAt.
    */
    public function setRadioSelect($radioselect);

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getCreatedAt();

   /**
    * Set CreatedAt.
    */
    public function setCreatedAt($createdAt);

    /**
     * Get CreatedAt.
     *
     * @return varchar
     */
    public function getUpdatedAt();

   /**
    * Set CreatedAt.
    */
    public function setUpdatedAt($updatedAt);
}
