<?php
/** @package    mage2...*/
namespace Anjulata\RestApi\Api;
use Magento\Framework\Exception\NoSuchEntityException;
/**
 * Anjulata Api to get Product by Id
 */
interface ProductRepositoryInterface
{
    /**
     * Get Product by its Id
     *
     * @param int $id
     * @return \Anjulata\RestApi\Api\Data\ProductInterface
     * @throws NoSuchEntityException
     */
    public function getProductById($id);
}
